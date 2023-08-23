<?php

declare(strict_types=1);

namespace Webpayby\Payment;

class EndpointHandler
{
    /**
     * @var string
     */
    protected $baseUrl;
    protected const API_URL = '/api/v1/payment';
    protected const API_P2P_MTB_URL = '/output/mtb';

    /**
     * @param string $baseUrl
     */
    public function __construct(string $baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    /**
     * @param array $params
     * @return string
     */
    public function getEndpoint(array $params): string
    {
        if (!empty($params['wsb_output_via_corpocard_mtb'])) {
            return self::API_P2P_MTB_URL;
        }
        return self::API_URL;
    }
}
