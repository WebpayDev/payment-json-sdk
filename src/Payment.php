<?php


namespace Webpayby\Payment;


use BadMethodCallException;
use phpDocumentor\Reflection\Types\Boolean;
use Webpayby\Payment\Enum\ParamsMap;

/**
 * Class Payment
 *
 * phpcs:disable
 * @method $this setLanguageId(string $languageId):self russian|english
 * @method $this setCurrencyId(string $currencyId):self USD|BYN|EUR
 * @method $this setOrderNum(string $orderNum):self Unique order number
 * @method $this setTotal(float $total):self Total amount
 * @method $this setSignature(string $signature):self Set params signature
 * phpcs:enable
 */
class Payment
{
    /** @var array Payment parameters */
    private $params = [];

    public function __construct(string $merchantId)
    {
        $this->params[ParamsMap::SCART] = '';
        $this->params[ParamsMap::MERCHANT_ID] = $merchantId;
        $this->params[ParamsMap::VERSION] = ParamsMap::VERSION_2;
        $this->params[ParamsMap::SEED] = time();
    }

    public function getParams(): array
    {
        return $this->params;
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