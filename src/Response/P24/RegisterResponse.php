<?php

declare(strict_types=1);

namespace App\Response\P24;

class RegisterResponse extends AbstractTransactionResponse
{
    private string $token;

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
    }
}
