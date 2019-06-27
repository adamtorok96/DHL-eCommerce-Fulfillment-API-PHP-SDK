<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models;


class CostDetails
{
    /**
     * The price at which the manufacturer recommends that the retailer sell the product
     *
     * @var float
     */
    public $RetailPrice;

    /**
     * The cost of a good sold by a wholesaler
     *
     * @var float
     */
    public $WholesalePrice;

    /**
     * The cost of the item (replacement cost0
     *
     * @var float
     */
    public $UnitCost;

    /**
     * The currency of the PO cost information / ISO code
     *
     * @var string
     */
    public $Currency;

    /**
     * @return float
     */
    public function getRetailPrice(): ?float
    {
        return $this->RetailPrice;
    }

    /**
     * @param float $RetailPrice
     */
    public function setRetailPrice(?float $RetailPrice = null): void
    {
        $this->RetailPrice = $RetailPrice;
    }

    /**
     * @return float
     */
    public function getWholesalePrice(): ?float
    {
        return $this->WholesalePrice;
    }

    /**
     * @param float $WholesalePrice
     */
    public function setWholesalePrice(?float $WholesalePrice = null): void
    {
        $this->WholesalePrice = $WholesalePrice;
    }

    /**
     * @return float
     */
    public function getUnitCost(): ?float
    {
        return $this->UnitCost;
    }

    /**
     * @param float $UnitCost
     */
    public function setUnitCost(?float $UnitCost = null): void
    {
        $this->UnitCost = $UnitCost;
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