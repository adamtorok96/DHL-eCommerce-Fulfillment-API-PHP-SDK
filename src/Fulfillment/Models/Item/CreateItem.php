<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\Item;


class CreateItem
{
    /**
     * DHL assigned account number
     *
     * @var string
     */
    public $AccountNumber;

    /**
     * The SKU of the item ordered
     *
     * @var string
     */
    public $ItemID;

    /**
     * @var ItemDetails
     */
    public $ItemDetails;

    /**
     * @var Classification
     */
    public $Classification;

    /**
     * @var InventoryParameters
     */
    public $InventoryParameters;

    /**
     * @var array|ProductReferenceIdentifier[]
     */
    public $AdditionalProductReferenceIdentifiers;

    /**
     * @return string
     */
    public function getAccountNumber(): string
    {
        return $this->AccountNumber;
    }

    /**
     * @param string $AccountNumber
     */
    public function setAccountNumber(string $AccountNumber): void
    {
        $this->AccountNumber = $AccountNumber;
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
     * @return ItemDetails
     */
    public function getItemDetails(): ItemDetails
    {
        return $this->ItemDetails;
    }

    /**
     * @param ItemDetails $ItemDetails
     */
    public function setItemDetails(ItemDetails $ItemDetails): void
    {
        $this->ItemDetails = $ItemDetails;
    }

    /**
     * @return Classification
     */
    public function getClassification(): ?Classification
    {
        return $this->Classification;
    }

    /**
     * @param Classification $Classification
     */
    public function setClassification(?Classification $Classification = null): void
    {
        $this->Classification = $Classification;
    }

    /**
     * @return InventoryParameters
     */
    public function getInventoryParameters(): ?InventoryParameters
    {
        return $this->InventoryParameters;
    }

    /**
     * @param InventoryParameters $InventoryParameters
     */
    public function setInventoryParameters(?InventoryParameters $InventoryParameters = null): void
    {
        $this->InventoryParameters = $InventoryParameters;
    }

    /**
     * @param ProductReferenceIdentifier $ProductReferenceIdentifier
     * @return bool
     */
    public function hasAdditionalProductReferenceIdentifier(ProductReferenceIdentifier $ProductReferenceIdentifier): bool
    {
        return in_array($ProductReferenceIdentifier, $this->AdditionalProductReferenceIdentifiers, true);
    }

    /**
     * @return ProductReferenceIdentifier[]|array
     */
    public function getAdditionalProductReferenceIdentifiers(): array
    {
        return $this->AdditionalProductReferenceIdentifiers;
    }

    /**
     * @param ProductReferenceIdentifier $ProductReferenceIdentifier
     */
    public function addAdditionalProductReferenceIdentifier(ProductReferenceIdentifier $ProductReferenceIdentifier): void
    {
        $this->AdditionalProductReferenceIdentifiers[] = $ProductReferenceIdentifier;
    }

    /**
     * @param ProductReferenceIdentifier $ProductReferenceIdentifier
     */
    public function removeAdditionalProductReferenceIdentifier(ProductReferenceIdentifier $ProductReferenceIdentifier): void
    {
        $index = array_search($ProductReferenceIdentifier, $this->AdditionalProductReferenceIdentifiers, true);

        unset($this->AdditionalProductReferenceIdentifiers[$index]);
    }
}