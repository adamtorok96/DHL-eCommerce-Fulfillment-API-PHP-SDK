<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\PurchaseOrder;


class OrderDetail
{
    /**
     * Represents the unique line id of each item within the order.
     * [Can be used as a sequential number per order line, or a unique identfier from the source system]
     *
     * @var string
     */
    public $OrderLineNumber;

    /**
     * Total number of items requested in this order line
     *
     * @var integer
     */
    public $OrderedQuantity;

    /**
     * Preferred delivery date of the purchase order line
     *
     * @var string
     */
    public $RequestedDeliveryDate;

    /**
     * The SKU of the item ordered
     *
     * @var string
     */
    public $ItemID;

    /**
     * Country of origin of the item / ISO code 2
     *
     * @var string
     */
    public $CountryOfOrigin;

    /**
     * If empty then to be defaultet to NEW by ESB
     *
     * @var string
     */
    public $ProductClass;

    /**
     * If empty then to be defaultet to EACH by ESB
     *
     * @var string
     */
    public $UnitOfMeasure;

    /**
     * Can be the same as ShipFrom content
     *
     * @var CostDetails
     */
    public $CostDetails;

    /**
     * @return string
     */
    public function getOrderLineNumber(): string
    {
        return $this->OrderLineNumber;
    }

    /**
     * @param string $OrderLineNumber
     */
    public function setOrderLineNumber(string $OrderLineNumber): void
    {
        $this->OrderLineNumber = $OrderLineNumber;
    }

    /**
     * @return int
     */
    public function getOrderedQuantity(): int
    {
        return $this->OrderedQuantity;
    }

    /**
     * @param int $OrderedQuantity
     */
    public function setOrderedQuantity(int $OrderedQuantity): void
    {
        $this->OrderedQuantity = $OrderedQuantity;
    }

    /**
     * @return string
     */
    public function getRequestedDeliveryDate(): string
    {
        return $this->RequestedDeliveryDate;
    }

    /**
     * @param string $RequestedDeliveryDate
     */
    public function setRequestedDeliveryDate(string $RequestedDeliveryDate): void
    {
        $this->RequestedDeliveryDate = $RequestedDeliveryDate;
    }

    /**
     * @return string
     */
    public function getItemID(): string
    {
        return $this->ItemID;
    }

    /**
     * @param string $ItemID
     */
    public function setItemID(string $ItemID): void
    {
        $this->ItemID = $ItemID;
    }

    /**
     * @return string
     */
    public function getCountryOfOrigin(): ?string
    {
        return $this->CountryOfOrigin;
    }

    /**
     * @param string $CountryOfOrigin
     */
    public function setCountryOfOrigin(?string $CountryOfOrigin = null): void
    {
        $this->CountryOfOrigin = $CountryOfOrigin;
    }

    /**
     * @return string
     */
    public function getProductClass(): string
    {
        return $this->ProductClass;
    }

    /**
     * @param string $ProductClass
     */
    public function setProductClass(string $ProductClass): void
    {
        $this->ProductClass = $ProductClass;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasure(): string
    {
        return $this->UnitOfMeasure;
    }

    /**
     * @param string $UnitOfMeasure
     */
    public function setUnitOfMeasure(string $UnitOfMeasure): void
    {
        $this->UnitOfMeasure = $UnitOfMeasure;
    }

    /**
     * @return CostDetails
     */
    public function getCostDetails(): ?CostDetails
    {
        return $this->CostDetails;
    }

    /**
     * @param CostDetails $CostDetails
     */
    public function setCostDetails(?CostDetails $CostDetails = null): void
    {
        $this->CostDetails = $CostDetails;
    }
}