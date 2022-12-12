<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Response\P24;

class VerifyResponse extends AbstractTransactionResponse
{
    private string $status;

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
