<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\NotAcceptableHttpException;

class NotAcceptableHttpExceptionTest extends HttpExceptionTest
{
    protected function createException()
    {
        return new NotAcceptableHttpException();
    }
}
