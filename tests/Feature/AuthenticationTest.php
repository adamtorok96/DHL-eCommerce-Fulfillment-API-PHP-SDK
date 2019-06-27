<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Tests\Feature;


use AdamTorok96\DHL\Fulfillment\Tests\FeatureTestCase;

class AuthenticationTest extends FeatureTestCase
{
    /**
     * @throws \AdamTorok96\DHL\Fulfillment\Exceptions\AuthenticationException
     */
    public function testAuthentication(): void
    {
        $response = $this->fulfillment->authenticate();

        self::assertNotNull($response->getAccessToken());
        self::assertNotNull($response->getTokenType());
        self::assertNotNull($response->getExpiresIn());
        self::assertNotNull($response->getScope());
    }
}