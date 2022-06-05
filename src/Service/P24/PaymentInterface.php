<?php

declare(strict_types=1);

namespace App\Service\P24;

use App\Request\Payload\P24\TransactionRegisterPayload;
use App\Request\Payload\P24\TransactionVerifyPayload;
use App\Response\P24\RegisterResponse;
use App\Response\P24\VerifyResponse;

interface PaymentInterface
{
    public function register(TransactionRegisterPayload $transactionRegisterPayload): RegisterResponse;

    public function verify(TransactionVerifyPayload $transactionVerifyPayload): VerifyResponse;
}
