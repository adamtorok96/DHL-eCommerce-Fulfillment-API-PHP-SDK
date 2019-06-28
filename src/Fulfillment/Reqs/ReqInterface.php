<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Reqs;


interface ReqInterface
{
    /**
     * @return array
     */
    public function getBody(): array;
}