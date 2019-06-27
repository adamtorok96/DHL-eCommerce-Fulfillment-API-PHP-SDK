<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\PurchaseOrder;


class OrderHeader
{
    /**
     * The unique id representing a purchase order
     *
     * @var string
     */
    public $OrderNumber;

    /**
     * Alternative ref number for upstream systems
     *
     * @var string
     */
    public $OrderReferenceNumber;

    /**
     * Customer Invoice reference number
     *
     * @var string
     */
    public $InvoiceNumber;

    /**
     * Tracking number for the shipment
     *
     * @var string
     */
    public $ShipmentTrackingNumber;

    /**
     * Name of the carrier providing the shipment service
     *
     * @var string
     */
    public $CarrierName;

    /**
     * The date on which the purchase order was created
     *
     * @var string
     */
    public $OrderDateTime;

    /**
     * Email address of the customer which is used to send purchase order related notivications
     *
     * @var string
     */
    public $NotificationEmailID;

    /**
     * Fufillment center to which the purchase order will be sent
     *
     * @var string
     */
    public $ReceivingNode;

    /**
     * Preferred delivery date
     *
     * @var string
     */
    public $RequestedDeliveryDate;

    /**
     * Updated more accurate delivery date
     *
     * @var string
     */
    public $ExpectedDeliveryDate;

    /**
     * @var ShipFrom
     */
    public $ShipFrom;

    /**
     * @var ShipTo
     */
    public $ShipTo;

    /**
     * @var BillTo
     */
    public $BillTo;

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
    public function getOrderReferenceNumber(): ?string
    {
        return $this->OrderReferenceNumber;
    }

    /**
     * @param string $OrderReferenceNumber
     */
    public function setOrderReferenceNumber(?string $OrderReferenceNumber = null): void
    {
        $this->OrderReferenceNumber = $OrderReferenceNumber;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber(): ?string
    {
        return $this->InvoiceNumber;
    }

    /**
     * @param string $InvoiceNumber
     */
    public function setInvoiceNumber(?string $InvoiceNumber = null): void
    {
        $this->InvoiceNumber = $InvoiceNumber;
    }

    /**
     * @return string
     */
    public function getShipmentTrackingNumber(): ?string
    {
        return $this->ShipmentTrackingNumber;
    }

    /**
     * @param string $ShipmentTrackingNumber
     */
    public function setShipmentTrackingNumber(?string $ShipmentTrackingNumber = null): void
    {
        $this->ShipmentTrackingNumber = $ShipmentTrackingNumber;
    }

    /**
     * @return string
     */
    public function getCarrierName(): ?string
    {
        return $this->CarrierName;
    }

    /**
     * @param string $CarrierName
     */
    public function setCarrierName(?string $CarrierName = null): void
    {
        $this->CarrierName = $CarrierName;
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
    public function getNotificationEmailID(): ?string
    {
        return $this->NotificationEmailID;
    }

    /**
     * @param string $NotificationEmailID
     */
    public function setNotificationEmailID(?string $NotificationEmailID = null): void
    {
        $this->NotificationEmailID = $NotificationEmailID;
    }

    /**
     * @return string
     */
    public function getReceivingNode(): string
    {
        return $this->ReceivingNode;
    }

    /**
     * @param string $ReceivingNode
     */
    public function setReceivingNode(string $ReceivingNode): void
    {
        $this->ReceivingNode = $ReceivingNode;
    }

    /**
     * @return string
     */
    public function getRequestedDeliveryDate(): string
    {
        return $this->RequestedDeliveryDate;
    }

    /**
     * @param string $RequestedDeliveryDate
     */
    public function setRequestedDeliveryDate(string $RequestedDeliveryDate): void
    {
        $this->RequestedDeliveryDate = $RequestedDeliveryDate;
    }

    /**
     * @return string
     */
    public function getExpectedDeliveryDate(): string
    {
        return $this->ExpectedDeliveryDate;
    }

    /**
     * @param string $ExpectedDeliveryDate
     */
    public function setExpectedDeliveryDate(string $ExpectedDeliveryDate): void
    {
        $this->ExpectedDeliveryDate = $ExpectedDeliveryDate;
    }

    /**
     * @return ShipFrom
     */
    public function getShipFrom(): ShipFrom
    {
        return $this->ShipFrom;
    }

    /**
     * @param ShipFrom $ShipFrom
     */
    public function setShipFrom(ShipFrom $ShipFrom): void
    {
        $this->ShipFrom = $ShipFrom;
    }

    /**
     * @return ShipTo
     */
    public function getShipTo(): ?ShipTo
    {
        return $this->ShipTo;
    }

    /**
     * @param ShipTo $ShipTo
     */
    public function setShipTo(?ShipTo $ShipTo = null): void
    {
        $this->ShipTo = $ShipTo;
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
}