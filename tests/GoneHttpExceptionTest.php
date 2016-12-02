<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\GoneHttpException;

class GoneHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new GoneHttpException();
        $this->assertSame(410, $exception->getStatusCode());
    }

    protected function createException()
    {
        return new GoneHttpException();
    }
}
