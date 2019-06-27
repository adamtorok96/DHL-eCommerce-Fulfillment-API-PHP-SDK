<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\SalesOrder;


class Charges
{
    /**
     * The currency of the payment transaction
     *
     * @var string
     */
    public $OrderCurrency;

    /**
     * Denotes the total order/sale value
     *
     * @var integer
     */
    public $OrderTotal;

    /**
     * Field that represents the total order amount of each order line,
     * less the shipping, tax and discounts charges.
     *
     * @var integer
     */
    public $OrderSubTotal;

    /**
     * The total amount to be collected at time of delivery. To be provided if Payment Type is COD
     *
     * @var float
     */
    public $CODAmount;

    /**
     * Total discount applied to the order.
     *
     * @var float
     */
    public $TotalOrderDiscount;

    /**
     * Total shipping charges of the order.
     *
     * @var float
     */
    public $TotalShippingCharge;

    /**
     * The total amount of taxes, duties or VAT associated to the order.
     *
     * @var float
     */
    public $TaxTotal;

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
    public function getOrderCurrency(): string
    {
        return $this->OrderCurrency;
    }

    /**
     * @param string $OrderCurrency
     */
    public function setOrderCurrency(string $OrderCurrency): void
    {
        $this->OrderCurrency = $OrderCurrency;
    }

    /**
     * @return int
     */
    public function getOrderTotal(): int
    {
        return $this->OrderTotal;
    }

    /**
     * @param int $OrderTotal
     */
    public function setOrderTotal(int $OrderTotal): void
    {
        $this->OrderTotal = $OrderTotal;
    }

    /**
     * @return int
     */
    public function getOrderSubTotal(): int
    {
        return $this->OrderSubTotal;
    }

    /**
     * @param int $OrderSubTotal
     */
    public function setOrderSubTotal(int $OrderSubTotal): void
    {
        $this->OrderSubTotal = $OrderSubTotal;
    }

    /**
     * @return float
     */
    public function getCODAmount(): ?float
    {
        return $this->CODAmount;
    }

    /**
     * @param float $CODAmount
     */
    public function setCODAmount(?float $CODAmount = null): void
    {
        $this->CODAmount = $CODAmount;
    }

    /**
     * @return float
     */
    public function getTotalOrderDiscount(): ?float
    {
        return $this->TotalOrderDiscount;
    }

    /**
     * @param float $TotalOrderDiscount
     */
    public function setTotalOrderDiscount(?float $TotalOrderDiscount = null): void
    {
        $this->TotalOrderDiscount = $TotalOrderDiscount;
    }

    /**
     * @return float
     */
    public function getTotalShippingCharge(): float
    {
        return $this->TotalShippingCharge;
    }

    /**
     * @param float $TotalShippingCharge
     */
    public function setTotalShippingCharge(float $TotalShippingCharge): void
    {
        $this->TotalShippingCharge = $TotalShippingCharge;
    }

    /**
     * @return float
     */
    public function getTaxTotal(): float
    {
        return $this->TaxTotal;
    }

    /**
     * @param float $TaxTotal
     */
    public function setTaxTotal(float $TaxTotal): void
    {
        $this->TaxTotal = $TaxTotal;
    }

    /**
     * @param TaxDetail $TaxDetail
     * @return bool
     */
    public function hasTaxDetail(TaxDetail $TaxDetail): bool
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
     * @param TaxDetail
     */
    public function addTaxDetail(TaxDetail $TaxDetail): void
    {
        $this->TaxDetail[] = $TaxDetail;
    }

    /**
     * @param TaxDetail
     */
    public function removeTaxDetail(TaxDetail $TaxDetail): void
    {
        $index = array_search($TaxDetail, $this->TaxDetail, true);

        unset($this->TaxDetail[$index]);
    }

    /**
     * @param ChargeDetail $ChargeDetail
     * @return bool
     */
    public function hasChargeDetail(ChargeDetail $ChargeDetail): bool
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