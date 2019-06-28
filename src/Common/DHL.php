<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Common;


use AdamTorok96\DHL\Fulfillment\API\RequestInterface;
use AdamTorok96\DHL\Common\Exceptions\AuthenticationException;
use AdamTorok96\DHL\Common\Exceptions\RequestFailedException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;


class DHL
{
    /**
     * Production Base URL
     *
     * @var string
     */
    public const API_BASE_URL = 'https://api.dhlecommerce.com';

    /**
     * Sandbox Base URL
     *
     * @var string
     */
    public const API_BASE_URL_SANDBOX = 'https://api-qa.dhlecommerce.com';

    /**
     * @var string
     */
    private const API_AUTHENTICATION_URL = '/efulfillment/v1/auth/accesstoken';

    /**
     * @var integer
     */
    private const STATUS_OK = 200;

    /**
     * @var string
     */
    private $client_id;

    /**
     * @var string
     */
    private $client_secret;

    /**
     * @var bool
     */
    private $sandbox;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var AuthenticationResponse
     */
    private $authenticationResponse;

    /**
     * DHL constructor.
     * @param string $client_id
     * @param string $client_secret
     * @param bool $sandbox
     * @param Client|null $client
     */
    public function __construct(string $client_id, string $client_secret, $sandbox = true, ?Client $client = null)
    {
        $this->client_id = $client_id;
        $this->client_secret = $client_secret;
        $this->sandbox = $sandbox;

        if($client === null) {
            $this->client = new Client();
        }
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->client_id;
    }

    /**
     * @param string $client_id
     */
    public function setClientId(string $client_id): void
    {
        $this->client_id = $client_id;
    }

    /**
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->client_secret;
    }

    /**
     * @param string $client_secret
     */
    public function setClientSecret(string $client_secret): void
    {
        $this->client_secret = $client_secret;
    }

    /**
     * @return bool
     */
    public function isSandbox(): bool
    {
        return $this->sandbox;
    }

    /**
     * @param bool $sandbox
     */
    public function setSandbox(bool $sandbox): void
    {
        $this->sandbox = $sandbox;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }

    /**
     * @return AuthenticationResponse
     * @throws AuthenticationException
     */
    public function authenticate(): AuthenticationResponse
    {
        $response = $this
            ->client
            ->get($this->getBaseUrl() . self::API_AUTHENTICATION_URL, [
                RequestOptions::HEADERS => $this->getAuthenticationHeaders()
            ])
        ;

        $data = json_decode($response->getBody()->getContents(), false);

        if( $response->getStatusCode() === self::STATUS_OK ) {
            return $this->authenticationResponse = new AuthenticationResponse(
                $data->access_token,
                $data->token_type,
                $data->expires_in,
                $data->scope
            );
        }

        throw new AuthenticationException(
            $data->error_description,
            $response->getStatusCode()
        );
    }

    /**
     * @param RequestInterface $request
     * @return array
     * @throws RequestFailedException
     * @throws GuzzleException
     */
    public function request(RequestInterface $request): array
    {
        $response = $this
            ->client
            ->request($request->getMethod(),$this->getBaseUrl() . $request->getEndpoint(), [
                    RequestOptions::HEADERS => $this->getAuthorizationHeaders(),
                    RequestOptions::JSON => $request->getBody()
                ]
            )
        ;

        $data = json_decode($response->getBody()->getContents(), false);

        if( $response->getStatusCode() === self::STATUS_OK ) {
            return $data;
        }

        throw new RequestFailedException(
            $data->error_description,
            $response->getStatusCode()
        );
    }

    /**
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->isSandbox()
            ? self::API_BASE_URL_SANDBOX
            : self::API_BASE_URL
        ;
    }

    /**
     * @return string
     */
    private function getBasicToken(): string
    {
        return base64_encode(
            sprintf(
                '%s:%s',
                $this->getClientId(),
                $this->getClientSecret()
            )
        );
    }

    /**
     * @return array
     */
    private function getAuthenticationHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Authorization' => 'Basic ' . $this->getBasicToken()
        ];
    }

    /**
     * @return string
     */
    private function getBearerToken(): string
    {
        return $this
            ->authenticationResponse
            ->getAccessToken()
        ;
    }

    /**
     * @return array
     */
    private function getAuthorizationHeaders(): array
    {
        return [
            'Authorization' => 'Bearer ' . $this->getBearerToken()
        ];
    }
}