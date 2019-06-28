<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Label\V3\Requests;


use AdamTorok96\DHL\Common\Requests\RequestInterface;
use AdamTorok96\DHL\Label\V3\Reqs\RequestFormatReq;

class CreateLabel implements RequestInterface
{
    /**
     * @var string
     */
    private $format;
    /**
     * @var string
     */
    private $labelSize;
    /**
     * @var RequestFormatReq
     */
    private $requestFormatReq;
    /**
     * @var string|null
     */
    private $lang;

    /**
     * CreateLabel constructor.
     * @param string $format
     * @param string $labelSize
     * @param RequestFormatReq $requestFormatReq
     * @param string|null $lang
     */
    public function __construct(
        string $format,
        string $labelSize,
        RequestFormatReq $requestFormatReq,
        ?string $lang = null)
    {
        $this->format = $format;
        $this->labelSize = $labelSize;
        $this->requestFormatReq = $requestFormatReq;
        $this->lang = $lang;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return RequestInterface::METHOD_POST;
    }

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return sprintf(
            '/shipping/v3/label/?%s',
            http_build_query($this->getQueries())
        );
    }

    /**
     * @return array|null
     */
    public function getBody(): ?array
    {
        return $this->requestFormatReq->getBody();
    }

    /**
     * @return array
     */
    private function getQueries(): array
    {
        return [
            'format' => $this->format,
            'labelSize' => $this->labelSize,
            'lang' => $this->lang
        ];
    }
}