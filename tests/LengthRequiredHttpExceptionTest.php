<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\LengthRequiredHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\LengthRequiredHttpException
 */
class LengthRequiredHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new LengthRequiredHttpException();
        $this->assertSame(411, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new LengthRequiredHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
