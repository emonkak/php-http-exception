<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\UnsupportedMediaTypeHttpException;

class UnsupportedMediaTypeHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new UnsupportedMediaTypeHttpException();
        $this->assertSame(415, $exception->getStatusCode());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter($headers)
    {
        $exception = new UnsupportedMediaTypeHttpException(10);
        $exception->setHeaders($headers);
        $this->assertSame($headers, $exception->getHeaders());
    }

    protected function createException($headers = [])
    {
        return new UnsupportedMediaTypeHttpException();
    }
}
