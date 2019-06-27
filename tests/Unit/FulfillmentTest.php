<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Tests\Unit;


use AdamTorok96\DHL\Fulfillment\Fulfillment;
use PHPUnit\Framework\TestCase;

class FulfillmentTest extends TestCase
{
    public function testFulfillmentFunctions(): void
    {
        $client_id = 'client_id';
        $client_secret = 'client_secret';
        $sandbox = false;

        $api = new Fulfillment($client_id, $client_secret, $sandbox);

        self::assertEquals($client_id, $api->getClientId());
        self::assertEquals($client_secret, $api->getClientSecret());
        self::assertEquals($sandbox, $api->isSandbox());

        $api->setSandbox(true);

        self::assertTrue($api->isSandbox());
    }
}