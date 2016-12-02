<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\AccessDeniedHttpException;

class AccessDeniedHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new AccessDeniedHttpException();
        $this->assertSame(403, $exception->getStatusCode());
    }

    protected function createException()
    {
        return new AccessDeniedHttpException();
    }
}
