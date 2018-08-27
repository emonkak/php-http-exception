<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\HttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\HttpException
 */
class HttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new HttpException(404);
        $this->assertSame(404, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new HttpException(404);
        $this->assertSame([], $exception->getHeaders());
    }
}
