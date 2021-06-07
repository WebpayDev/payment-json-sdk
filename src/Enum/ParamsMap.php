<?php

declare(strict_types=1);

namespace Webpayby\Payment\Enum;

class ParamsMap
{
    public const CARD_PAN               = 'cc_pan';
    public const CARD_EXP               = 'cc_exp';
    public const CARD_CVV               = 'cc_cvv';
    public const CARD_NAME              = 'cc_name';
    public const CARD                   = 'wsb_card';
    public const SCART                  = '*scart';
    public const VERSION                = 'wsb_version';
    public const VERSION_1              = '1';
    public const VERSION_2              = '2';
    public const LANGUAGE_ID            = 'wsb_language_id';
    public const MERCHANT_ID            = 'wsb_storeid';
    public const STORE                  = 'wsb_store';
    public const ORDER_NUM              = 'wsb_order_num';
    public const TEST                   = 'wsb_test';
    public const CURRENCY_ID            = 'wsb_currency_id';
    public const SEED                   = 'wsb_seed';
    public const CUSTOMER_ID            = 'wsb_customer_id';
    public const CUSTOMER_NAME          = 'wsb_customer_name';
    public const CUSTOMER_ADDRESS       = 'wsb_customer_address';
    public const SERVICE_DATE           = 'wsb_service_date';
    public const SERVICE_NUMBER         = 'wsb_service_number';
    public const SERVICE_NAME           = 'wsb_service_name';
    public const SERVICE_ACCOUNT        = 'wsb_service_account';
    public const SERVICE_FLOW           = 'wsb_service_flow';
    public const START_SESS_DATE_TIME   = 'wsb_startsessdatetime';
    public const START_SESS_TIME        = 'wsb_startsesstime';
    public const ORDER_TAG              = 'wsb_order_tag';
    public const ORDER_CONTRACT         = 'wsb_order_contract';
    public const TAB                    = 'wsb_tab'; // erip, cardPayment
    public const TAB__ERIP              = 'erip';
    public const TAB__CARD              = 'cardPayment';
    public const RETURN_URL             = 'wsb_return_url';
    public const CANCEL_URL             = 'wsb_cancel_return_url';
    public const NOTIFY_URL             = 'wsb_notify_url';
    public const EMAIL                  = 'wsb_email';
    public const PHONE                  = 'wsb_phone';
    public const TOTAL                  = 'wsb_total';
    public const TERMINAL               = 'wsb_terminal';
    public const TERMINAL_HALVA         = 'wsb_terminal_halva';
    public const INVOICE_ITEM_NAME      = 'wsb_invoice_item_name';
    public const INVOICE_ITEM_QUANTITY  = 'wsb_invoice_item_quantity';
    public const INVOICE_ITEM_PRICE     = 'wsb_invoice_item_price';
    public const TAX                    = 'wsb_tax';
    public const DISCOUNT_NAME          = 'wsb_discount_name';
    public const DISCOUNT_PRICE         = 'wsb_discount_price';
    public const DISCOUNT_PROMO_CODE    = 'wsb_discount_promo_code';
    public const SHIPPING_NAME          = 'wsb_shipping_name';
    public const SHIPPING_PRICE         = 'wsb_shipping_price';
    public const OPERATION_TYPE         = 'wsb_operation_type';
    public const OPERATION_TYPE__BIND   = 'recurring_bind';
    public const OPERATION_TYPE__UNBIND = 'recurring_unbind';
    public const OPERATION_TYPE__PAY    = 'recurring_pay';
    public const RECURRING_TOKEN        = 'wsb_recurring_token';
    public const RECURRING_BIND_TOKEN   = 'wsb_recurring_bind_token';
    public const SHOW_WT                = 'wsb_show_wt';
    public const ENCRYPTED_DATA         = 'wsb_encrypted_data';
    public const SIGNATURE              = 'wsb_signature';
    public const AJAX                   = 'ajax';

    /**
     * @return array
     */
    public static function all(): array
    {
        return [
            self::CARD_PAN,
            self::CARD_EXP,
            self::CARD_CVV,
            self::CARD_NAME,
            self::CARD,
            self::SCART,
            self::VERSION,
            self::LANGUAGE_ID,
            self::MERCHANT_ID,
            self::STORE,
            self::ORDER_NUM,
            self::TEST,
            self::CURRENCY_ID,
            self::SEED,
            self::CUSTOMER_ID,
            self::CUSTOMER_NAME,
            self::CUSTOMER_ADDRESS,
            self::SERVICE_DATE,
            self::SERVICE_NUMBER,
            self::SERVICE_NAME,
            self::SERVICE_ACCOUNT,
            self::SERVICE_FLOW,
            self::START_SESS_DATE_TIME,
            self::START_SESS_TIME,
            self::ORDER_TAG,
            self::ORDER_CONTRACT,
            self::TAB,
            self::RETURN_URL,
            self::CANCEL_URL,
            self::NOTIFY_URL,
            self::EMAIL,
            self::PHONE,
            self::TOTAL,
            self::TERMINAL,
            self::TERMINAL_HALVA,
            self::TAX,
            self::INVOICE_ITEM_NAME,
            self::INVOICE_ITEM_QUANTITY,
            self::INVOICE_ITEM_PRICE,
            self::DISCOUNT_NAME,
            self::DISCOUNT_PRICE,
            self::DISCOUNT_PROMO_CODE,
            self::SHIPPING_NAME,
            self::SHIPPING_PRICE,
            self::OPERATION_TYPE,
            self::RECURRING_TOKEN,
            self::RECURRING_BIND_TOKEN,
            self::SHOW_WT,
            self::ENCRYPTED_DATA,
            self::SIGNATURE,
            self::AJAX,
        ];
    }
}
