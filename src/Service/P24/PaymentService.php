<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Service\P24;

use Webcodefactory\P24\Client\P24\ApiClient;
use Webcodefactory\P24\Enum\EndpointEnum;
use Webcodefactory\P24\Factory\P24\RegisterResponseFactory;
use Webcodefactory\P24\Factory\P24\VerifyResponseFactory;
use Webcodefactory\P24\Request\Payload\P24\TransactionRegisterPayload;
use Webcodefactory\P24\Request\Payload\P24\TransactionVerifyPayload;
use Webcodefactory\P24\Response\P24\RegisterResponse;
use Webcodefactory\P24\Response\P24\VerifyResponse;
use Symfony\Component\Serializer\Normalizer\AbstractObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;

class PaymentService implements PaymentInterface
{
    private ApiClient $apiClient;
    private SerializerInterface $serializer;
    private RegisterResponseFactory $registerResponseFactory;
    private VerifyResponseFactory $verifyResponseFactory;
    private string $crc;

    public function __construct(
        ApiClient $apiClient,
        SerializerInterface $serializer,
        RegisterResponseFactory $registerResponseFactory,
        VerifyResponseFactory $verifyResponseFactory,
        string $crc
    ) {
        $this->apiClient = $apiClient;
        $this->serializer = $serializer;
        $this->registerResponseFactory = $registerResponseFactory;
        $this->verifyResponseFactory = $verifyResponseFactory;
        $this->crc = $crc;
    }

    public function register(
        TransactionRegisterPayload $transactionRegisterPayload
    ): RegisterResponse
    {
        $transactionRegisterPayload->setSign($this->getSignForRegister($transactionRegisterPayload));
        $data = $this->serializer->serialize($transactionRegisterPayload, 'json', [AbstractObjectNormalizer::ALLOW_EXTRA_ATTRIBUTES]);
        $response = $this->apiClient->send(EndpointEnum::REGISTER, $data);

        return $this->registerResponseFactory->create(json_decode($response->getContent(),true));
    }

    public function verify(
        TransactionVerifyPayload $transactionVerifyPayload
    ): VerifyResponse
    {
        $transactionVerifyPayload->setSign($this->getSignForVerify($transactionVerifyPayload));
        $data = $this->serializer->serialize($transactionVerifyPayload, 'json', [AbstractObjectNormalizer::ALLOW_EXTRA_ATTRIBUTES]);
        $response = $this->apiClient->send(EndpointEnum::VERIFY, $data);

        return $this->verifyResponseFactory->create(json_decode($response->getContent(),true));
    }

    private function getSignForRegister(TransactionRegisterPayload $transactionRegisterPayload): string
    {
        $data =  json_encode([
            'sessionId' => $transactionRegisterPayload->getSessionId(),
            'merchantId' => $transactionRegisterPayload->getMerchantId(),
            'amount' => $transactionRegisterPayload->getAmount(),
            'currency' => $transactionRegisterPayload->getCurrency(),
            'crc' => $this->crc
        ],JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        return hash('sha384',$data);
    }

    private function getSignForVerify(TransactionVerifyPayload $transactionVerifyPayload): string
    {
        $data =  json_encode([
            'sessionId' => $transactionVerifyPayload->getSessionId(),
            'orderId' => $transactionVerifyPayload->getOrderId(),
            'amount' => $transactionVerifyPayload->getAmount(),
            'currency' => $transactionVerifyPayload->getCurrency(),
            'crc' => $this->crc
        ],JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

        return hash('sha384',$data);
    }
}
