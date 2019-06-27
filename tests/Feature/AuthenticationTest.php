<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Tests\Feature;


use AdamTorok96\DHL\Fulfillment\Fulfillment;
use PHPUnit\Framework\TestCase;

class AuthenticationTest extends TestCase
{
    /**
     * @throws \AdamTorok96\DHL\Fulfillment\Exceptions\AuthenticationException
     */
    public function testAuthentication(): void
    {
        $api = new Fulfillment(
            'e9ed82a8-4237-4185-8e36-47264aa9e718',
            'b1ed1bfa-689b-4d5b-bbf2-39dde64ccb64'
        );

        $response = $api->authenticate();

        self::assertNotNull($response->getAccessToken());
        self::assertNotNull($response->getTokenType());
        self::assertNotNull($response->getExpiresIn());
        self::assertNotNull($response->getScope());
    }
}