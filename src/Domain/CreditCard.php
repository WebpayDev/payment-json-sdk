<?php

declare(strict_types=1);

namespace Webpayby\Payment\Domain;

class CreditCard
{
    private $pan;
    private $exp;
    private $cvv;
    private $name;

    /**
     * Card constructor.
     *
     * @param string $pan
     * @param string $exp
     * @param string $cvv
     * @param string $name
     */
    public function __construct(string $pan, string $exp, string $cvv, string $name)
    {
        $this->pan  = $pan;
        $this->exp  = $exp;
        $this->cvv  = $cvv;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPan(): string
    {
        return $this->pan;
    }

    /**
     * @return string
     */
    public function getExp(): string
    {
        return $this->exp;
    }

    /**
     * @return string
     */
    public function getCvv(): string
    {
        return $this->cvv;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            ParamMap::CARD_PAN  => $this->getPan(),
            ParamMap::CARD_EXP  => $this->getExp(),
            ParamMap::CARD_CVV  => $this->getCvv(),
            ParamMap::CARD_NAME => $this->getName(),
        ];
    }
}
