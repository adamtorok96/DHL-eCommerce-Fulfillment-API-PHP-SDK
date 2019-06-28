<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Requests\PurchaseOrder;


use AdamTorok96\DHL\Common\Requests\RequestInterface;
use AdamTorok96\DHL\Fulfillment\Reqs\PurchaseOrder\CreatePurchaseOrderReq;

class CreatePurchaseOrder implements RequestInterface
{
    /**
     * @var CreatePurchaseOrderReq
     */
    private $CreatePurchaseOrderReq;

    /**
     * CreatePurchaseOrder constructor.
     * @param CreatePurchaseOrderReq $CreatePurchaseOrder
     */
    public function __construct(CreatePurchaseOrderReq $CreatePurchaseOrderReq)
    {
        $this->CreatePurchaseOrderReq = $CreatePurchaseOrderReq;
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
        return '/efulfillment/v1/purchaseorder';
    }

    /**
     * @return array|null
     */
    public function getBody(): ?array
    {
        return $this->CreatePurchaseOrderReq->getBody();
    }
}