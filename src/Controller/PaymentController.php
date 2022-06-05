<?php

namespace App\Controller;

use App\Exception\ApiClientException;
use App\Request\Payload\P24\TransactionRegisterPayload;
use App\Service\P24\PaymentService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PaymentController extends AbstractController
{
    /**
     * @Route("/test", name="test", methods={"GET"})
     */
    public function test(Request $request, PaymentService $paymentService): Response
    {
        $transactionRegisterPayload = new TransactionRegisterPayload();

        $transactionRegisterPayload->setMerchantId('169252');
        $transactionRegisterPayload->setPosId('169252');
        $transactionRegisterPayload->setSessionId('1234');
        $transactionRegisterPayload->setAmount(123);
        $transactionRegisterPayload->setCurrency('PLN');
        $transactionRegisterPayload->setDescription('test');
        $transactionRegisterPayload->setEmail('drabarek@gmail.com');
        $transactionRegisterPayload->setCountry('PL');
        $transactionRegisterPayload->setLanguage('pl');
        $transactionRegisterPayload->setUrlReturn('http://localhost');


        try {
            $response = $paymentService->register($transactionRegisterPayload);
            print $response->getToken();
        } catch (ApiClientException $exception) {
            print $exception->getMessage();
        }

        return $this->json(['success'=> true]);
    }
}
