<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\API\PurchaseOrder;


use AdamTorok96\DHL\Fulfillment\API\RequestInterface;
use AdamTorok96\DHL\Fulfillment\Reqs\PurchaseOrder\CancelPurchaseOrderReq;

class CancelPurchaseOrder implements RequestInterface
{
    /**
     * @var CancelPurchaseOrderReq
     */
    private $CancelPurchaseOrderReq;

    /**
     * CancelPurchaseOrder constructor.
     * @param CancelPurchaseOrderReq $CancelPurchaseOrderReq
     */
    public function __construct(CancelPurchaseOrderReq $CancelPurchaseOrderReq)
    {
        $this->CancelPurchaseOrderReq = $CancelPurchaseOrderReq;
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
        return '/efulfillment/v1/purchaseorder/cancel';
    }

    /**
     * @return array|null
     */
    public function getBody(): ?array
    {
        return $this->CancelPurchaseOrderReq->getBody();
    }
}