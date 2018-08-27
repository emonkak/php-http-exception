<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\TooManyRequestsHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\TooManyRequestsHttpException
 */
class TooManyRequestsHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new TooManyRequestsHttpException();
        $this->assertSame(429, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new TooManyRequestsHttpException(10);
        $this->assertSame(['Retry-After' => 10], $exception->getHeaders());
    }

    public function testGetHeadersDefault()
    {
        $exception = new TooManyRequestsHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
