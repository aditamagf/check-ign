<?php

namespace Aditdev\Http;

/**
 * Minimal HTTP response value object.
 */
class Response
{
    /** @var int HTTP status code (0 when the request never completed). */
    public $status;

    /** @var string|null Raw response body. */
    public $body;

    public function __construct($status, $body)
    {
        $this->status = $status;
        $this->body   = $body;
    }

    /** Did the transport layer complete the request at all? */
    public function failed()
    {
        return $this->status === 0 || $this->body === null;
    }

    /** Decode the body as a JSON associative array, or null when invalid. */
    public function json()
    {
        if ($this->body === null) {
            return null;
        }

        $decoded = json_decode($this->body, true);

        return is_array($decoded) ? $decoded : null;
    }
}
