<?php

namespace PHPJasper\Exception;

use Exception;

class ErrorCommandExecutable extends Exception
{
    /**
     * ErrorCommandExecutable constructor.
     * @param string $message
     * @param int $code
     * @param Exception|null $previous
     */
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        $message = 'Your report has an error and couldn \'t be processed!\.' . $message;
        parent::__construct($message, $code, $previous);
    }
}
