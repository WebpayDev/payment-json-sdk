# General information
- PHP 7.1 or above
- You need Webpay account mail us on managers@webpay.by

# Installation

To use the SDK

    composer require webpayby/payment_sdk    

# Usage

- Simple request
```php
        $paymentData = new PaymentData(YOUR_BILLING_ID, YOUR_SECRET_KEY);
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
```