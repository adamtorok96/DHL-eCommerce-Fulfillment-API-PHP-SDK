<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models;


class CreatePurchaseOrder
{
    /**
     * The date on which the message was created
     *
     * @var string
     */
    public $MessageDateTime;

    /**
     * Unique grouping ID representing a collection of orders.
     * Conditionally used when more than one order is submitted
     * in a request Can be used for CreateOrder and GetOrderStatus
     *
     * @var string
     */
    public $OrderSubmissionID;

    /**
     * DHL assigned account number
     *
     * @var string
     */
    public $AccountNumber;

    /**
     * Relevant organization code for billing organization
     *
     * @var string
     */
    public $BillingAccountNumber;

    /**
     * @var OrderHeader
     */
    public $OrderHeader;

    /**
     * @var array|OrderDetail[]
     */
    public $OrderDetails;

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
    public function getBillingAccountNumber(): ?string
    {
        return $this->BillingAccountNumber;
    }

    /**
     * @param string $BillingAccountNumber
     */
    public function setBillingAccountNumber(?string $BillingAccountNumber = null): void
    {
        $this->BillingAccountNumber = $BillingAccountNumber;
    }

    /**
     * @return OrderHeader
     */
    public function getOrderHeader(): OrderHeader
    {
        return $this->OrderHeader;
    }

    /**
     * @param OrderHeader $OrderHeader
     */
    public function setOrderHeader(OrderHeader $OrderHeader): void
    {
        $this->OrderHeader = $OrderHeader;
    }

    /**
     * @param OrderDetail $orderDetail
     * @return bool
     */
    public function hasOrderDetail(OrderDetail $orderDetail): bool
    {
        return in_array($orderDetail, $this->OrderDetails, true);
    }

    /**
     * @return OrderDetail[]|array
     */
    public function getOrderDetails(): array
    {
        return $this->OrderDetails;
    }

    /**
     * @param OrderDetail $OrderDetail
     */
    public function addOrderDetail(OrderDetail $OrderDetail): void
    {
        $this->OrderDetails[] = $OrderDetail;
    }

    /**
     * @param OrderDetail $OrderDetail
     */
    public function removeOrderDetail(OrderDetail $OrderDetail): void
    {
        $index = array_search($OrderDetail, $this->OrderDetails, true);

        unset($this->OrderDetails[$index]);
    }
}