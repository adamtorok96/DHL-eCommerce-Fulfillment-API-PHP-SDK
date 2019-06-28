<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Tests;


use AdamTorok96\DHL\Common\DHL;
use Faker\Factory;
use Faker\Generator;
use PHPUnit\Framework\TestCase;

class FeatureTestCase extends TestCase
{
    /**
     * @var Generator
     */
    protected $faker;

    /**
     * @var DHL
     */
    protected $dhl;

    protected function setUp(): void
    {
        parent::setUp();

        $this->faker = Factory::create();
        $this->dhl = new DHL(
            'e9ed82a8-4237-4185-8e36-47264aa9e718',
            'b1ed1bfa-689b-4d5b-bbf2-39dde64ccb64'
        );
    }
}