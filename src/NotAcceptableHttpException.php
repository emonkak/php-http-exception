<?php

declare(strict_types=1);

namespace Emonkak\HttpException;

class NotAcceptableHttpException extends HttpException
{
    public function __construct(string $message = '', \Throwable $previous = null)
    {
        parent::__construct(406, [], $message, $previous);
    }
}
