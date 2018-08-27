<?php

namespace Emonkak\HttpException;

class ConflictHttpException extends HttpException
{
    public function __construct(string $message = '', \Throwable $previous = null)
    {
        parent::__construct(409, [], $message, $previous);
    }
}
