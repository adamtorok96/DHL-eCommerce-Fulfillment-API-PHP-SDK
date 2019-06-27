<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\SalesOrder;


class TaxDetail
{
    /**
     * TaxAmount
     *
     * @var float
     */
    public $TaxAmount;

    /**
     * TaxName
     *
     * @var string
     */
    public $TaxName;

    /**
     * TaxPercentage
     *
     * @var float
     */
    public $TaxPercentage;

    /**
     * @return float
     */
    public function getTaxAmount(): float
    {
        return $this->TaxAmount;
    }

    /**
     * @param float $TaxAmount
     */
    public function setTaxAmount(float $TaxAmount): void
    {
        $this->TaxAmount = $TaxAmount;
    }

    /**
     * @return string
     */
    public function getTaxName(): string
    {
        return $this->TaxName;
    }

    /**
     * @param string $TaxName
     */
    public function setTaxName(string $TaxName): void
    {
        $this->TaxName = $TaxName;
    }

    /**
     * @return float
     */
    public function getTaxPercentage(): float
    {
        return $this->TaxPercentage;
    }

    /**
     * @param float $TaxPercentage
     */
    public function setTaxPercentage(float $TaxPercentage): void
    {
        $this->TaxPercentage = $TaxPercentage;
    }
}