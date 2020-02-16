<?php

declare(strict_types=1);

namespace Emonkak\HttpException;

interface HttpExceptionInterface extends \Throwable
{
    /**
     * Returns the status code.
     *
     * @return An HTTP response status code
     */
    public function getStatusCode(): int;

    /**
     * Returns response headers.
     *
     * @return Response headers
     */
    public function getHeaders(): array;
}
