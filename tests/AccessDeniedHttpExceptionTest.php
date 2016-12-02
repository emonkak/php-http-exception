<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\AccessDeniedHttpException;

class AccessDeniedHttpExceptionTest extends HttpExceptionTest
{
    protected function createException()
    {
        return new AccessDeniedHttpException();
    }
}
