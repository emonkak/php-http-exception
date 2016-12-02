<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\LengthRequiredHttpException;

class LengthRequiredHttpExceptionTest extends HttpExceptionTest
{
    protected function createException()
    {
        return new LengthRequiredHttpException();
    }
}
