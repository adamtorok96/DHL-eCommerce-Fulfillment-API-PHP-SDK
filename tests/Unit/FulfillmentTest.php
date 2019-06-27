<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Tests\Unit;


use AdamTorok96\DHL\Fulfillment\Fulfillment;
use AdamTorok96\DHL\Fulfillment\Tests\UnitTestCase;
use GuzzleHttp\Client;

class FulfillmentTest extends UnitTestCase
{
    /**
     * @var string
     */
    protected $client_id;

    /**
     * @var string
     */
    protected $client_secret;

    /**
     * @var bool
     */
    protected $sandbox;

    /**
     * @var Fulfillment
     */
    protected $fulfillment;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client_id = $this->faker->uuid;
        $this->client_secret = $this->faker->uuid;
        $this->sandbox = $this->faker->boolean;

        $this->fulfillment = new Fulfillment(
            $this->client_id,
            $this->client_secret,
            $this->sandbox
        );
    }

    public function testFulfillmentClientId(): void
    {
        self::assertEquals($this->client_id, $this->fulfillment->getClientId());

        $this->client_id = $this->faker->uuid;

        $this->fulfillment->setClientId($this->client_id);

        self::assertEquals($this->client_id, $this->fulfillment->getClientId());
    }

    public function testFulfillmentClientSecret(): void
    {
        self::assertEquals($this->client_secret, $this->fulfillment->getClientSecret());

        $this->client_secret = $this->faker->uuid;

        $this->fulfillment->setClientSecret($this->client_secret);

        self::assertEquals($this->client_secret, $this->fulfillment->getClientSecret());
    }

    public function testSandbox(): void
    {
        self::assertEquals($this->sandbox, $this->fulfillment->isSandbox());

        $this->sandbox = $this->faker->boolean;

        $this->fulfillment->setSandbox($this->sandbox);

        self::assertEquals($this->sandbox, $this->fulfillment->isSandbox());
    }

    public function testClient(): void
    {
        self::assertNotNull($this->fulfillment->getClient());

        $client = new Client();

        $this->fulfillment->setClient($client);

        self::assertEquals($client, $this->fulfillment->getClient());
    }

    public function testGetBaseUrl(): void
    {
        if( $this->sandbox ) {
            self::assertEquals(Fulfillment::API_BASE_URL_SANDBOX, $this->fulfillment->getBaseUrl());
        } else {
            self::assertEquals(Fulfillment::API_BASE_URL, $this->fulfillment->getBaseUrl());
        }

        $this->fulfillment->setSandbox($this->sandbox = !$this->sandbox);

        if( $this->sandbox ) {
            self::assertEquals(Fulfillment::API_BASE_URL_SANDBOX, $this->fulfillment->getBaseUrl());
        } else {
            self::assertEquals(Fulfillment::API_BASE_URL, $this->fulfillment->getBaseUrl());
        }
    }
}