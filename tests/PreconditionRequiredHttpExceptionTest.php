<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\PreconditionRequiredHttpException;

class PreconditionRequiredHttpExceptionTest extends HttpExceptionTest
{
    protected function createException()
    {
        return new PreconditionRequiredHttpException();
    }
}
