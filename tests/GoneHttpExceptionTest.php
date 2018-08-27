<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\GoneHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\GoneHttpException
 */
class GoneHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new GoneHttpException();
        $this->assertSame(410, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new GoneHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
