<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Factory;

use Webcodefactory\P24\Response\VerifyResponse;

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
