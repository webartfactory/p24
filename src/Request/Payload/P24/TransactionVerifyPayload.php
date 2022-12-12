<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Request\Payload\P24;

class TransactionVerifyPayload
{
    private int $merchantId;
    private int $posId;
    private string $sessionId;
    private int $amount;
    private string $currency = 'PLN';
    private int $orderId;
    private string $sign;

    public function getMerchantId(): int
    {
        return $this->merchantId;
    }

    public function setMerchantId(int $merchantId): void
    {
        $this->merchantId = $merchantId;
    }

    public function getPosId(): int
    {
        return $this->posId;
    }

    public function setPosId(int $posId): void
    {
        $this->posId = $posId;
    }

    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    public function setSessionId(string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount): void
    {
        $this->amount = $amount;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    public function getOrderId(): int
    {
        return $this->orderId;
    }

    public function setOrderId(int $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getSign(): string
    {
        return $this->sign;
    }

    public function setSign(string $sign): void
    {
        $this->sign = $sign;
    }
}
