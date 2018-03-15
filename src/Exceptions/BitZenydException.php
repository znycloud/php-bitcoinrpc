<?php

namespace znycloud\BitZeny\Exceptions;

use RuntimeException;

class BitZenydException extends RuntimeException
{
    /**
     * Construct new bitzenyd exception.
     *
     * @param object $error
     *
     * @return void
     */
    public function __construct($error)
    {
        parent::__construct($error['message'], $error['code']);
    }
}
