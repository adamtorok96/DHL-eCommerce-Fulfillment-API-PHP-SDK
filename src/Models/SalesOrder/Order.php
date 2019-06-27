<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\SalesOrder;


class Order
{
    /**
     * @var OrderHeader
     */
    public $OrderHeader;

    /**
     * @var OrderDetails
     */
    public $OrderDetails;

    /**
     * @var AdditionalReferences
     */
    public $AdditionalReferences;

    /**
     * @return OrderHeader
     */
    public function getOrderHeader(): OrderHeader
    {
        return $this->OrderHeader;
    }

    /**
     * @param OrderHeader $OrderHeader
     */
    public function setOrderHeader(OrderHeader $OrderHeader): void
    {
        $this->OrderHeader = $OrderHeader;
    }

    /**
     * @return OrderDetails
     */
    public function getOrderDetails(): OrderDetails
    {
        return $this->OrderDetails;
    }

    /**
     * @param OrderDetails $OrderDetails
     */
    public function setOrderDetails(OrderDetails $OrderDetails): void
    {
        $this->OrderDetails = $OrderDetails;
    }

    /**
     * @return AdditionalReferences
     */
    public function getAdditionalReferences(): ?AdditionalReferences
    {
        return $this->AdditionalReferences;
    }

    /**
     * @param AdditionalReferences $AdditionalReferences
     */
    public function setAdditionalReferences(?AdditionalReferences $AdditionalReferences = null): void
    {
        $this->AdditionalReferences = $AdditionalReferences;
    }
}