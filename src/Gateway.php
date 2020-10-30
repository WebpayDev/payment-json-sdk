<?php

declare(strict_types=1);

namespace Webpayby\Payment;

use Webpayby\Payment\Domain\ParamMap;
use Webpayby\Payment\Domain\PaymentData;
use Webpayby\Payment\Http\Client;

class Gateway
{
    /** @var PaymentData */
    private $paymentData;
    /* @var Client*/
    private $client;

    /**
     * Gateway constructor.
     *
     * @param string      $url
     * @param PaymentData $paymentData
     */
    public function __construct(string $url, PaymentData $paymentData)
    {
        $this->paymentData = $paymentData;
        $this->client = new Client($url);
    }

    /**
     * @throws \Throwable
     */
    public function sendRequest(): void
    {
        $body = [ParamMap::SCART => ''];
        $body = array_merge($body, $this->paymentData->toArray());

        echo $this->client->post($body);
    }
}
