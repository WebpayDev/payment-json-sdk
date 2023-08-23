<?php

declare(strict_types=1);

namespace Webpayby\Payment\Enum;

class ThreeDSPaymentOption
{
    public const AUTO = 'auto';
    public const FORCE_3DS = 'force_3ds';
    public const FORCE_3DS_ONLY_AUTH_YES = 'force_3ds_only_auth_yes';
    public const WITHOUT_3DS = 'without_3ds';
}