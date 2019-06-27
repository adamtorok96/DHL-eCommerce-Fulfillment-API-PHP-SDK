<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment;


class AuthenticationResponse
{
    /**
     * @var string
     */
    public $access_token;

    /**
     * @var string
     */
    public $token_type;

    /**
     * @var integer
     */
    public $expires_in;

    /**
     * @var string
     */
    public $scope;

    /**
     * AuthenticationResponse constructor.
     * @param string $access_token
     * @param string $token_type
     * @param int $expires_in
     * @param string $scope
     */
    public function __construct(string $access_token, string $token_type, int $expires_in, string $scope)
    {
        $this->access_token = $access_token;
        $this->token_type = $token_type;
        $this->expires_in = $expires_in;
        $this->scope = $scope;
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->access_token;
    }

    /**
     * @param string $access_token
     */
    public function setAccessToken(string $access_token): void
    {
        $this->access_token = $access_token;
    }

    /**
     * @return string
     */
    public function getTokenType(): string
    {
        return $this->token_type;
    }

    /**
     * @param string $token_type
     */
    public function setTokenType(string $token_type): void
    {
        $this->token_type = $token_type;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expires_in;
    }

    /**
     * @param int $expires_in
     */
    public function setExpiresIn(int $expires_in): void
    {
        $this->expires_in = $expires_in;
    }

    /**
     * @return string
     */
    public function getScope(): string
    {
        return $this->scope;
    }

    /**
     * @param string $scope
     */
    public function setScope(string $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @param string $scope
     * @return bool
     */
    public function inScope(string $scope): bool
    {
        $scopes = explode(' ', $this->scope);

        return in_array($scope, $scopes, true);
    }
}