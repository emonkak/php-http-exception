<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\AccessDeniedHttpException;

/**
 * @covers \Emonkak\HttpException\AccessDeniedHttpException
 */
class AccessDeniedHttpExceptionTest extends HttpExceptionTest
{
    public function testGetStatusCode()
    {
        $exception = new AccessDeniedHttpException();
        $this->assertSame(403, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new AccessDeniedHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
