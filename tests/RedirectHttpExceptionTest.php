<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\RedirectHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\RedirectHttpException
 */
class RedirectHttpExceptionTest extends TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testGetStatusCodeThrowsException()
    {
        new RedirectHttpException('/path/to/redirect', 500);
    }

    public function testGetStatusCode()
    {
        $exception = new RedirectHttpException('/path/to/redirect', 301);
        $this->assertSame(301, $exception->getStatusCode());
    }

    public function testGetStatusCodeDefault()
    {
        $exception = new RedirectHttpException('/path/to/redirect');
        $this->assertSame(302, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new RedirectHttpException('/path/to/redirect');
        $this->assertSame(['Location' => '/path/to/redirect'], $exception->getHeaders());
    }
}
