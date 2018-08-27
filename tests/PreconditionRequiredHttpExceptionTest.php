<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\PreconditionRequiredHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\PreconditionRequiredHttpException
 */
class PreconditionRequiredHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new PreconditionRequiredHttpException();
        $this->assertSame(428, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new PreconditionRequiredHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
