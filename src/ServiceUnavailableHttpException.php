<?php

declare(strict_types=1);

namespace Emonkak\HttpException;

class ServiceUnavailableHttpException extends HttpException
{
    public function __construct(int $retryAfter = null, string $message = '', \Throwable $previous = null)
    {
        $headers = [];

        if ($retryAfter !== null) {
            $headers['Retry-After'] = $retryAfter;
        }

        parent::__construct(503, $headers, $message, $previous);
    }
}
