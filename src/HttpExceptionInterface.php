<?php

declare(strict_types=1);

namespace Emonkak\HttpException;

interface HttpExceptionInterface extends \Throwable
{
    /**
     * Returns the status code.
     *
     * @return int An HTTP response status code
     */
    public function getStatusCode(): int;

    /**
     * Returns response headers.
     *
     * @return array<string,string|string[]> Response headers
     */
    public function getHeaders(): array;
}
