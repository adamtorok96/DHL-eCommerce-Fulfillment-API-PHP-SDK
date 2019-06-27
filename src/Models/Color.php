<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models;


class Color
{
    /**
     * Unique code to identify the colour
     *
     * @var string
     */
    public $Code;

    /**
     * Desciption of the colour
     *
     * @var string
     */
    public $Name;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     */
    public function setCode(string $Code): void
    {
        $this->Code = $Code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     */
    public function setName(string $Name): void
    {
        $this->Name = $Name;
    }
}