<?php

namespace Emonkak\HttpException;

class BadRequestHttpException extends HttpException
{
    public function __construct(string $message = '', \Exception $previous = null)
    {
        parent::__construct(400, [], $message, $previous);
    }
}
