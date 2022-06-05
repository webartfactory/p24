<?php

declare(strict_types=1);

namespace App\Factory\P24;

use App\Response\P24\VerifyResponse;

class VerifyResponseFactory
{
    public function create(array $data): VerifyResponse
    {
        $verifyResponse = new VerifyResponse();
        $verifyResponse->setStatus($data['data']['status']);
        $verifyResponse->setResponseCode($data['responseCode']);

        return $verifyResponse;
    }
}
