<?php

declare(strict_types=1);

namespace Webpayby\Payment\Http;

use GuzzleHttp\Client as ClientGuzzle;
use GuzzleHttp\Exception\RequestException;
use Throwable;

class Client
{
    /** @var Client */
    private $client;

    public  function __construct(string $baseUrl, array $config = [])
    {
        $config['base_uri'] = $baseUrl;
        $this->client = new ClientGuzzle($config);
    }

    /**
     * @param array $data
     * @param string|null $uri
     * @return string
     * @throws Throwable
     */
    public function request(array $data = [], ?string $uri = ''): string
    {
        try {

            $response = $this->client->post($uri, [
                'json' => $data,
            ]);

            return $response->getBody()->getContents();

        } catch (RequestException $e) {

            return $e->getResponse()->getBody()->getContents();

        } catch (Throwable $e) {

            throw $e;
        }
    }



}
