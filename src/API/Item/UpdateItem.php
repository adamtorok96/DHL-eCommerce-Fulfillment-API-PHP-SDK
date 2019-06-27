<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\API\Item;


use AdamTorok96\DHL\Fulfillment\API\RequestInterface;
use AdamTorok96\DHL\Fulfillment\Reqs\Item\UpdateItemReq;

class UpdateItem implements RequestInterface
{
    /**
     * @var UpdateItemReq
     */
    private $UpdateItemReq;

    /**
     * UpdateItem constructor.
     * @param UpdateItemReq $UpdateItemReq
     */
    public function __construct(UpdateItemReq $UpdateItemReq)
    {
        $this->UpdateItemReq = $UpdateItemReq;
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
        return '/efulfillment/v1/item/update';
    }

    /**
     * @return array|null
     */
    public function getBody(): ?array
    {
        return $this->UpdateItemReq->getBody();
    }
}