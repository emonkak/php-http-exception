<?php

namespace Emonkak\HttpException;

class UnauthorizedHttpException extends HttpException
{
    public function __construct(string $challenge = null, string $message = '', \Throwable $previous = null)
    {
        $headers = [];

        if ($challenge !== null) {
            $headers['WWW-Authenticate'] = $challenge;
        }

        parent::__construct(401, $headers, $message, $previous);
    }
}
