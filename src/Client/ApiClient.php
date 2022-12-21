<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Client;

use Webcodefactory\P24\Exception\ApiClientException;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class ApiClient
{
    protected HttpClientInterface $httpClient;
    protected LoggerInterface $logger;
    protected string $host;
    protected string $user;
    protected string $pass;

    public function __construct(
        HttpClientInterface $httpClient,
        LoggerInterface $logger,
        string $host,
        string $user,
        string $pass
    ) {
        $this->httpClient = $httpClient;
        $this->logger = $logger;
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
    }

    public function send(string $url, string $data): ResponseInterface
    {
        $url = sprintf('%s/%s',$this->host,$url);
        try {
            return $this->httpClient->request('POST', $url,[
                'headers' => [
                    'Content-Type: application/json',
                    'Accept: application/json',
                ],
                'auth_basic' => [$this->user, $this->pass],
                'body' => $data
            ]);
        } catch (TransportExceptionInterface $exception) {
            $this->logger->alert($exception->getMessage());
            throw new ApiClientException($exception->getMessage());
        }
    }
}
