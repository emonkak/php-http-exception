<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\ServiceUnavailableHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Emonkak\HttpException\ServiceUnavailableHttpException
 */
class ServiceUnavailableHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new ServiceUnavailableHttpException();
        $this->assertSame(503, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new ServiceUnavailableHttpException(10);
        $this->assertSame(['Retry-After' => 10], $exception->getHeaders());
    }

    public function testGetHeadersDefault()
    {
        $exception = new ServiceUnavailableHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
