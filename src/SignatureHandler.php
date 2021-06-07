<?php

declare(strict_types=1);

namespace Webpayby\Payment;

use Webpayby\Payment\Enum\ParamsMap;

class SignatureHandler
{
    /** @var string|null */
    private $secretKey;

    public function __construct(?string $secretKey = '')
    {
        $this->secretKey = $secretKey;
    }

    /**
     * Check signature
     *
     * @param array $params
     * @param string $signature
     * @return boolean
     */
    public function check(array $params, string $signature): bool
    {
        return $this->signing($params) === $signature;
    }

    /**
     * @param array $params
     * @return string
     */
    public function signing(array $params): string
    {
        $raw = $params[ParamsMap::SEED] ?? '';
        $raw .= $params[ParamsMap::MERCHANT_ID] ?? '';
        $raw .= $params[ParamsMap::CUSTOMER_ID] ?? '';
        $raw .= $params[ParamsMap::ORDER_NUM] ?? '';
        $raw .= $params[ParamsMap::TEST] ?? '';
        $raw .= $params[ParamsMap::CURRENCY_ID] ?? '';
        $raw .= $params[ParamsMap::TOTAL] ?? '';
        $raw .= $params[ParamsMap::TERMINAL_HALVA] ?? '';
        $raw .= $params[ParamsMap::TERMINAL] ?? '';
        $raw .= $params[ParamsMap::RECURRING_BIND_TOKEN] ?? '';
        $raw .= $params[ParamsMap::OPERATION_TYPE] ?? '';
        $raw .= $params[ParamsMap::CARD] ?? '';
        $raw .= $params[ParamsMap::RECURRING_TOKEN] ?? '';
        $raw .= $params[ParamsMap::ENCRYPTED_DATA] ?? '';
        $raw .= $this->secretKey;

        return isset($params[ParamsMap::VERSION]) && $params[ParamsMap::VERSION] >= 2
            ? sha1($raw)
            : md5($raw);

    }
}
