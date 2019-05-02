<?php

namespace Askual\Bilbila\Exception;

use \Exception;

/**
 * Invalid Input Exception.
 */
class UnknownNumberException extends Exception
{
    /**
     * Invalid Input Exception constructor.
     *
     * @param $message string
     */
    public function __construct(string $message = 'Unknown number was given')
    {
        parent::__construct($message);
    }
}
