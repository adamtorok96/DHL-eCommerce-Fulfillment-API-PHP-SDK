<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models\SalesOrder;


class Instruction
{
    /**
     * Type of instruction (For e.g. giftmessage, giftwrap (future), engraving (future))
     *
     * @var string
     */
    public $Type;

    /**
     * Text related to the instruction
     *
     * @var string
     */
    public $Details;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }

    /**
     * @param string $Type
     */
    public function setType(string $Type): void
    {
        $this->Type = $Type;
    }

    /**
     * @return string
     */
    public function getDetails(): string
    {
        return $this->Details;
    }

    /**
     * @param string $Details
     */
    public function setDetails(string $Details): void
    {
        $this->Details = $Details;
    }
}