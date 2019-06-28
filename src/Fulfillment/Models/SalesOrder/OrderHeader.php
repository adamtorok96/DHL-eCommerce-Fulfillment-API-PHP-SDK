<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\SalesOrder;


class OrderHeader
{
    /**
     * The unique ID representing the order.
     *
     * @var string
     */
    public $DHLSalesOrderNumber;

    /**
     * Current order status
     *
     * @var string
     */
    public $OrderStatus;

    /**
     * Indicating whether the order is on hold
     *
     * @var bool
     */
    public $IsOnHold;

    /**
     * States the reason why the order is on hold
     *
     * @var string
     */
    public $HoldReasonCode;

    /**
     * Timestamp of the last change to this order data
     *
     * @var string
     */
    public $LastChangeTimestamp;

    /**
     * The date time stamp at which the order was created in the
     * originating platform/channel Format: YYYY-mm-DD HH:MM:SS
     *
     * @var string
     */
    public $OrderDateTime;

    /**
     * The unique ID representing the order.
     *
     * @var string
     */
    public $OrderNumber;

    /**
     * Additional reference id(s) for the order such as marketplace order id
     *
     * @var string
     */
    public $OrderReferenceNumber;

    /**
     * Originating sales channel
     *
     * @var string
     */
    public $SalesChannel;

    /**
     * Default: FALSE, Flag (TRUE) if order is B2B order.
     *
     * @var bool
     */
    public $IsB2BOrder;

    /**
     * The carrier and ship method for the order.
     * For e.g. DHLE 3. See additional description below on ShippingServiceID.
     *
     * @var string
     */
    public $ShippingServiceID;

    /**
     * Defines Additional service references.
     *
     * @var string
     */
    public $ShippingServiceOption;

    /**
     * Customer specific feature to force Node allocation for an order.
     * If not provided, OMS will use customer-specific order allocation preferences to determine the ship node.
     *
     * @var string
     */
    public $ShipFromNode;

    /**
     * Customer specific feature to provide B2B Order reference.
     *
     * @var string
     */
    public $B2BOrderReference;

    /**
     * @var Charges
     */
    public $Charges;

    /**
     * @var PaymentMethods
     */
    public $PaymentMethods;

    /**
     * @var BillTo
     */
    public $BillTo;

    /**
     * @var ShipTo
     */
    public $ShipTo;

    /**
     * @return string
     */
    public function getDHLSalesOrderNumber(): string
    {
        return $this->DHLSalesOrderNumber;
    }

    /**
     * @param string $DHLSalesOrderNumber
     */
    public function setDHLSalesOrderNumber(string $DHLSalesOrderNumber): void
    {
        $this->DHLSalesOrderNumber = $DHLSalesOrderNumber;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->OrderStatus;
    }

    /**
     * @param string $OrderStatus
     */
    public function setOrderStatus(string $OrderStatus): void
    {
        $this->OrderStatus = $OrderStatus;
    }

    /**
     * @return bool
     */
    public function isIsOnHold(): bool
    {
        return $this->IsOnHold;
    }

    /**
     * @param bool $IsOnHold
     */
    public function setIsOnHold(bool $IsOnHold): void
    {
        $this->IsOnHold = $IsOnHold;
    }

    /**
     * @return string
     */
    public function getHoldReasonCode(): string
    {
        return $this->HoldReasonCode;
    }

    /**
     * @param string $HoldReasonCode
     */
    public function setHoldReasonCode(string $HoldReasonCode): void
    {
        $this->HoldReasonCode = $HoldReasonCode;
    }

    /**
     * @return string
     */
    public function getLastChangeTimestamp(): string
    {
        return $this->LastChangeTimestamp;
    }

    /**
     * @param string $LastChangeTimestamp
     */
    public function setLastChangeTimestamp(string $LastChangeTimestamp): void
    {
        $this->LastChangeTimestamp = $LastChangeTimestamp;
    }

    /**
     * @return string
     */
    public function getOrderDateTime(): string
    {
        return $this->OrderDateTime;
    }

    /**
     * @param string $OrderDateTime
     */
    public function setOrderDateTime(string $OrderDateTime): void
    {
        $this->OrderDateTime = $OrderDateTime;
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

    /**
     * @return string
     */
    public function getOrderReferenceNumber(): string
    {
        return $this->OrderReferenceNumber;
    }

    /**
     * @param string $OrderReferenceNumber
     */
    public function setOrderReferenceNumber(string $OrderReferenceNumber): void
    {
        $this->OrderReferenceNumber = $OrderReferenceNumber;
    }

    /**
     * @return string
     */
    public function getSalesChannel(): string
    {
        return $this->SalesChannel;
    }

    /**
     * @param string $SalesChannel
     */
    public function setSalesChannel(string $SalesChannel): void
    {
        $this->SalesChannel = $SalesChannel;
    }

    /**
     * @return bool
     */
    public function isIsB2BOrder(): bool
    {
        return $this->IsB2BOrder;
    }

    /**
     * @param bool $IsB2BOrder
     */
    public function setIsB2BOrder(bool $IsB2BOrder): void
    {
        $this->IsB2BOrder = $IsB2BOrder;
    }

    /**
     * @return string
     */
    public function getShippingServiceID(): string
    {
        return $this->ShippingServiceID;
    }

    /**
     * @param string $ShippingServiceID
     */
    public function setShippingServiceID(string $ShippingServiceID): void
    {
        $this->ShippingServiceID = $ShippingServiceID;
    }

    /**
     * @return string
     */
    public function getShippingServiceOption(): string
    {
        return $this->ShippingServiceOption;
    }

    /**
     * @param string $ShippingServiceOption
     */
    public function setShippingServiceOption(string $ShippingServiceOption): void
    {
        $this->ShippingServiceOption = $ShippingServiceOption;
    }

    /**
     * @return string
     */
    public function getShipFromNode(): string
    {
        return $this->ShipFromNode;
    }

    /**
     * @param string $ShipFromNode
     */
    public function setShipFromNode(string $ShipFromNode): void
    {
        $this->ShipFromNode = $ShipFromNode;
    }

    /**
     * @return string
     */
    public function getB2BOrderReference(): string
    {
        return $this->B2BOrderReference;
    }

    /**
     * @param string $B2BOrderReference
     */
    public function setB2BOrderReference(string $B2BOrderReference): void
    {
        $this->B2BOrderReference = $B2BOrderReference;
    }

    /**
     * @return Charges
     */
    public function getCharges(): Charges
    {
        return $this->Charges;
    }

    /**
     * @param Charges $Charges
     */
    public function setCharges(Charges $Charges): void
    {
        $this->Charges = $Charges;
    }

    /**
     * @return PaymentMethods
     */
    public function getPaymentMethods(): PaymentMethods
    {
        return $this->PaymentMethods;
    }

    /**
     * @param PaymentMethods $PaymentMethods
     */
    public function setPaymentMethods(PaymentMethods $PaymentMethods): void
    {
        $this->PaymentMethods = $PaymentMethods;
    }

    /**
     * @return BillTo
     */
    public function getBillTo(): BillTo
    {
        return $this->BillTo;
    }

    /**
     * @param BillTo $BillTo
     */
    public function setBillTo(BillTo $BillTo): void
    {
        $this->BillTo = $BillTo;
    }

    /**
     * @return ShipTo
     */
    public function getShipTo(): ShipTo
    {
        return $this->ShipTo;
    }

    /**
     * @param ShipTo $ShipTo
     */
    public function setShipTo(ShipTo $ShipTo): void
    {
        $this->ShipTo = $ShipTo;
    }
}