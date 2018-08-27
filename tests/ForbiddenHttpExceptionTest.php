<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\ForbiddenHttpException;

class ForbiddenHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new ForbiddenHttpException();
        $this->assertSame(403, $exception->getStatusCode());
    }

    protected function createException()
    {
        return new ForbiddenHttpException();
    }
}
