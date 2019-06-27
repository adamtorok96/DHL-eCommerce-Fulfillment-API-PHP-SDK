<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models;


class ItemDetails
{
    /**
     * Product name for the item
     *
     * @var string
     */
    public $ShortDescription;

    /**
     * Long description of the item
     *
     * @var string
     */
    public $LongDescription;

    /**
     * List of available product categories needs to be defined by DHLeC
     *
     * @var string
     */
    public $ProductCategory;

    /**
     * Unit in which we measure the item (Each)
     *
     * @var string
     */
    public $UnitOfMeasure;

    /**
     * Country of origin of the item / ISO code 2
     *
     * @var string
     */
    public $CountryOfOrigin;

    /**
     * @var Color
     */
    public $Color;

    /**
     * @var Image
     */
    public $Image;

    /**
     * Product can be returned
     *
     * @var bool
     */
    public $IsReturnable;

    /**
     * Item can be replaced by another item, using alias UPC values
     *
     * @var bool
     */
    public $IsSubstitutionAllowed;

    /**
     * Flag to activate automatic subsitution
     *
     * @var bool
     */
    public $IsSubstitutionAutomatic;

    /**
     * Flag to notify warehouse if item is fragile
     *
     * @var bool
     */
    public $IsFragile;

    /**
     * Flag to tell if the item is an item with variations
     *
     * @var bool
     */
    public $IsModelItem;

    /**
     * if IsReturnable is set, we set the window that it is allowed to return the item
     *
     * @var integer
     */
    public $ReturnWindow;

    /**
     * Code to identify the size of the item
     *
     * @var string
     */
    public $SizeCode;

    /**
     * 3000 (PUBLISHED) or 1000 (HELD)
     *
     * @var string
     */
    public $ItemStatus;

    /**
     * @var PhysicalInformation
     */
    public $PhysicalInformation;

    /**
     * @var UnitCost
     */
    public $UnitCost;

    /**
     * Flag to tell if item is a marketing insert
     *
     * @var bool
     */
    public $IsInsert;

    /**
     * If item requires temp controlled storage (Nike & Vitamin World Extension)
     *
     * @var bool
     */
    public $IsTempSensitive;

    /**
     * If item requires additional QC on receipt, item will be quarantined (Nike & Vitamin World Extension)
     *
     * @var bool
     */
    public $AdditionalQC;

    /**
     * Standard verbiage to be added to pack slip (Nike & Vitamin World Extension)
     *
     * @var bool
     */
    public $AdditionalPackslipVerbiage;

    /**
     * Nike & Vitamin World Extension
     *
     * @var string
     */
    public $GenderGroup;

    /**
     * Nike & Vitamin World Extension
     *
     * @var string
     */
    public $GenderAge;

    /**
     * If the item has expiry dates
     *
     * @var bool
     */
    public $HasExpiryDate;

    /**
     * If the item has manufacturing dates
     *
     * @var bool
     */
    public $HasManufacturingDate;

    /**
     * If the item is GDP/MDS Controlled
     *
     * @var bool
     */
    public $IsGDP_MDSControlled;

    /**
     * If the item is high value
     *
     * @var bool
     */
    public $IsHighValue;

    /**
     * Value between 0 and 1 that indicates % of items to be Qced on inbound
     *
     * @var integer
     */
    public $PercentQCRequired;

    /**
     * @return string
     */
    public function getShortDescription(): string
    {
        return $this->ShortDescription;
    }

    /**
     * @param string $ShortDescription
     */
    public function setShortDescription(string $ShortDescription): void
    {
        $this->ShortDescription = $ShortDescription;
    }

    /**
     * @return string
     */
    public function getLongDescription(): ?string
    {
        return $this->LongDescription;
    }

    /**
     * @param string $LongDescription
     */
    public function setLongDescription(?string $LongDescription = null): void
    {
        $this->LongDescription = $LongDescription;
    }

    /**
     * @return string
     */
    public function getProductCategory(): ?string
    {
        return $this->ProductCategory;
    }

    /**
     * @param string $ProductCategory
     */
    public function setProductCategory(?string $ProductCategory = null): void
    {
        $this->ProductCategory = $ProductCategory;
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
     * @return Color
     */
    public function getColor(): ?Color
    {
        return $this->Color;
    }

    /**
     * @param Color $Color
     */
    public function setColor(?Color $Color = null): void
    {
        $this->Color = $Color;
    }

    /**
     * @return Image
     */
    public function getImage(): ?Image
    {
        return $this->Image;
    }

    /**
     * @param Image $Image
     */
    public function setImage(?Image $Image = null): void
    {
        $this->Image = $Image;
    }

    /**
     * @return bool
     */
    public function isReturnable(): bool
    {
        return $this->IsReturnable;
    }

    /**
     * @param bool $IsReturnable
     */
    public function setIsReturnable(bool $IsReturnable): void
    {
        $this->IsReturnable = $IsReturnable;
    }

    /**
     * @return bool
     */
    public function isSubstitutionAllowed(): bool
    {
        return $this->IsSubstitutionAllowed;
    }

    /**
     * @param bool $IsSubstitutionAllowed
     */
    public function setIsSubstitutionAllowed(bool $IsSubstitutionAllowed): void
    {
        $this->IsSubstitutionAllowed = $IsSubstitutionAllowed;
    }

    /**
     * @return bool
     */
    public function isSubstitutionAutomatic(): bool
    {
        return $this->IsSubstitutionAutomatic;
    }

    /**
     * @param bool $IsSubstitutionAutomatic
     */
    public function setIsSubstitutionAutomatic(bool $IsSubstitutionAutomatic): void
    {
        $this->IsSubstitutionAutomatic = $IsSubstitutionAutomatic;
    }

    /**
     * @return bool
     */
    public function isFragile(): ?bool
    {
        return $this->IsFragile;
    }

    /**
     * @param bool $IsFragile
     */
    public function setIsFragile(?bool $IsFragile = null): void
    {
        $this->IsFragile = $IsFragile;
    }

    /**
     * @return bool
     */
    public function isModelItem(): ?bool
    {
        return $this->IsModelItem;
    }

    /**
     * @param bool $IsModelItem
     */
    public function setIsModelItem(?bool $IsModelItem = null): void
    {
        $this->IsModelItem = $IsModelItem;
    }

    /**
     * @return int
     */
    public function getReturnWindow(): ?int
    {
        return $this->ReturnWindow;
    }

    /**
     * @param int $ReturnWindow
     */
    public function setReturnWindow(?int $ReturnWindow = null): void
    {
        $this->ReturnWindow = $ReturnWindow;
    }

    /**
     * @return string
     */
    public function getSizeCode(): ?string
    {
        return $this->SizeCode;
    }

    /**
     * @param string $SizeCode
     */
    public function setSizeCode(?string $SizeCode = null): void
    {
        $this->SizeCode = $SizeCode;
    }

    /**
     * @return string
     */
    public function getItemStatus(): string
    {
        return $this->ItemStatus;
    }

    /**
     * @param string $ItemStatus
     */
    public function setItemStatus(string $ItemStatus): void
    {
        $this->ItemStatus = $ItemStatus;
    }

    /**
     * @return PhysicalInformation
     */
    public function getPhysicalInformation(): ?PhysicalInformation
    {
        return $this->PhysicalInformation;
    }

    /**
     * @param PhysicalInformation $PhysicalInformation
     */
    public function setPhysicalInformation(?PhysicalInformation $PhysicalInformation = null): void
    {
        $this->PhysicalInformation = $PhysicalInformation;
    }

    /**
     * @return UnitCost
     */
    public function getUnitCost(): ?UnitCost
    {
        return $this->UnitCost;
    }

    /**
     * @param UnitCost $UnitCost
     */
    public function setUnitCost(?UnitCost $UnitCost = null): void
    {
        $this->UnitCost = $UnitCost;
    }

    /**
     * @return bool
     */
    public function isInsert(): bool
    {
        return $this->IsInsert;
    }

    /**
     * @param bool $IsInsert
     */
    public function setIsInsert(bool $IsInsert): void
    {
        $this->IsInsert = $IsInsert;
    }

    /**
     * @return bool
     */
    public function isTempSensitive(): ?bool
    {
        return $this->IsTempSensitive;
    }

    /**
     * @param bool $IsTempSensitive
     */
    public function setIsTempSensitive(?bool $IsTempSensitive = null): void
    {
        $this->IsTempSensitive = $IsTempSensitive;
    }

    /**
     * @return bool
     */
    public function isAdditionalQC(): ?bool
    {
        return $this->AdditionalQC;
    }

    /**
     * @param bool $AdditionalQC
     */
    public function setAdditionalQC(?bool $AdditionalQC = null): void
    {
        $this->AdditionalQC = $AdditionalQC;
    }

    /**
     * @return bool
     */
    public function isAdditionalPackslipVerbiage(): ?bool
    {
        return $this->AdditionalPackslipVerbiage;
    }

    /**
     * @param bool $AdditionalPackslipVerbiage
     */
    public function setAdditionalPackslipVerbiage(?bool $AdditionalPackslipVerbiage = null): void
    {
        $this->AdditionalPackslipVerbiage = $AdditionalPackslipVerbiage;
    }

    /**
     * @return string
     */
    public function getGenderGroup(): ?string
    {
        return $this->GenderGroup;
    }

    /**
     * @param string $GenderGroup
     */
    public function setGenderGroup(?string $GenderGroup = null): void
    {
        $this->GenderGroup = $GenderGroup;
    }

    /**
     * @return string
     */
    public function getGenderAge(): ?string
    {
        return $this->GenderAge;
    }

    /**
     * @param string $GenderAge
     */
    public function setGenderAge(?string $GenderAge = null): void
    {
        $this->GenderAge = $GenderAge;
    }

    /**
     * @return bool
     */
    public function hasExpiryDate(): ?bool
    {
        return $this->HasExpiryDate;
    }

    /**
     * @param bool $HasExpiryDate
     */
    public function setHasExpiryDate(?bool $HasExpiryDate = null): void
    {
        $this->HasExpiryDate = $HasExpiryDate;
    }

    /**
     * @return bool
     */
    public function hasManufacturingDate(): ?bool
    {
        return $this->HasManufacturingDate;
    }

    /**
     * @param bool $HasManufacturingDate
     */
    public function setHasManufacturingDate(?bool $HasManufacturingDate = null): void
    {
        $this->HasManufacturingDate = $HasManufacturingDate;
    }

    /**
     * @return bool
     */
    public function isGDPMDSControlled(): ?bool
    {
        return $this->IsGDP_MDSControlled;
    }

    /**
     * @param bool $IsGDP_MDSControlled
     */
    public function setIsGDPMDSControlled(?bool $IsGDP_MDSControlled = null): void
    {
        $this->IsGDP_MDSControlled = $IsGDP_MDSControlled;
    }

    /**
     * @return bool
     */
    public function isHighValue(): ?bool
    {
        return $this->IsHighValue;
    }

    /**
     * @param bool $IsHighValue
     */
    public function setIsHighValue(?bool $IsHighValue = null): void
    {
        $this->IsHighValue = $IsHighValue;
    }

    /**
     * @return int
     */
    public function getPercentQCRequired(): ?int
    {
        return $this->PercentQCRequired;
    }

    /**
     * @param int $PercentQCRequired
     */
    public function setPercentQCRequired(?int $PercentQCRequired = null): void
    {
        $this->PercentQCRequired = $PercentQCRequired;
    }
}