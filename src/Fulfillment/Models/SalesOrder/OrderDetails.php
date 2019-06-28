<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\SalesOrder;


class OrderDetails
{
    /**
     * @var array|OrderLine[]
     */
    public $OrderLine;

    /**
     * @param OrderLine $OrderLine
     * @return bool $OrderLine
     */
    public function hasOrderLines(OrderLine $OrderLine): bool
    {
        return in_array($OrderLine, $this->OrderLine, true);
    }

    /**
     * @return OrderLine[]|array
     */
    public function getOrderLines(): array
    {
        return $this->OrderLine;
    }

    /**
     * @param OrderLine $OrderLine
     */
    public function addOrderLine($OrderLine): void
    {
        $this->OrderLine[] = $OrderLine;
    }

    /**
     * @param OrderLine $OrderLine
     */
    public function removeOrderLine(OrderLine $OrderLine): void
    {
        $index = array_search($OrderLine, $this->OrderLine, true);

        unset($this->OrderLine[$index]);
    }
}