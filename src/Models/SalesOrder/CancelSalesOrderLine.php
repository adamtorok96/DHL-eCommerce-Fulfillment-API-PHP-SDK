<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\SalesOrder;


class CancelSalesOrderLine
{
    /**
     * DHL assigned account number
     *
     * @var string
     */
    public $AccountNumber;

    /**
     * DHL assigned account number unless otherwise specified.
     *
     * @var string
     */
    public $OrgID;

    /**
     * Represents the container for a given order(s)
     *
     * @var Order
     */
    public $Order;

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
    public function getOrgID(): ?string
    {
        return $this->OrgID;
    }

    /**
     * @param string $OrgID
     */
    public function setOrgID(?string $OrgID = null): void
    {
        $this->OrgID = $OrgID;
    }

    /**
     * @return Order
     */
    public function getOrder(): Order
    {
        return $this->Order;
    }

    /**
     * @param Order $Order
     */
    public function setOrder(Order $Order): void
    {
        $this->Order = $Order;
    }
}