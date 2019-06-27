<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\SalesOrder;


class OrderLine
{
    /**
     * Represents the unique line id of each item within the order.
     * [Can be used as a sequential number per order line, or a unique identifier from the source system]
     *
     * @var string
     */
    public $OrderLineNumber;

    /**
     * Total number of items requested in this order line
     *
     * @var string
     */
    public $OrderedQuantity;

    /**
     * The SKU of the item ordered
     *
     * @var string
     */
    public $ItemID;

    /**
     * Additional product reference associated to the SKU for this order.
     *
     * @var string
     */
    public $ProductIDReference;

    /**
     * The description of the item ordered.
     *
     * @var string
     */
    public $ItemDescription;

    /**
     * Sale price of the product/item
     *
     * @var string
     */
    public $Price;

    /**
     * The total charges for the line (orderedqty * price).
     *
     * @var string
     */
    public $LineTotal;

    /**
     * Defines the lot number of the item the order needs to be shipped with.
     *
     * @var string
     */
    public $LotNumber;

    /**
     * Customer Specific feature to state the estimated delivery date.
     *
     * @var string
     */
    public $EstDeliveryDate;

    /**
     * @var array|Instruction[]
     */
    public $Instruction;

    /**
     * @var array|TaxDetail[]
     */
    public $TaxDetail;

    /**
     * @var array|ChargeDetail[]
     */
    public $ChargeDetail;

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
     * @return string
     */
    public function getOrderedQuantity(): string
    {
        return $this->OrderedQuantity;
    }

    /**
     * @param string $OrderedQuantity
     */
    public function setOrderedQuantity(string $OrderedQuantity): void
    {
        $this->OrderedQuantity = $OrderedQuantity;
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
    public function getProductIDReference(): ?string
    {
        return $this->ProductIDReference;
    }

    /**
     * @param string $ProductIDReference
     */
    public function setProductIDReference(?string $ProductIDReference = null): void
    {
        $this->ProductIDReference = $ProductIDReference;
    }

    /**
     * @return string
     */
    public function getItemDescription(): string
    {
        return $this->ItemDescription;
    }

    /**
     * @param string $ItemDescription
     */
    public function setItemDescription(string $ItemDescription): void
    {
        $this->ItemDescription = $ItemDescription;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->Price;
    }

    /**
     * @param string $Price
     */
    public function setPrice(string $Price): void
    {
        $this->Price = $Price;
    }

    /**
     * @return string
     */
    public function getLineTotal(): ?string
    {
        return $this->LineTotal;
    }

    /**
     * @param string $LineTotal
     */
    public function setLineTotal(?string $LineTotal = null): void
    {
        $this->LineTotal = $LineTotal;
    }

    /**
     * @return string
     */
    public function getLotNumber(): ?string
    {
        return $this->LotNumber;
    }

    /**
     * @param string $LotNumber
     */
    public function setLotNumber(?string $LotNumber = null): void
    {
        $this->LotNumber = $LotNumber;
    }

    /**
     * @return string
     */
    public function getEstDeliveryDate(): ?string
    {
        return $this->EstDeliveryDate;
    }

    /**
     * @param string $EstDeliveryDate
     */
    public function setEstDeliveryDate(?string $EstDeliveryDate = null): void
    {
        $this->EstDeliveryDate = $EstDeliveryDate;
    }

    /**
     * @param Instruction $Instruction
     * @return bool
     */
    public function hasInstructions(Instruction $Instruction): bool
    {
        return in_array($Instruction, $this->Instruction, true);
    }

    /**
     * @return Instruction[]|array
     */
    public function getInstructions(): array
    {
        return $this->Instruction;
    }

    /**
     * @param Instruction $Instruction
     */
    public function addInstruction(Instruction $Instruction): void
    {
        $this->Instruction[] = $Instruction;
    }

    /**
     * @param Instruction $Instruction
     */
    public function removeInstruction(Instruction $Instruction): void
    {
        $index = array_search($Instruction, $this->Instruction, true);

        unset($this->Instruction[$index]);
    }

    /**
     * @param TaxDetail $TaxDetail
     * @return bool
     */
    public function hasTaxDetails(TaxDetail $TaxDetail): bool
    {
        return in_array($TaxDetail, $this->TaxDetail, true);
    }

    /**
     * @return TaxDetail[]|array
     */
    public function getTaxDetails(): array
    {
        return $this->TaxDetail;
    }

    /**
     * @param TaxDetail $TaxDetail
     */
    public function addTaxDetail(TaxDetail $TaxDetail): void
    {
        $this->TaxDetail[] = $TaxDetail;
    }

    /**
     * @param TaxDetail $TaxDetail
     */
    public function removeTaxDetail(TaxDetail $TaxDetail): void
    {
        $index = array_search($TaxDetail, $this->TaxDetail, true);

        unset($this->TaxDetail[$index]);
    }

    /**
     * @param ChargeDetail $ChargeDetail
     * @return bool $ChargeDetail
     */
    public function hasChargeDetails(ChargeDetail $ChargeDetail): bool
    {
        return in_array($ChargeDetail, $this->ChargeDetail, true);
    }

    /**
     * @return ChargeDetail[]|array
     */
    public function getChargeDetails(): array
    {
        return $this->ChargeDetail;
    }

    /**
     * @param ChargeDetail
     */
    public function addChargeDetail(ChargeDetail $ChargeDetail): void
    {
        $this->ChargeDetail[] = $ChargeDetail;
    }

    /**
     * @param ChargeDetail
     */
    public function removeChargeDetail(ChargeDetail $ChargeDetail): void
    {
        $index = array_search($ChargeDetail, $this->ChargeDetail, true);

        unset($this->ChargeDetail[$index]);
    }
}