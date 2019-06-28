<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\PurchaseOrder;


class CancelPurchaseOrder
{
    /**
     * DHL assigned account number
     *
     * @var string
     */
    public $AccountNumber;

    /**
     * The unique id representing a purchase order
     *
     * @var string
     */
    public $OrderNumber;

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
    public function getOrderNumber(): string
    {
        return $this->OrderNumber;
    }

    /**
     * @param string $OrderNumber
     */
    public function setOrderNumber(string $OrderNumber): void
    {
        $this->OrderNumber = $OrderNumber;
    }
}