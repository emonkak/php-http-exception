<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\PreconditionFailedHttpException;

class PreconditionFailedHttpExceptionTest extends HttpExceptionTest
{
    protected function createException()
    {
        return new PreconditionFailedHttpException();
    }
}
