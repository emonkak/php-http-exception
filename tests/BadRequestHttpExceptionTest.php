<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\BadRequestHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Emonkak\HttpException\BadRequestHttpException
 */
class BadRequestHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new BadRequestHttpException();
        $this->assertSame(400, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new BadRequestHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
