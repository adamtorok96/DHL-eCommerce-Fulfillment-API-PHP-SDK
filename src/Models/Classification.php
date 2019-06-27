<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models;


class Classification
{
    /**
     * Unique Id
     *
     * @var string
     */
    public $HarmonizedCode;

    /**
     * 9 levels of hazmat classes
     *
     * @var string
     */
    public $HazmatClass;

    /**
     * Model of the item
     *
     * @var string
     */
    public $Model;

    /**
     * @return string
     */
    public function getHarmonizedCode(): ?string
    {
        return $this->HarmonizedCode;
    }

    /**
     * @param string $HarmonizedCode
     */
    public function setHarmonizedCode(?string $HarmonizedCode = null): void
    {
        $this->HarmonizedCode = $HarmonizedCode;
    }

    /**
     * @return string
     */
    public function getHazmatClass(): ?string
    {
        return $this->HazmatClass;
    }

    /**
     * @param string $HazmatClass
     */
    public function setHazmatClass(?string $HazmatClass = null): void
    {
        $this->HazmatClass = $HazmatClass;
    }

    /**
     * @return string
     */
    public function getModel(): ?string
    {
        return $this->Model;
    }

    /**
     * @param string $Model
     */
    public function setModel(?string $Model = null): void
    {
        $this->Model = $Model;
    }
}