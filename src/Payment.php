<?php

declare(strict_types=1);

namespace Webpayby\Payment;

use BadMethodCallException;
use Webpayby\Payment\Enum\ParamsMap;

/**
 * Class Payment
 *
 * phpcs:disable
 * @method $this setLanguageId(string $languageId):self russian|english
 * @method $this setCurrencyId(string $currencyId):self USD|BYN|EUR
 * @method $this setStore(string $store):self store name
 * @method $this setTest(int $test):self enum [0,1]
 * @method $this setOrderNum(string $orderNum):self Unique order number
 * @method $this setTotal(float $total):self Total amount
 * @method $this setCustomerId(string $customerId):self string(64) customer_id in merchant system
 * @method $this setCustomerName(string $customerName):self
 * @method $this setCustomerAddress(string $customerName):self
 * @method $this setServiceDate(string $serviceDate):self
 * @method $this setServiceNumber(string $serviceNumber):self
 * @method $this setServiceName(string $serviceName):self
 * @method $this setServiceAccount(string $serviceAccount):self
 * @method $this setServiceFlow(string $serviceFlow):self
 * @method $this setOrderTag(string $orderTag):self
 * @method $this setOrderContract(string $orderContract):self
 * @method $this setTab(string $tab):self enum ['erip','cardPayment']
 * @method $this setReturnUrl(string $url):self
 * @method $this setCancelReturnUrl(string $url):self
 * @method $this setNotifyUrl(string $url):self
 * @method $this setEmail(string $email):self
 * @method $this setPhone(string $phone):self
 * @method $this setTerminal(string $terminal):self
 * @method $this setTerminalHalva(string $terminalHalva):self
 * @method $this setTax(float $tax):self
 * @method $this setDiscountName(string $discountName):self
 * @method $this setDiscountPrice(float $discountPrice):self
 * @method $this setDiscountPromoCode(string $discountPromoCode):self
 * @method $this setShippingName(string $shippingName):self
 * @method $this setShippingPrice(float $shippingPrice):self
 * @method $this setOperationType(string $operationType):self enum ['recurring_bind','recurring_unbind','recurring_pay']
 * @method $this setRecurringToken(string $recurringToken):self
 * @method $this setRecurringBindToken(string $recurringBindToken):self
 * @method $this setEncryptedData(string $encryptedData):self
 * @method $this setSignature(string $signature):self Set params signature
 * @method $this set3DsPaymentOption(string $threeDsPaymentOption):self enum ['auto','force_3ds','force_3ds_only_auth_yes', 'without_3ds']
 * @method $this setCardHalva(int $cardHalva):self enum [0,1]
 * @method $this setCardNumberShort(string $cardNumberShort):self
 * @method $this setOutputViaCorpocard(bool $outputViaCorpocard):self
 * @method $this setOutputViaCorpocardMTB(bool $outputViaCorpocardMTB):self
 * @method $this setTokenP2P(string $tokenP2P):self
 * phpcs:enable
 */
class Payment
{
    /** @var array Payment parameters */
    private $params = [];

    public function __construct(string $merchantId)
    {
        $this->params[ParamsMap::MERCHANT_ID] = $merchantId;
        $this->params[ParamsMap::VERSION] = ParamsMap::VERSION_2;
        $this->params[ParamsMap::SEED] = time();
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function setInvoiceItem(string $name, float $price, ?int $quantity = 1): Payment
    {
        $this->params[ParamsMap::INVOICE_ITEM_NAME][] = $name;
        $this->params[ParamsMap::INVOICE_ITEM_PRICE][] = $price;
        $this->params[ParamsMap::INVOICE_ITEM_QUANTITY][] = $quantity;

        return $this;
    }

    /**
     * Example: 2020-10-22T16:20:01+03:00
     */
    public function setStartSessDateTime(string $dateTime): Payment
    {
        $this->params[ParamsMap::START_SESS_DATE_TIME] = $dateTime;

        return $this;
    }

    /**
     * Example: 1603383601
     */
    public function setStartSessTime(int $timestamp): Payment
    {
        $this->params[ParamsMap::START_SESS_TIME] = $timestamp;

        return $this;
    }

    public function __call(string $name, array $arguments): Payment
    {
        if (strpos($name, 'set') === 0) {
            $key = strtolower(preg_replace('/([a-z])([A-Z])/', '$1_$2', lcfirst(substr($name, 3))));
            $this->params['wsb_'.$key] = $arguments[0];

            return $this;
        }

        throw new BadMethodCallException('Bad method call');
    }
}
