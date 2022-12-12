<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Request\Payload\P24;

class TransactionRegisterPayload
{
    private int $merchantId;
    private int $posId;
    private string $sessionId;
    private int $amount;
    private string $currency = 'PLN';
    private string $description;
    private string $email;
    private string $client;
    private string $address;
    private string $zip;
    private string $city;
    private string $country = 'PL';
    private string $phone;
    private string $language = 'pl';
    private int $method;
    private string $urlReturn;
    private string $urlStatus;
    private int $timeLimit;
    private int $channel;
    private bool $waitForResult;
    private bool $regulationAccept;
    private int $shipping;
    private string $transferLabel;
    private int $mobileLib;
    private string $sdkVersion;
    private string $sign;
    private string $encoding;
    private string $methodRefId;
    private Cart $cart;
    private Additional $additional;

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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getClient(): string
    {
        return $this->client;
    }

    public function setClient(string $client): void
    {
        $this->client = $client;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getZip(): string
    {
        return $this->zip;
    }

    public function setZip(string $zip): void
    {
        $this->zip = $zip;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    public function getMethod(): int
    {
        return $this->method;
    }

    public function setMethod(int $method): void
    {
        $this->method = $method;
    }

    public function getUrlReturn(): string
    {
        return $this->urlReturn;
    }

    public function setUrlReturn(string $urlReturn): void
    {
        $this->urlReturn = $urlReturn;
    }

    public function getUrlStatus(): string
    {
        return $this->urlStatus;
    }

    public function setUrlStatus(string $urlStatus): void
    {
        $this->urlStatus = $urlStatus;
    }

    public function getTimeLimit(): int
    {
        return $this->timeLimit;
    }

    public function setTimeLimit(int $timeLimit): void
    {
        $this->timeLimit = $timeLimit;
    }

    public function getChannel(): int
    {
        return $this->channel;
    }

    public function setChannel(int $channel): void
    {
        $this->channel = $channel;
    }

    public function isWaitForResult(): bool
    {
        return $this->waitForResult;
    }

    public function setWaitForResult(bool $waitForResult): void
    {
        $this->waitForResult = $waitForResult;
    }

    public function isRegulationAccept(): bool
    {
        return $this->regulationAccept;
    }

    public function setRegulationAccept(bool $regulationAccept): void
    {
        $this->regulationAccept = $regulationAccept;
    }

    public function getShipping(): int
    {
        return $this->shipping;
    }

    public function setShipping(int $shipping): void
    {
        $this->shipping = $shipping;
    }

    public function getTransferLabel(): string
    {
        return $this->transferLabel;
    }

    public function setTransferLabel(string $transferLabel): void
    {
        $this->transferLabel = $transferLabel;
    }

    public function getMobileLib(): int
    {
        return $this->mobileLib;
    }

    public function setMobileLib(int $mobileLib): void
    {
        $this->mobileLib = $mobileLib;
    }

    public function getSdkVersion(): string
    {
        return $this->sdkVersion;
    }

    public function setSdkVersion(string $sdkVersion): void
    {
        $this->sdkVersion = $sdkVersion;
    }

    public function getSign(): string
    {
        return $this->sign;
    }

    public function setSign(string $sign): void
    {
        $this->sign = $sign;
    }

    public function getEncoding(): string
    {
        return $this->encoding;
    }

    public function setEncoding(string $encoding): void
    {
        $this->encoding = $encoding;
    }

    public function getMethodRefId(): string
    {
        return $this->methodRefId;
    }

    public function setMethodRefId(string $methodRefId): void
    {
        $this->methodRefId = $methodRefId;
    }

    public function getCart(): array
    {
        return [$this->cart];
    }

    public function setCart(Cart $cart): void
    {
        $this->cart = $cart;
    }

    public function getAdditional(): Additional
    {
        return $this->additional;
    }

    public function setAdditional(Additional $additional): void
    {
        $this->additional = $additional;
    }
}
