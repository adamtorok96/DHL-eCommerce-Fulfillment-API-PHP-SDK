<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Reqs\SalesOrder;


use AdamTorok96\DHL\Fulfillment\Models\SalesOrder\CancelSalesOrderLine;
use AdamTorok96\DHL\Common\Reqs\ReqInterface;

class CancelSalesOrderReq implements ReqInterface
{
    /**
     * @var CancelSalesOrderLine
     */
    private $CancelSalesOrderLine;

    /**
     * CancelSalesOrderReq constructor.
     * @param CancelSalesOrderLine $CancelSalesOrderLine
     */
    public function __construct(CancelSalesOrderLine $CancelSalesOrderLine)
    {
        $this->CancelSalesOrderLine = $CancelSalesOrderLine;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return [
            'CancelSalesOrderLine' => $this->CancelSalesOrderLine
        ];
    }
}