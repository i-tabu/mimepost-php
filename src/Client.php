<?php

namespace MimePost;

/**
 * Simple PHP SDK for the MimePost API.
 *
 * @see https://mimepost.com/
 */
class Client
{
    /** @var string */
    private $apiToken;

    /** @var string */
    private $baseUrl;

    /** @var string */
    private $userAgent;

    /**
     * Create a new client instance.
     *
     * @param string $apiToken  Your API token from the MimePost dashboard.
     * @param string $baseUrl   Base URL for the API (defaults to the public API).
     * @param string $userAgent Optional custom User-Agent.
     */
    public function __construct(string $apiToken, string $baseUrl = 'https://api.mimepost.com/v1/', string $userAgent = 'mimepost-php-sdk/1.0')
    {
        $this->apiToken = $apiToken;
        $this->baseUrl = rtrim($baseUrl, '/') . '/';
        $this->userAgent = $userAgent;
    }

    /**
     * Send an HTTP request to the MimePost API.
     *
     * @param string     $method HTTP method (GET, POST, etc.).
     * @param string     $path   Request path relative to the base URL.
     * @param array|null $body   Associative array to send as JSON body.
     *
     * @return array Decoded JSON response.
     */
    public function request(string $method, string $path, ?array $body = null): array
    {
        $url = $this->baseUrl . ltrim($path, '/');

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, strtoupper($method));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'X-Auth-Token: ' . $this->apiToken,
            'User-Agent: ' . $this->userAgent,
        ]);

        if ($body !== null) {
            $json = json_encode($body);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        }

        $response = curl_exec($ch);
        if ($response === false) {
            throw new \RuntimeException('cURL error: ' . curl_error($ch));
        }

        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $decoded = json_decode($response, true);
        if ($statusCode >= 400) {
            $message = is_array($decoded) && isset($decoded['message']) ? $decoded['message'] : 'HTTP ' . $statusCode;
            throw new \RuntimeException($message, $statusCode);
        }

        return $decoded;
    }

    /**
     * Send a transactional email using a template.
     *
     * @param array $payload Request body as documented in the API.
     */
    public function sendEmail(array $payload): array
    {
        return $this->request('POST', 'emails/', $payload);
    }

    /**
     * List available templates.
     */
    public function listTemplates(): array
    {
        return $this->request('GET', 'templates/');
    }

    /**
     * Fetch a single template by its UID.
     */
    public function getTemplate(string $templateUid): array
    {
        return $this->request('GET', 'templates/' . $templateUid);
    }

    /**
     * Create a new template.
     */
    public function createTemplate(array $payload): array
    {
        return $this->request('POST', 'templates/', $payload);
    }

    /**
     * List all domains associated with the account.
     */
    public function listDomains(): array
    {
        return $this->request('GET', 'domains');
    }

    /**
     * List registered webhooks.
     */
    public function listWebhooks(): array
    {
        return $this->request('GET', 'webhooks');
    }

    /**
     * Get summary statistics.
     *
     * @param array $query Optional query parameters.
     */
    public function getStats(array $query = []): array
    {
        $path = 'stats';
        if ($query) {
            $path .= '?' . http_build_query($query);
        }
        return $this->request('GET', $path);
    }
}
