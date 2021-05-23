<?php

declare(strict_types=1);

namespace Webpayby\Payment;

use Exception;
use Webpayby\Payment\Http\Client;

class Gateway
{
    /* @var Client*/
    private $client;

    /** @var SignatureHandler */
    private $signatureHandler;


    public function __construct(string $secretKey, string $domainUrl)
    {
        $this->client = new Client($domainUrl);
        $this->signatureHandler = new SignatureHandler($secretKey);
    }

    /**
     * @param Payment $payment
     * @return array
     */
    public function sendRequest(Payment $payment): array
    {
        $signature = $this->signatureHandler->signing($payment->getParams());
        $payment->setSignature($signature);

        try {
            $response = $this->client->request($payment->getParams(), '/api/v1/payment');
        } catch (\Throwable $e) {
            $gatewayResponse = GatewayResponse::createErrorResponse($e->getMessage(), $e->getCode());

            return $gatewayResponse->getData();
        }

        $gatewayResponse = GatewayResponse::create($response);

        return $gatewayResponse->getData();
    }
}
