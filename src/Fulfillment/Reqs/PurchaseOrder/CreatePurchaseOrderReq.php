<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Reqs\PurchaseOrder;


use AdamTorok96\DHL\Fulfillment\Models\PurchaseOrder\CreatePurchaseOrder;
use AdamTorok96\DHL\Common\Reqs\ReqInterface;

class CreatePurchaseOrderReq implements ReqInterface
{
    /**
     * @var CreatePurchaseOrder
     */
    private $createPurchaseOrder;

    /**
     * CreatePurchaseOrderReq constructor.
     * @param CreatePurchaseOrder $createPurchaseOrder
     */
    public function __construct(CreatePurchaseOrder $createPurchaseOrder)
    {
        $this->createPurchaseOrder = $createPurchaseOrder;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return [
            'CreatePurchaseOrder' => $this->createPurchaseOrder
        ];
    }
}