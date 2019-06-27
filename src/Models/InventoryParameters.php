<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models;


class InventoryParameters
{
    /**
     * Flag to set if item is serial tracked
     *
     * @var bool
     */
    public $IsSerialTracked;

    /**
     * Level of inventory that the warehouse cant fall below
     *
     * @var integer
     */
    public $OnhandSafetyFactorQuantity;

    /**
     * Flag to turn on Lot control logic
     *
     * @var bool
     */
    public $TagControlFlag;

    /**
     * Flag to tell the system to use the UPC item id
     *
     * @var boolean
     */
    public $UseUPCForInventory;

    /**
     * @return bool
     */
    public function isIsSerialTracked(): ?bool
    {
        return $this->IsSerialTracked;
    }

    /**
     * @param bool $IsSerialTracked
     */
    public function setIsSerialTracked(?bool $IsSerialTracked = null): void
    {
        $this->IsSerialTracked = $IsSerialTracked;
    }

    /**
     * @return int
     */
    public function getOnhandSafetyFactorQuantity(): ?int
    {
        return $this->OnhandSafetyFactorQuantity;
    }

    /**
     * @param int $OnhandSafetyFactorQuantity
     */
    public function setOnhandSafetyFactorQuantity(?int $OnhandSafetyFactorQuantity = null): void
    {
        $this->OnhandSafetyFactorQuantity = $OnhandSafetyFactorQuantity;
    }

    /**
     * @return bool
     */
    public function isTagControlFlag(): ?bool
    {
        return $this->TagControlFlag;
    }

    /**
     * @param bool $TagControlFlag
     */
    public function setTagControlFlag(?bool $TagControlFlag = null): void
    {
        $this->TagControlFlag = $TagControlFlag;
    }

    /**
     * @return bool
     */
    public function isUseUPCForInventory(): ?bool
    {
        return $this->UseUPCForInventory;
    }

    /**
     * @param bool $UseUPCForInventory
     */
    public function setUseUPCForInventory(?bool $UseUPCForInventory = null): void
    {
        $this->UseUPCForInventory = $UseUPCForInventory;
    }
}