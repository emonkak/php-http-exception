<?php

namespace Emonkak\HttpException;

class RedirectHttpException extends HttpException
{
    public function __construct(string $location, int $statusCode = 302, string $message = '', \Throwable $previous = null)
    {
        if ($statusCode < 300 || $statusCode >= 400) {
            throw new \InvalidArgumentException('Invalid HTTP redirect status code: ' . $statusCode);
        }

        $headers = ['Location' => $location];

        parent::__construct($statusCode, $headers, $message, $previous);
    }
}
