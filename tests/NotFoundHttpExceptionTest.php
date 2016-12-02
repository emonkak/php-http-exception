<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\NotFoundHttpException;

class NotFoundHttpExceptionTest extends HttpExceptionTest
{
    protected function createException()
    {
        return new NotFoundHttpException();
    }
}
