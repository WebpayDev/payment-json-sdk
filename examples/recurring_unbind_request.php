<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/../vendor/autoload.php';

use Webpayby\Payment\Enum\Currency;
use Webpayby\Payment\Enum\Language;
use Webpayby\Payment\Enum\ParamsMap;
use Webpayby\Payment\Gateway;
use Webpayby\Payment\Payment;

$merchantId = '521876364';
$secretKey = '';

$url = 'https://securesandbox.webpay.by';

$payment = new Payment($merchantId);

$payment
    ->setCurrencyId(Currency::BYN)
    ->setLanguageId(Language::EN)
    ->setOrderNum(uniqid(time()))
    ->setInvoiceItem('Item1', 4.5)
    ->setInvoiceItem('Item2', 2, 2)
    ->setTotal(8.5)
    ->setCustomerId('123454321')
    ->setRecurringToken('929903468')
    ->setTest(1)
    ->setOperationType(ParamsMap::OPERATION_TYPE__UNBIND)
    ->setReturnUrl('http://example.com/success')
    ->setCancelReturnUrl('http://example.com/cancel')
    ->setNotifyUrl('http://example.com/notify')
;


$gate = new Gateway($secretKey, $url);
$response = $gate->sendRequest($payment);

header('Content-Type: application/json');
//echo json_encode($payment->getParams());exit;
echo json_encode($response);
exit;
