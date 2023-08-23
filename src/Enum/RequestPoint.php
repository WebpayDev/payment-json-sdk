<?php

declare(strict_types=1);

namespace Webpayby\Payment\Enum;

class RequestPoint
{
    public const SANDBOX_PAYMENT = 'https://securesandbox.webpay.by';
    public const PRODUCTION_PAYMENT = 'https://payment.webpay.by';
}