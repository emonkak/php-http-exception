<?php

namespace Emonkak\HttpException;

class AccessDeniedHttpException extends HttpException
{
    public function __construct(string $message = '', \Throwable $previous = null)
    {
        parent::__construct(403, [], $message, $previous);
    }
}
