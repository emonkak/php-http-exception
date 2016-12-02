<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\PreconditionRequiredHttpException;

class PreconditionRequiredHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new PreconditionRequiredHttpException();
        $this->assertSame(428, $exception->getStatusCode());
    }

    protected function createException()
    {
        return new PreconditionRequiredHttpException();
    }
}
