<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\SalesOrder;


class CreateSalesOrder
{
    /**
     * The date time stamp of the request message. Format: YYYY-mm-DD HH:MM:SS
     *
     * @var string
     */
    public $MessageDateTime;

    /**
     * Unique grouping ID representing a collection of orders.
     * Conditionally used when more than one order is submitted in a request.
     * Can be used for CreateOrder and GetOrderStatus
     *
     * @var string
     */
    public $OrderSubmissionID;

    /**
     * DHL assigned Customer account number
     *
     * @var string
     */
    public $AccountNumber;

    /**
     * DHL assigned customer Account number unless specified otherwise
     *
     * @var string
     */
    public $OrgID;

    /**
     * This object defines the order header, details and additional references
     *
     * @var Order
     */
    public $Order;

    /**
     * @return string
     */
    public function getMessageDateTime(): string
    {
        return $this->MessageDateTime;
    }

    /**
     * @param string $MessageDateTime
     */
    public function setMessageDateTime(string $MessageDateTime): void
    {
        $this->MessageDateTime = $MessageDateTime;
    }

    /**
     * @return string
     */
    public function getOrderSubmissionID(): string
    {
        return $this->OrderSubmissionID;
    }

    /**
     * @param string $OrderSubmissionID
     */
    public function setOrderSubmissionID(string $OrderSubmissionID): void
    {
        $this->OrderSubmissionID = $OrderSubmissionID;
    }

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