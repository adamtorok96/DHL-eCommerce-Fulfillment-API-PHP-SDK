<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Requests\SalesOrder;


use AdamTorok96\DHL\Common\Requests\RequestInterface;
use AdamTorok96\DHL\Fulfillment\Reqs\SalesOrder\CancelSalesOrderReq;

class CancelSalesOrder implements RequestInterface
{
    /**
     * @var CancelSalesOrderReq
     */
    private $cancelSalesOrderReq;

    /**
     * CancelSalesOrder constructor.
     * @param CancelSalesOrderReq $cancelSalesOrderReq
     */
    public function __construct(CancelSalesOrderReq $cancelSalesOrderReq)
    {
        $this->cancelSalesOrderReq = $cancelSalesOrderReq;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return RequestInterface::METHOD_POST;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return '/efulfillment/v1/order/cancel';
    }

    /**
     * @return array|null
     */
    public function getBody(): ?array
    {
        return $this->cancelSalesOrderReq->getBody();
    }
}