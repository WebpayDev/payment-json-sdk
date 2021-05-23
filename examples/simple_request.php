<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/../vendor/autoload.php';

use Webpayby\Payment\Enum\Currency;
use Webpayby\Payment\Enum\Language;
use Webpayby\Payment\Gateway;
use Webpayby\Payment\Payment;

$merchantId = '797613511';
$secretKey = 'qq';
$url = 'http://payment.local';
//$url = 'https://securesandbox.webpay.by';

$payment = new Payment($merchantId);

$payment
    ->setCurrencyId(Currency::BYN)
    ->setLanguageId(Language::EN)
    ->setOrderNum('Unique-order-'.uniqid(time()))
    ->setTotal(8.5);


$gate = new Gateway($secretKey, $url);
$response = $gate->sendRequest($payment);

header('Content-Type: application/json');
echo json_encode($response);
exit;


//function getFakeItems(): array
//{
//    $items = [];
//    for ($i = 1; $i <= rand(1,4); $i++ ) {
//        $items[] = [
//            'name' => 'InvoiceItem'.$i,
//            'price' => floatval(rand(3,19).'.'.rand(1,9)),
//            'quantity' => rand(1,3)
//        ];
//    }
//
//    return $items;
//}