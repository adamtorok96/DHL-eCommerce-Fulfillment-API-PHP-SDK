<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\API\SalesOrder;


use AdamTorok96\DHL\Fulfillment\API\RequestInterface;
use AdamTorok96\DHL\Fulfillment\Reqs\SalesOrder\CreateSalesOrderReq;

class CreateSalesOrder implements RequestInterface
{
    /**
     * @var CreateSalesOrderReq
     */
    private $CreateSalesOrderReq;

    /**
     * CreateSalesOrder constructor.
     * @param CreateSalesOrderReq $CreateSalesOrderReq
     */
    public function __construct(CreateSalesOrderReq $CreateSalesOrderReq)
    {
        $this->CreateSalesOrderReq = $CreateSalesOrderReq;
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
        return '/efulfillment/v1/order';
    }

    /**
     * @return array|null
     */
    public function getBody(): ?array
    {
        return $this->CreateSalesOrderReq->getBody();
    }
}