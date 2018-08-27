<?php

namespace Emonkak\HttpException;

class GoneHttpException extends HttpException
{
    public function __construct(string $message = '', \Throwable $previous = null)
    {
        parent::__construct(410, [], $message, $previous);
    }
}
