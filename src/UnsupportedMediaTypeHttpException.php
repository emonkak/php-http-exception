<?php

namespace Emonkak\HttpException;

class UnsupportedMediaTypeHttpException extends HttpException
{
    public function __construct(string $message = '', \Throwable $previous = null)
    {
        parent::__construct(415, [], $message, $previous);
    }
}
