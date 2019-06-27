<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Reqs\SalesOrder;


use AdamTorok96\DHL\Fulfillment\Models\CreateSalesOrder;
use AdamTorok96\DHL\Fulfillment\Reqs\ReqInterface;

class CreateSalesOrderReq implements ReqInterface
{
    /**
     * @var CreateSalesOrder
     */
    private $createSalesOrder;

    /**
     * CreateSalesOrderReq constructor.
     * @param CreateSalesOrder $createSalesOrder
     */
    public function __construct(CreateSalesOrder $createSalesOrder)
    {
        $this->createSalesOrder = $createSalesOrder;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return [
            'CreateSalesOrder' => $this->createSalesOrder
        ];
    }
}