<?php

namespace Aditdev\Support;

/**
 * Standardized result object for every nickname lookup.
 *
 * Keeps the response shape consistent across all providers and makes it easy
 * to convert to the legacy JSON string format the library used before.
 */
class Result
{
    /** @var int HTTP-like status code (200 ok, 400 invalid, 429 rate-limited, 404 not found, 500 error). */
    public $status;

    /** @var string|null Resolved in-game nickname (only on success). */
    public $nickname;

    /** @var string|null Human readable message (only on failure). */
    public $message;

    private function __construct($status, $nickname = null, $message = null)
    {
        $this->status   = $status;
        $this->nickname = $nickname;
        $this->message  = $message;
    }

    public static function success($nickname)
    {
        return new self(200, $nickname, null);
    }

    public static function invalid($message = 'Invalid ID')
    {
        return new self(400, null, $message);
    }

    public static function rateLimited($message = 'Too many attempts, please wait a few seconds')
    {
        return new self(429, null, $message);
    }

    public static function notFound($message = 'Game not found')
    {
        return new self(404, null, $message);
    }

    /**
     * The account is valid but cannot be served on this channel/region
     * (e.g. Codashop errorCode -200: account created in another country).
     */
    public static function restricted($message = 'Account region not supported on this channel. Use the correct server/region.')
    {
        return new self(403, null, $message);
    }

    public static function error($message = 'Upstream request failed')
    {
        return new self(500, null, $message);
    }

    /**
     * @return array{status:int, nickname?:string, msg?:string}
     */
    public function toArray()
    {
        if ($this->status === 200) {
            return ['status' => 200, 'nickname' => $this->nickname];
        }

        return ['status' => $this->status, 'msg' => $this->message];
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }
}
