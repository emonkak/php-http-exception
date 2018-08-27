<?php

namespace Emonkak\HttpException;

class InternalServerErrorHttpException extends HttpException
{
    public function __construct(string $message = '', \Throwable $previous = null)
    {
        parent::__construct(500, [], $message, $previous);
    }
}
