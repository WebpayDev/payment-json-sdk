<?php

declare(strict_types=1);

namespace Webpayby\Payment;

use Exception;

class GatewayResponse
{
    /** @var array */
    private $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    public static function create(string $json)
    {
        $decodedData = json_decode($json, true);

        try {
            if ($decodedData === null) {
                throw new Exception('Can`t parse json data: ' . $decodedData, 4);
            }

        } catch (\Throwable $e) {
            return self::createErrorResponse(
                $e->getMessage(),
                $e->getCode()
            );
        }

        return new static($decodedData);
    }

    public static function createErrorResponse(string $message, int $code): self
    {
        return new static([
            'error' => [
                'message' => $message,
                'code' => $code
            ]
        ]);
    }


}