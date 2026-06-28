<?php

namespace Aditdev\Http;

require_once __DIR__ . '/Response.php';

/**
 * Thin cURL wrapper with sane defaults, timeouts and error handling.
 */
class HttpClient
{
    /** @var int */
    private $timeout;

    public function __construct($timeout = 15)
    {
        $this->timeout = $timeout;
    }

    /**
     * Perform a GET request.
     *
     * @param array<string,string> $headers
     */
    public function get($url, array $headers = []): Response
    {
        return $this->send('GET', $url, null, $headers);
    }

    /**
     * Perform a POST request with a JSON body.
     *
     * @param array<string,mixed>  $body
     * @param array<string,string> $headers
     */
    public function postJson($url, array $body, array $headers = []): Response
    {
        $headers['Content-Type'] = 'application/json';

        return $this->send('POST', $url, json_encode($body), $headers);
    }

    /**
     * Perform a POST request with a form-urlencoded body.
     *
     * @param array<string,mixed>  $body
     * @param array<string,string> $headers
     */
    public function postForm($url, array $body, array $headers = []): Response
    {
        $headers['Content-Type'] = 'application/x-www-form-urlencoded';

        return $this->send('POST', $url, http_build_query($body), $headers);
    }

    /**
     * @param array<string,string> $headers
     */
    private function send($method, $url, $body, array $headers): Response
    {
        $ch = curl_init();

        curl_setopt_array($ch, [
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST  => $method,
            CURLOPT_TIMEOUT        => $this->timeout,
            CURLOPT_CONNECTTIMEOUT => $this->timeout,
            CURLOPT_ENCODING       => '',
            CURLOPT_HTTPHEADER     => $this->formatHeaders($headers),
        ]);

        if ($body !== null) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        }

        $response = curl_exec($ch);
        $error    = curl_errno($ch);
        $status   = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($error !== 0 || $response === false) {
            return new Response(0, null);
        }

        return new Response($status, $response);
    }

    /**
     * Convert an associative header map into the "Key: Value" list cURL expects.
     *
     * @param array<string,string> $headers
     * @return array<int,string>
     */
    private function formatHeaders(array $headers)
    {
        $formatted = [];
        foreach ($headers as $key => $value) {
            $formatted[] = $key . ': ' . $value;
        }

        return $formatted;
    }
}
