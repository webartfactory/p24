<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Response;

class ErrorResponse
{
    private string $error;

    private int $code;

    public function getError(): string
    {
        return $this->error;
    }

    public function setError(string $error): void
    {
        $this->error = $error;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode(int $code): void
    {
        $this->code = $code;
    }
}
