<?php

declare(strict_types=1);

namespace Emonkak\HttpException;

class PreconditionFailedHttpException extends HttpException
{
    public function __construct(string $message = '', \Throwable $previous = null)
    {
        parent::__construct(412, [], $message, $previous);
    }
}
