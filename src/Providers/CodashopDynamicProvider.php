<?php

namespace Aditdev\Providers;

use Aditdev\Http\HttpClient;
use Aditdev\Support\Result;

/**
 * Codashop dynamic-SKU provider (for titles like VALORANT / Riot games).
 *
 * These games use short-lived, session-bound tokens that cannot be hard-coded.
 * The nickname is resolved through a 3-step chain, all at runtime:
 *
 *   1. GET the product page            -> extract the fresh `pageLockToken`
 *   2. POST createOrderToken           -> exchange it for dynamicSku / pricePoint tokens
 *   3. POST initPayment.action         -> validate the account, read the nickname
 *
 * Required game config keys:
 *   pageUrl, productPath, skuId, paymentChannelId, voucherTypeName,
 *   voucherTypeId, lvtId, gvtId, vppId, price
 */
class CodashopDynamicProvider implements ProviderInterface
{
    const ORDER_TOKEN_ENDPOINT = 'https://shopapi.codashop.com/productPage/createOrderToken';
    const INIT_ENDPOINT        = 'https://order-sg.codashop.com/initPayment.action';

    /** Matches the pageLockToken JWT embedded in the product page HTML. */
    const PAGE_LOCK_REGEX = '/eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9\.eyJwcmljaW5nRW5naW5l[A-Za-z0-9_-]+\.[A-Za-z0-9_-]+/';

    const USER_AGENT = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36';

    /** @var HttpClient */
    private $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    public function lookup(array $game, $id, $otherId = ''): Result
    {
        // Step 1: fetch a fresh pageLockToken from the product page.
        $page = $this->http->get($game['pageUrl'], ['User-Agent' => self::USER_AGENT]);
        if ($page->failed() || $page->body === null) {
            return Result::error();
        }
        if (!preg_match(self::PAGE_LOCK_REGEX, $page->body, $m)) {
            return Result::error('Could not obtain page lock token');
        }
        $pageLockToken = $m[0];

        // Step 2: exchange it for the dynamic SKU tokens.
        $orderResp = $this->http->postJson(self::ORDER_TOKEN_ENDPOINT, [
            'pageLockToken'    => $pageLockToken,
            'productPath'      => $game['productPath'],
            'skuId'            => $game['skuId'],
            'paymentChannelId' => $game['paymentChannelId'],
            'whitelabelId'     => 0,
        ], $this->jsonHeaders());

        if ($orderResp->failed()) {
            return Result::error();
        }
        $tokens = $orderResp->json();
        if (!isset($tokens['dynamicSkuToken'], $tokens['pricePointToken'])) {
            return Result::error('Could not create order token');
        }

        // Step 3: validate the account.
        $initResp = $this->http->postForm(self::INIT_ENDPOINT, [
            'voucherPricePoint.id'            => $game['vppId'],
            'voucherPricePoint.price'         => $game['price'],
            'voucherPricePoint.variablePrice' => 0,
            'user.userId'                     => $id,
            'user.zoneId'                     => $otherId,
            'voucherTypeName'                 => $game['voucherTypeName'],
            'voucherTypeId'                   => $game['voucherTypeId'],
            'lvtId'                           => $game['lvtId'],
            'gvtId'                           => $game['gvtId'],
            'pcId'                            => $game['paymentChannelId'],
            'shopLang'                        => 'id_ID',
            'dynamicSkuToken'                 => $tokens['dynamicSkuToken'],
            'pricePointDynamicSkuToken'       => $tokens['pricePointToken'],
            'pricingEngineToken'              => $tokens['pricingEngineToken'] ?? '',
        ], $this->initHeaders());

        if ($initResp->failed()) {
            return Result::error();
        }
        $data = $initResp->json();
        if ($data === null) {
            return Result::error('Unexpected response from Codashop');
        }

        if (isset($data['errorCode']) && (string) $data['errorCode'] === '-200') {
            return Result::restricted();
        }
        if (empty($data['success']) || !empty($data['errorMsg'])) {
            return Result::invalid($game['errorMessage'] ?? 'Invalid ID');
        }

        $username = $data['confirmationFields']['username'] ?? null;
        if ($username === null || $username === '') {
            return Result::invalid($game['errorMessage'] ?? 'Invalid ID');
        }

        return Result::success(urldecode($username));
    }

    /**
     * @return array<string,string>
     */
    private function jsonHeaders()
    {
        return [
            'Accept'     => 'application/json, text/plain, */*',
            'Origin'     => 'https://www.codashop.com',
            'Referer'    => 'https://www.codashop.com/',
            'User-Agent' => self::USER_AGENT,
        ];
    }

    /**
     * @return array<string,string>
     */
    private function initHeaders()
    {
        return [
            'Origin'     => 'https://www.codashop.com',
            'Referer'    => 'https://www.codashop.com/',
            'User-Agent' => self::USER_AGENT,
        ];
    }
}
