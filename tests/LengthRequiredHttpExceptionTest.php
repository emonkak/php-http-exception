<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\LengthRequiredHttpException;

class LengthRequiredHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new LengthRequiredHttpException();
        $this->assertSame(411, $exception->getStatusCode());
    }

    protected function createException()
    {
        return new LengthRequiredHttpException();
    }
}
