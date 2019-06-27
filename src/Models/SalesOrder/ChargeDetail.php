<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\SalesOrder;


class ChargeDetail
{
    /**
     * States the charge amount assessed
     *
     * @var string
     */
    public $ChargeAmount;

    /**
     * The description of charge [For e.g. coupon code, promotion]
     *
     * @var string
     */
    public $ChargeName;

    /**
     * States the type of charge assessed [For e.g. discount, shipping]
     *
     * @var string
     */
    public $ChargeType;

    /**
     * @return string
     */
    public function getChargeAmount(): string
    {
        return $this->ChargeAmount;
    }

    /**
     * @param string $ChargeAmount
     */
    public function setChargeAmount(string $ChargeAmount): void
    {
        $this->ChargeAmount = $ChargeAmount;
    }

    /**
     * @return string
     */
    public function getChargeName(): string
    {
        return $this->ChargeName;
    }

    /**
     * @param string $ChargeName
     */
    public function setChargeName(string $ChargeName): void
    {
        $this->ChargeName = $ChargeName;
    }

    /**
     * @return string
     */
    public function getChargeType(): string
    {
        return $this->ChargeType;
    }

    /**
     * @param string $ChargeType
     */
    public function setChargeType(string $ChargeType): void
    {
        $this->ChargeType = $ChargeType;
    }
}