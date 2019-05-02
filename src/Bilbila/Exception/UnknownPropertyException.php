<?php

namespace Askual\Bilbila\Exception;

use \Exception;

/**
 * Invalid Input Exception.
 */
class UnknownPropertyException extends Exception
{
    /**
     * Invalid Input Exception constructor.
     *
     * @param $message string
     */
    public function __construct(string $message = null)
    {
    	if ($message!= null) {
    		$message = 'Invalid property **'.$message.'** was given';
    	}else{
    		$message = 'Invalid property was given';
    	}
        parent::__construct($message);
    }
}
