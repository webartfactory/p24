<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Response;

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
