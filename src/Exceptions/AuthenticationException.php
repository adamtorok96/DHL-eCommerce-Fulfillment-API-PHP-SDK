<?php
declare(strict_types=1);


namespace AdamTorok96\DHL\Fulfillment\Exceptions;


use Exception;

class AuthenticationException extends Exception
{
    /**
     * AuthenticationException constructor.
     * @param $message
     * @param $code
     */
    public function __construct($message, $code)
    {
        parent::__construct($message, $code);
    }
}