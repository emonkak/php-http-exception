<?php

declare(strict_types=1);

namespace Emonkak\HttpException;

class PreconditionRequiredHttpException extends HttpException
{
    public function __construct(string $message = '', \Throwable $previous = null)
    {
        parent::__construct(428, [], $message, $previous);
    }
}
