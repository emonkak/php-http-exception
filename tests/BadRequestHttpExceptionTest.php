<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\BadRequestHttpException;

class BadRequestHttpExceptionTest extends HttpExceptionTest
{
    protected function createException()
    {
        return new BadRequestHttpException();
    }
}
