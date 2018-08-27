<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\UnsupportedMediaTypeHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\UnsupportedMediaTypeHttpException
 */
class UnsupportedMediaTypeHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new UnsupportedMediaTypeHttpException();
        $this->assertSame(415, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new UnsupportedMediaTypeHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
