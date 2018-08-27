<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\NotFoundHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\NotFoundHttpException
 */
class NotFoundHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new NotFoundHttpException();
        $this->assertSame(404, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new NotFoundHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
