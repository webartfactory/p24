# p24
P24 payment api

## ENV
```
P24_HOST=https://sandbox.przelewy24.pl
P24_USER='P24_USER' //Id
P24_PASS='P24_PASS' //Klucz do raportów (from admin panel)
P24_CRC='P24_CRC' //Klucz do CRC (from admin panel)
```

## Example

### Required data:
```
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
```
### Optional:
```
$additionalPayload = new Additional();
$shippingPayload = new Shipping();
$cartPayload = new Cart();
$transactionRegisterPayload->setAddress('Testowa 12/6');

$cartPayload->setSellerId('1');
$transactionRegisterPayload->setCart($cartPayload);

$shippingPayload->setCity('City');
$additionalPayload->setShipping($shippingPayload);
$transactionRegisterPayload->setAdditional($additionalPayload);
```

### Get token:
```
$response = $paymentService->register($transactionRegisterPayload);
print $response->getToken();
```
