<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\InternalServerErrorHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Emonkak\HttpException\InternalServerErrorHttpException
 */
class InternalServerErrorHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new InternalServerErrorHttpException();
        $this->assertSame(500, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new InternalServerErrorHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
