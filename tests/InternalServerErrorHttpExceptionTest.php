<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\InternalServerErrorHttpException;

class InternalServerErrorHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new InternalServerErrorHttpException();
        $this->assertSame(500, $exception->getStatusCode());
    }

    protected function createException()
    {
        return new InternalServerErrorHttpException();
    }
}
