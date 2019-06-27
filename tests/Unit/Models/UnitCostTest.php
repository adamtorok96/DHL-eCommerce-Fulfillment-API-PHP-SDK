<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Tests\Unit\Models;


use AdamTorok96\DHL\Fulfillment\Models\UnitCost;
use PHPUnit\Framework\TestCase;

class UnitCostTest extends TestCase
{
    public function testArrayConversation(): void
    {
        $unitCost = new UnitCost();
        $unitCost->setAmount(10);
        $unitCost->setCurrency('EUR');

        $array = (array)$unitCost;

        self::assertArrayHasKey('Amount', $array);
        self::assertArrayHasKey('Currency', $array);

        self::assertEquals(10, $array['Amount']);
        self::assertEquals('EUR', $array['Currency']);
    }
}