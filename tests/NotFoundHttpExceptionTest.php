<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\NotFoundHttpException;

class NotFoundHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new NotFoundHttpException();
        $this->assertSame(404, $exception->getStatusCode());
    }

    protected function createException()
    {
        return new NotFoundHttpException();
    }
}
