<?php

declare(strict_types=1);

namespace Emonkak\HttpException;

class UnprocessableEntityHttpException extends HttpException
{
    public function __construct(string $message = '', \Throwable $previous = null)
    {
        parent::__construct(422, [], $message, $previous);
    }
}
