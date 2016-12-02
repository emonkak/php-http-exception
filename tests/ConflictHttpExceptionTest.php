<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\ConflictHttpException;

class ConflictHttpExceptionTest extends HttpExceptionTest
{
    protected function createException()
    {
        return new ConflictHttpException();
    }
}
