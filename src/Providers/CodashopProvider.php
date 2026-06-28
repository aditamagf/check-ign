<?php

namespace Aditdev\Providers;

use Aditdev\Http\HttpClient;
use Aditdev\Support\Result;

/**
 * Codashop nickname validation provider (initPayment flow).
 *
 * Posts the voucher / price-point payload to Codashop's initPayment endpoint
 * and reads the resolved nickname from the confirmation fields.
 *
 * Per-game parameters (vppId, price, tokens, ...) live in src/games.php so the
 * provider itself stays generic.
 */
class CodashopProvider implements ProviderInterface
{
    const ENDPOINT = 'https://order-sg.codashop.com/initPayment.action';

    /** @var HttpClient */
    private $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    public function lookup(array $game, $id, $otherId = ''): Result
    {
        $response = $this->http->postJson(self::ENDPOINT, $this->buildBody($game, $id, $otherId), $this->headers());
        if ($response->failed()) {
            return Result::error();
        }

        if ($response->status === 429) {
            return Result::rateLimited();
        }

        $data = $response->json();
        if ($data === null) {
            return Result::error('Unexpected response from Codashop');
        }

        // Codashop throttle marker.
        if (isset($data['RESULT_CODE']) && $data['RESULT_CODE'] == '10001') {
            return Result::rateLimited();
        }

        // Account exists but is region/channel restricted (e.g. wrong server).
        if (isset($data['errorCode']) && (string) $data['errorCode'] === '-200') {
            return Result::restricted();
        }

        if (empty($data['success']) || !empty($data['errorMsg'])) {
            return Result::invalid($game['errorMessage'] ?? 'Invalid ID');
        }

        $nickname = $this->extractNickname($data, $game['nickname'] ?? 'username');
        if ($nickname === null || $nickname === '') {
            return Result::invalid($game['errorMessage'] ?? 'Invalid ID');
        }

        return Result::success(urldecode($nickname));
    }

    /**
     * Build the initPayment request body from a game's configuration.
     *
     * @param array<string,mixed> $game
     * @return array<string,mixed>
     */
    private function buildBody(array $game, $id, $otherId)
    {
        return [
            'voucherPricePoint.id'            => $game['vppId'],
            'voucherPricePoint.price'         => $game['price'],
            'voucherPricePoint.variablePrice' => 0,
            'user.userId'                     => $id,
            'user.zoneId'                     => $this->resolveZone($game, $otherId),
            'voucherTypeName'                 => $game['voucherTypeName'],
            'lvtId'                           => $game['lvtId'] ?? '',
            'shopLang'                        => 'id_ID',
            'dynamicSkuToken'                 => $game['dynamicSkuToken'] ?? '',
            'pricePointDynamicSkuToken'       => $game['pricePointDynamicSkuToken'] ?? '',
            'voucherTypeId'                   => $game['voucherTypeId'] ?? '',
        ];
    }

    /**
     * Resolve the zoneId/server value.
     *
     * - 'zone' unset           -> no zone (empty string)
     * - 'zone' === 'user'      -> caller supplied secondary id
     * - 'zone' === any literal -> fixed server value
     *
     * @param array<string,mixed> $game
     */
    private function resolveZone(array $game, $otherId)
    {
        if (!isset($game['zone'])) {
            return '';
        }

        $zone = $game['zone'] === 'user' ? $otherId : $game['zone'];

        if (($game['zoneFilter'] ?? null) === 'digits') {
            $zone = preg_replace('/\D/', '', (string) $zone);
        }

        return $zone;
    }

    /**
     * Pull the nickname out of the response according to the configured path.
     *
     * @param array<string,mixed> $data
     */
    private function extractNickname(array $data, $path)
    {
        switch ($path) {
            case 'role':
                return $data['confirmationFields']['roles'][0]['role'] ?? null;
            case 'result':
                return $data['result'] ?? null;
            case 'username':
            default:
                return $data['confirmationFields']['username'] ?? null;
        }
    }

    /**
     * @return array<string,string>
     */
    private function headers()
    {
        return [
            'Origin'     => 'https://www.codashop.com',
            'Referer'    => 'https://www.codashop.com/',
            'User-Agent' => 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Mobile Safari/537.36',
        ];
    }
}
