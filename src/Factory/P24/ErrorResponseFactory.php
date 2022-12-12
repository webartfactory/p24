<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Factory\P24;

use Webcodefactory\P24\Response\P24\ErrorResponse;

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
