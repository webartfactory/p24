<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Service;

use Webcodefactory\P24\Request\Payload\TransactionRegisterPayload;
use Webcodefactory\P24\Request\Payload\TransactionVerifyPayload;
use Webcodefactory\P24\Response\RegisterResponse;
use Webcodefactory\P24\Response\VerifyResponse;

interface PaymentInterface
{
    public function register(TransactionRegisterPayload $transactionRegisterPayload): RegisterResponse;

    public function verify(TransactionVerifyPayload $transactionVerifyPayload): VerifyResponse;
}
