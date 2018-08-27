<?php

declare(strict_types=1);

namespace Emonkak\HttpException;

class MethodNotAllowedHttpException extends HttpException
{
    public function __construct(array $allow, string $message = '', \Throwable $previous = null)
    {
        $headers = ['Allow' => strtoupper(implode(', ', $allow))];

        parent::__construct(405, $headers, $message, $previous);
    }
}
