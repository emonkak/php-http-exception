<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\MethodNotAllowedHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Emonkak\HttpException\MethodNotAllowedHttpException
 */
class MethodNotAllowedHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new MethodNotAllowedHttpException([]);
        $this->assertSame(405, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new MethodNotAllowedHttpException(['GET', 'PUT']);
        $this->assertSame(['Allow' => 'GET, PUT'], $exception->getHeaders());
    }
}
