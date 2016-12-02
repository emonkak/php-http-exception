<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\ConflictHttpException;

class ConflictHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new ConflictHttpException();
        $this->assertSame(409, $exception->getStatusCode());
    }

    protected function createException()
    {
        return new ConflictHttpException();
    }
}
