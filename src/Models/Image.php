<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models;


class Image
{
    /**
     * Base URL location of the Image
     *
     * @var string
     */
    public $Location;

    /**
     * Label to identify label
     *
     * @var string
     */
    public $Label;

    /**
     * Name of the filename
     *
     * @var string
     */
    public $Identifier;

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->Location;
    }

    /**
     * @param string $Location
     */
    public function setLocation(string $Location): void
    {
        $this->Location = $Location;
    }

    /**
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->Label;
    }

    /**
     * @param string $Label
     */
    public function setLabel(?string $Label = null): void
    {
        $this->Label = $Label;
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