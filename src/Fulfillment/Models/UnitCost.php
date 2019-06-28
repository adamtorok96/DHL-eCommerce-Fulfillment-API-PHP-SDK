<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models;


class UnitCost
{
    /**
     * Price of the Unit
     *
     * @var float
     */
    public $Amount;

    /**
     * Currency of the Amount
     *
     * @var string
     */
    public $Currency;

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     */
    public function setAmount(float $Amount): void
    {
        $this->Amount = $Amount;
    }

    /**
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     */
    public function setCurrency(?string $Currency = null): void
    {
        $this->Currency = $Currency;
    }
}