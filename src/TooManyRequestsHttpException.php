<?php

declare(strict_types=1);

namespace Emonkak\HttpException;

class TooManyRequestsHttpException extends HttpException
{
    public function __construct(int $retryAfter = null, string $message = '', \Throwable $previous = null)
    {
        $headers = [];

        if ($retryAfter !== null) {
            $headers['Retry-After'] = $retryAfter;
        }

        parent::__construct(429, $headers, $message, $previous);
    }
}
