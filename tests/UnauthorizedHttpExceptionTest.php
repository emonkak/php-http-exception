<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\UnauthorizedHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Emonkak\HttpException\UnauthorizedHttpException
 */
class UnauthorizedHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new UnauthorizedHttpException();
        $this->assertSame(401, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new UnauthorizedHttpException('Basic');
        $this->assertSame(['WWW-Authenticate' => 'Basic'], $exception->getHeaders());
    }
}
