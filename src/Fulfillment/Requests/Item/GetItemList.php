<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Requests\Item;


use AdamTorok96\DHL\Common\Requests\RequestInterface;

class GetItemList implements RequestInterface
{
    /**
     * @var string
     */
    private $accountNumber;

    /**
     * @var string|null
     */
    private $itemId;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $page;

    /**
     * GetItemList constructor.
     * @param string $accountNumber
     * @param string|null $itemId
     * @param string|null $status
     * @param string|null $page
     */
    public function __construct(
        string $accountNumber,
        ?string $itemId = null,
        ?string $status = null,
        ?string $page = null)
    {
        $this->accountNumber = $accountNumber;
        $this->itemId = $itemId;
        $this->status = $status;
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
            '/efulfillment/v1/item/list/%s/%s',
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
            'itemId' => $this->itemId,
            'status' => $this->status,
            'page' => $this->page
        ];
    }
}