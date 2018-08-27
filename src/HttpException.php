<?php

namespace Emonkak\HttpException;

class HttpException extends \RuntimeException implements HttpExceptionInterface
{
    /**
     * @var array
     */
    private $headers;

    public function __construct(int $statusCode, array $headers = [], string $message = '', \Throwable $previous = null)
    {
        parent::__construct($message, $statusCode, $previous);

        $this->headers = $headers;
    }

    public function getStatusCode(): int
    {
        return $this->code;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }
}
