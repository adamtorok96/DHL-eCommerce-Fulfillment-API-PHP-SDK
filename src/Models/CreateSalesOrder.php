<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models;


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
}