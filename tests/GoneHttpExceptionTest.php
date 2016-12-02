<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\GoneHttpException;

class GoneHttpExceptionTest extends HttpExceptionTest
{
    protected function createException()
    {
        return new GoneHttpException();
    }
}
