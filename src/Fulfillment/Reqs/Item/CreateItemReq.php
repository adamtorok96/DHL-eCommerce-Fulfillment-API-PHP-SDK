<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Reqs\Item;


use AdamTorok96\DHL\Fulfillment\Models\CreateItem;
use AdamTorok96\DHL\Fulfillment\Reqs\ReqInterface;

class CreateItemReq implements ReqInterface
{
    /**
     * @var CreateItem
     */
    private $CreateItem;

    /**
     * CreateItemReq constructor.
     * @param CreateItem $CreateItem
     */
    public function __construct(CreateItem $CreateItem)
    {
        $this->CreateItem = $CreateItem;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return [
            'CreateItem' => $this->CreateItem
        ];
    }
}