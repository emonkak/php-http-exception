<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\PreconditionFailedHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Emonkak\HttpException\PreconditionFailedHttpException
 */
class PreconditionFailedHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new PreconditionFailedHttpException();
        $this->assertSame(412, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new PreconditionFailedHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
