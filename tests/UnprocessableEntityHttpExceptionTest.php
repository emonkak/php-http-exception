<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\UnprocessableEntityHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\UnprocessableEntityHttpException
 */
class UnprocessableEntityHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new UnprocessableEntityHttpException();
        $this->assertSame(422, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new UnprocessableEntityHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
