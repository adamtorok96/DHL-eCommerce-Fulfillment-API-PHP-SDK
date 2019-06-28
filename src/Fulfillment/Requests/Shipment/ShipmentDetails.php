<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Requests\Shipment;


use AdamTorok96\DHL\Common\Requests\RequestInterface;

class ShipmentDetails implements RequestInterface
{
    /**
     * @var string
     */
    private $accountNumber;

    /**
     * @var string|null
     */
    private $orderNumber;

    /**
     * @var string|null
     */
    private $dateFrom;

    /**
     * @var string|null
     */
    private $dateTo;

    /**
     * @var string|null
     */
    private $date;

    /**
     * @var string|null
     */
    private $shipFromNode;

    /**
     * @var string|null
     */
    private $page;

    /**
     * ShipmentDetails constructor.
     * @param string $accountNumber
     * @param string|null $orderNumber
     * @param string|null $dateFrom
     * @param string|null $dateTo
     * @param string|null $date
     * @param string|null $shipFromNode
     * @param string|null $page
     */
    public function __construct(
        string $accountNumber,
        ?string $orderNumber = null,
        ?string $dateFrom = null,
        ?string $dateTo = null,
        ?string $date = null,
        ?string $shipFromNode = null,
        ?string $page = null
    )
    {
        $this->accountNumber = $accountNumber;
        $this->orderNumber = $orderNumber;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->date = $date;
        $this->shipFromNode = $shipFromNode;
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return RequestInterface::METHOD_GET;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return sprintf(
            '/efulfillment/v1/%s/%s',
            $this->accountNumber,
            http_build_query($this->getQueries())
        );
    }

    /**
     * @return array|null
     */
    public function getBody(): ?array
    {
        return null;
    }

    /**
     * @return array
     */
    private function getQueries(): array
    {
        return [
            'orderNumber' => $this->orderNumber,
            'dateFrom' => $this->dateFrom,
            'dateTo' => $this->dateTo,
            'date' => $this->date,
            'shipFromNode' => $this->shipFromNode,
            'page' => $this->page
        ];
    }
}