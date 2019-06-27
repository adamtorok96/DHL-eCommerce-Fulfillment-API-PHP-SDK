<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Models;


class PhysicalInformation
{
    /**
     * Height of the item
     *
     * @var integer
     */
    public $Height;

    /**
     * Length of the item
     *
     * @var integer
     */
    public $Length;

    /**
     * Width of the item
     *
     * @var integer
     */
    public $Width;

    /**
     * Unit of measure for the weight
     *
     * @var string
     */
    public $WeightUnitOfMeasure;

    /**
     * Unit of measure for the Length, Width and Height
     *
     * @var string
     */
    public $DimensionUnitOfMeasure;

    /**
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->Height;
    }

    /**
     * @param int $Height
     */
    public function setHeight(?int $Height = null): void
    {
        $this->Height = $Height;
    }

    /**
     * @return int
     */
    public function getLength(): ?int
    {
        return $this->Length;
    }

    /**
     * @param int $Length
     */
    public function setLength(?int $Length = null): void
    {
        $this->Length = $Length;
    }

    /**
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->Width;
    }

    /**
     * @param int $Width
     */
    public function setWidth(?int $Width = null): void
    {
        $this->Width = $Width;
    }

    /**
     * @return string
     */
    public function getWeightUnitOfMeasure(): ?string
    {
        return $this->WeightUnitOfMeasure;
    }

    /**
     * @param string $WeightUnitOfMeasure
     */
    public function setWeightUnitOfMeasure(?string $WeightUnitOfMeasure = null): void
    {
        $this->WeightUnitOfMeasure = $WeightUnitOfMeasure;
    }

    /**
     * @return string
     */
    public function getDimensionUnitOfMeasure(): ?string
    {
        return $this->DimensionUnitOfMeasure;
    }

    /**
     * @param string $DimensionUnitOfMeasure
     */
    public function setDimensionUnitOfMeasure(?string $DimensionUnitOfMeasure = null): void
    {
        $this->DimensionUnitOfMeasure = $DimensionUnitOfMeasure;
    }
}