<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\NotAcceptableHttpException;

class NotAcceptableHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new NotAcceptableHttpException();
        $this->assertSame(406, $exception->getStatusCode());
    }

    protected function createException()
    {
        return new NotAcceptableHttpException();
    }
}
