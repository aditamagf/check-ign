<?php

namespace Aditdev\Providers;

use Aditdev\Http\HttpClient;
use Aditdev\Support\Result;

/**
 * DancingIdol provider (used by AU2 Mobile).
 *
 * Simple GET endpoint that returns:
 *   {"data":{"rolename":"..."}}
 */
class DancingIdolProvider implements ProviderInterface
{
    const ENDPOINT = 'http://dancingidol.uniuhk.com/api/role/info?roleId=';

    /** @var HttpClient */
    private $http;

    public function __construct(HttpClient $http)
    {
        $this->http = $http;
    }

    public function lookup(array $game, $id, $otherId = ''): Result
    {
        $response = $this->http->get(self::ENDPOINT . urlencode($id), $this->headers());
        if ($response->failed()) {
            return Result::error();
        }

        $data     = $response->json();
        $rolename = $data['data']['rolename'] ?? null;

        if (empty($rolename)) {
            return Result::invalid($game['errorMessage'] ?? 'Invalid ID');
        }

        return Result::success($rolename);
    }

    /**
     * @return array<string,string>
     */
    private function headers()
    {
        return [
            'Host'    => 'dancingidol.uniuhk.com',
            'Referer' => 'http://dancingidol.uniuhk.com/payment',
        ];
    }
}
