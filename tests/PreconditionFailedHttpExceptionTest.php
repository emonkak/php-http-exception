<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\PreconditionFailedHttpException;

class PreconditionFailedHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new PreconditionFailedHttpException();
        $this->assertSame(412, $exception->getStatusCode());
    }

    protected function createException()
    {
        return new PreconditionFailedHttpException();
    }
}
