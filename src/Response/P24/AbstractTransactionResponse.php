<?php

declare(strict_types=1);

namespace App\Response\P24;

class AbstractTransactionResponse
{
    private int $responseCode;

    public function getResponseCode(): int
    {
        return $this->responseCode;
    }

    public function setResponseCode(int $responseCode): void
    {
        $this->responseCode = $responseCode;
    }
}
