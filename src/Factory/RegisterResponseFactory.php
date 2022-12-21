<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Factory;

use Webcodefactory\P24\Response\RegisterResponse;

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
