<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Factory;

use Webcodefactory\P24\Response\ErrorResponse;

class ErrorResponseFactory
{
    public function create(array $data): ErrorResponse
    {
        $errorResponse = new ErrorResponse();
        $errorResponse->setError($data['error']);
        $errorResponse->setCode($data['code']);

        return $errorResponse;
    }
}
