<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\BadRequestHttpException;

class BadRequestHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new BadRequestHttpException();
        $this->assertSame(400, $exception->getStatusCode());
    }

    protected function createException()
    {
        return new BadRequestHttpException();
    }
}
