<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Tests\Unit;


use AdamTorok96\DHL\Common\DHL;
use AdamTorok96\DHL\Fulfillment\Tests\UnitTestCase;
use GuzzleHttp\Client;

class DHLTest extends UnitTestCase
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
     * @var DHL
     */
    protected $dhl;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client_id = $this->faker->uuid;
        $this->client_secret = $this->faker->uuid;
        $this->sandbox = $this->faker->boolean;

        $this->dhl = new DHL(
            $this->client_id,
            $this->client_secret,
            $this->sandbox
        );
    }

    public function testFulfillmentClientId(): void
    {
        self::assertEquals($this->client_id, $this->dhl->getClientId());

        $this->client_id = $this->faker->uuid;

        $this->dhl->setClientId($this->client_id);

        self::assertEquals($this->client_id, $this->dhl->getClientId());
    }

    public function testFulfillmentClientSecret(): void
    {
        self::assertEquals($this->client_secret, $this->dhl->getClientSecret());

        $this->client_secret = $this->faker->uuid;

        $this->dhl->setClientSecret($this->client_secret);

        self::assertEquals($this->client_secret, $this->dhl->getClientSecret());
    }

    public function testSandbox(): void
    {
        self::assertEquals($this->sandbox, $this->dhl->isSandbox());

        $this->sandbox = $this->faker->boolean;

        $this->dhl->setSandbox($this->sandbox);

        self::assertEquals($this->sandbox, $this->dhl->isSandbox());
    }

    public function testClient(): void
    {
        self::assertNotNull($this->dhl->getClient());

        $client = new Client();

        $this->dhl->setClient($client);

        self::assertEquals($client, $this->dhl->getClient());
    }

    public function testGetBaseUrl(): void
    {
        if( $this->sandbox ) {
            self::assertEquals(DHL::API_BASE_URL_SANDBOX, $this->dhl->getBaseUrl());
        } else {
            self::assertEquals(DHL::API_BASE_URL, $this->dhl->getBaseUrl());
        }

        $this->dhl->setSandbox($this->sandbox = !$this->sandbox);

        if( $this->sandbox ) {
            self::assertEquals(DHL::API_BASE_URL_SANDBOX, $this->dhl->getBaseUrl());
        } else {
            self::assertEquals(DHL::API_BASE_URL, $this->dhl->getBaseUrl());
        }
    }
}