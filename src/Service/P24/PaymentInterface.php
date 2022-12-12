<?php

declare(strict_types=1);

namespace Webcodefactory\P24\Service\P24;

use Webcodefactory\P24\Request\Payload\P24\TransactionRegisterPayload;
use Webcodefactory\P24\Request\Payload\P24\TransactionVerifyPayload;
use Webcodefactory\P24\Response\P24\RegisterResponse;
use Webcodefactory\P24\Response\P24\VerifyResponse;

interface PaymentInterface
{
    public function register(TransactionRegisterPayload $transactionRegisterPayload): RegisterResponse;

    public function verify(TransactionVerifyPayload $transactionVerifyPayload): VerifyResponse;
}
