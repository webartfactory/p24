<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Factory\P24;

use Webcodefactory\P24\Response\P24\RegisterResponse;

class RegisterResponseFactory
{
    public function create(array $data): RegisterResponse
    {
        $registerResponse = new RegisterResponse();
        $registerResponse->setToken($data['data']['token']);
        $registerResponse->setResponseCode($data['responseCode']);

        return $registerResponse;
    }
}
