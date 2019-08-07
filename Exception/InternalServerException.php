<?php

namespace Ipaas\Exception;

use Exception;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class InternalServerException extends Exception
{
    public function __construct(
        string $message = 'An internal server error has occurred',
        int $code = Response::HTTP_INTERNAL_SERVER_ERROR,
        Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function render()
    {
        return renderException($this);
    }
}
