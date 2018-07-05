<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\RedirectHttpException;

class RedirectHttpExceptionTest extends HttpExceptionTest
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testInvalidStatusCode()
    {
        new RedirectHttpException('/path/to/redirect', 500);
    }

    public function testStatusCode()
    {
        $exception = new RedirectHttpException('/path/to/redirect', 301);
        $this->assertSame(301, $exception->getStatusCode());
    }

    public function testStatusCodeDefault()
    {
        $exception = new RedirectHttpException('/path/to/redirect');
        $this->assertSame(302, $exception->getStatusCode());
    }

    public function testHeaders()
    {
        $exception = new RedirectHttpException('/path/to/redirect');
        $this->assertSame(['Location' => '/path/to/redirect'], $exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter($headers)
    {
        $exception = new RedirectHttpException('/path/to/redirect');
        $exception->setHeaders($headers);
        $this->assertSame($headers, $exception->getHeaders());
    }
}
