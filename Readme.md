# General information
- PHP 7.1 or above
- You need Webpay account mail us on managers@webpay.by

# Installation

To use the SDK

    composer require webpayby/webpayby-payment-json-sdk    

# Usage

- Simple request
```php
        $merchantId = 'YOUR_MERCHANT_ID';
        $secretKey = 'YOUR_SECRET_KEY';
        $siteUrl = 'http://example.com/';
        
        $url = 'https://securesandbox.webpay.by';
        
        $payment = new Payment($merchantId);
        
        $payment
            ->setCurrencyId(Currency::BYN)
            ->setLanguageId(Language::EN)
            ->setOrderNum(uniqid(time()))
            ->setInvoiceItem('Item1', 4.5)
            ->setInvoiceItem('Item2', 2, 2)
            ->setTotal(8.5)
            ->setReturnUrl('http://example.com/success')
            ->setCancelReturnUrl('http://example.com/cancel')
            ->setNotifyUrl('http://example.com/notify');
        
        
        $gate = new Gateway($secretKey, $url, [
            'headers' => ['Referer' => $siteUrl, 'Origin' => $siteUrl]
        ]);
        $response = $gate->sendRequest($payment);

        $redirectUrl = $response['redirectUrl'] ?? '';
```
