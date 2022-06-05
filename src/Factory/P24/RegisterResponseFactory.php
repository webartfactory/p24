<?php

declare(strict_types=1);

namespace App\Factory\P24;

use App\Response\P24\RegisterResponse;

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
