<?php

declare(strict_types=1);

namespace Webpayby\Payment\Domain;

class InvoiceItem
{
    /* @param string $name */
    private $name;
    /* @param int $quantity */
    private $quantity;
    /* @param float $price */
    private $price;

    /**
     * InvoiceItem constructor.
     *
     * @param string     $name
     * @param float|null $price
     * @param int|null   $quantity
     */
    public function __construct(string $name, ?float $price = 0.0, ?int $quantity = 1)
    {
        $this->name     = $name;
        $this->quantity = $quantity;
        $this->price    = $price;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return InvoiceItem
     */
    public function setName(string $name): InvoiceItem
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return InvoiceItem
     */
    public function setQuantity(int $quantity): InvoiceItem
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     *
     * @return InvoiceItem
     */
    public function setPrice(float $price): InvoiceItem
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->price * $this->quantity;
    }
}
