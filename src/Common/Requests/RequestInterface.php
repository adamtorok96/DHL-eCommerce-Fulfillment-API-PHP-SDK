<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Common\Requests;


interface RequestInterface
{
    /**
     * @var string
     */
    public const METHOD_GET = 'GET';

    /**
     * @var string
     */
    public const METHOD_POST = 'POST';

    /**
     * @var string
     */
    public const METHOD_PUT = 'PUT';

    /**
     * @var string
     */
    public const METHOD_DELETE = 'DELETE';

    /**
     * @return string
     */
    public function getMethod(): string;

    /**
     * @return string
     */
    public function getEndpoint(): string;

    /**
     * @return array|null
     */
    public function getBody(): ?array;
}