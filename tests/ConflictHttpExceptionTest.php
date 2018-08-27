<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\ConflictHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\ConflictHttpException
 */
class ConflictHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new ConflictHttpException();
        $this->assertSame(409, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new ConflictHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
