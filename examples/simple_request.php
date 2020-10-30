<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/../vendor/autoload.php';

use Webpayby\Payment\Enum\Currency;
use Webpayby\Payment\Enum\Language;
use Webpayby\Payment\Gateway;
use Webpayby\Payment\Domain\PaymentData;

$billingId = '669661686';
$secretKey = '1';
$url = 'https://securesandbox.webpay.by/';


$paymentData = new PaymentData($billingId, $secretKey);
$paymentData
    ->setTest(1)
    ->setCurrency(Currency::BYN)
    ->setLanguage(Language::RU)
    ->setOrderNumber('SDK-TEST-'.date('dmyHis'));

foreach (getFakeItems() as $item) {
    $paymentData->addInvoiceItem($item['name'], $item['price'], $item['quantity']);
}

$gateway = new Gateway($url, $paymentData);
$gateway->sendRequest();







function getFakeItems(): array
{
    $items = [];
    for ($i = 1; $i <= rand(1,4); $i++ ) {
        $items[] = [
            'name' => 'InvoiceItem'.$i,
            'price' => floatval(rand(3,19).'.'.rand(1,9)),
            'quantity' => rand(1,3)
        ];
    }

    return $items;
}