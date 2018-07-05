<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\MethodNotAllowedHttpException;

class MethodNotAllowedHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new MethodNotAllowedHttpException([]);
        $this->assertSame(405, $exception->getStatusCode());
    }

    public function testHeadersDefault()
    {
        $exception = new MethodNotAllowedHttpException(['GET', 'PUT']);
        $this->assertSame(['Allow' => 'GET, PUT'], $exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter($headers)
    {
        $exception = new MethodNotAllowedHttpException(['GET']);
        $exception->setHeaders($headers);
        $this->assertSame($headers, $exception->getHeaders());
    }
}
