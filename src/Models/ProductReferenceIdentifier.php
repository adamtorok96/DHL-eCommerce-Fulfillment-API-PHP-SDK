<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models;


class ProductReferenceIdentifier
{
    /**
     * Key to identify the additional Id
     *
     * @var string
     */
    public $ProductReference;

    /**
     * Additional product id
     *
     * @var string
     */
    public $Identifier;

    /**
     * @return string
     */
    public function getProductReference(): string
    {
        return $this->ProductReference;
    }

    /**
     * @param string $ProductReference
     */
    public function setProductReference(string $ProductReference): void
    {
        $this->ProductReference = $ProductReference;
    }

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->Identifier;
    }

    /**
     * @param string $Identifier
     */
    public function setIdentifier(string $Identifier): void
    {
        $this->Identifier = $Identifier;
    }
}