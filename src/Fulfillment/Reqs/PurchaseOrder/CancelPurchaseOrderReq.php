<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Reqs\PurchaseOrder;


use AdamTorok96\DHL\Fulfillment\Models\PurchaseOrder\CancelPurchaseOrder;
use AdamTorok96\DHL\Fulfillment\Reqs\ReqInterface;

class CancelPurchaseOrderReq implements ReqInterface
{
    /**
     * @var CancelPurchaseOrder
     */
    private $CancelPurchaseOrder;

    /**
     * CancelPurchaseOrderReq constructor.
     * @param CancelPurchaseOrder $CancelPurchaseOrder
     */
    public function __construct(CancelPurchaseOrder $CancelPurchaseOrder)
    {
        $this->CancelPurchaseOrder = $CancelPurchaseOrder;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return [
            'CancelPurchaseOrder' => $this->CancelPurchaseOrder
        ];
    }
}