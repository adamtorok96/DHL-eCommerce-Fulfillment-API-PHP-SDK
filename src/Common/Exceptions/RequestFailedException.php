<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Common\Exceptions;


use Exception;

class RequestFailedException extends Exception
{
    /**
     * RequestFailedException constructor.
     * @param string $message
     * @param int $code
     */
    public function __construct($message = "", $code = 0)
    {
        parent::__construct($message, $code);
    }
}