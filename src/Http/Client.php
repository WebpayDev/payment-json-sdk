<?php

declare(strict_types=1);

namespace Webpayby\Payment\Http;

use GuzzleHttp\Client as ClientGuzzle;
use GuzzleHttp\Exception\RequestException;

class Client
{
    /**
     * @var Client
     */
    private $client;

    /*
    * @param string $baseUrl
    * @param array  $config
    */
    public  function __construct(string $baseUrl, array $config = [])
    {
        $config['base_uri'] = $baseUrl;
        $this->client = new ClientGuzzle($config);
    }

    /**
     * @param array $body
     * @param array $options
     *
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function post(array $body = [], array $options = []): string
    {
        $options['form_params'] = $body;
        $response = $this->client->request('POST', '/payment', $options);

        return $response->getBody()->__toString();
    }
}
