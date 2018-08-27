<?php

declare(strict_types=1);

namespace Emonkak\HttpException;

class LengthRequiredHttpException extends HttpException
{
    public function __construct(string $message = '', \Throwable $previous = null)
    {
        parent::__construct(411, [], $message, $previous);
    }
}
