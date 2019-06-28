<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Requests\SalesOrder;


use AdamTorok96\DHL\Common\Requests\RequestInterface;

class SalesOrderAcknowledgement implements RequestInterface
{
    /**
     * @var string
     */
    private $accountNumber;

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * @var string
     */
    private $orderSubmissionId;

    /**
     * SalesOrderAcknowledgement constructor.
     * @param string $accountNumber
     * @param string $orderNumber
     * @param string $orderSubmissionId
     */
    public function __construct(
        string $accountNumber,
        string $orderNumber,
        string $orderSubmissionId
    )
    {
        $this->accountNumber = $accountNumber;
        $this->orderNumber = $orderNumber;
        $this->orderSubmissionId = $orderSubmissionId;
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
            '/efulfillment/v1/order/acknowledgement/%s/%s/%s',
            $this->accountNumber,
            $this->orderNumber,
            $this->orderSubmissionId
        );
    }

    /**
     * @return array|null
     */
    public function getBody(): ?array
    {
        return null;
    }
}