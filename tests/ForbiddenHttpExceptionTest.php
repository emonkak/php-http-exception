<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\ForbiddenHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\ForbiddenHttpException
 */
class ForbiddenHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new ForbiddenHttpException();
        $this->assertSame(403, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new ForbiddenHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
