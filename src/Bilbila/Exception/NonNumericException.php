<?php

namespace Askual\Bilbila\Exception;

use \Exception;

/**
 * Invalid Input Exception.
 */
class NonNumericException extends Exception
{
    /**
     * Invalid Input Exception constructor.
     *
     * @param $message string
     */
    public function __construct(string $message = 'Invalid character was given')
    {
        parent::__construct($message);
    }
}
