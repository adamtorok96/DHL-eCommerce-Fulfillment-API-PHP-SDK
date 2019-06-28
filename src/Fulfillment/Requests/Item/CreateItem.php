<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Requests\Item;


use AdamTorok96\DHL\Common\Requests\RequestInterface;
use AdamTorok96\DHL\Fulfillment\Reqs\Item\CreateItemReq;

class CreateItem implements RequestInterface
{
    /**
     * @var CreateItemReq
     */
    private $CreateItemReq;

    /**
     * CreateItem constructor.
     * @param CreateItemReq $CreateItemReq
     */
    public function __construct(CreateItemReq $CreateItemReq)
    {
        $this->CreateItemReq = $CreateItemReq;
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
        return '/efulfillment/v1/item';
    }

    /**
     * @return array|null
     */
    public function getBody(): ?array
    {
        return $this->CreateItemReq->getBody();
    }
}