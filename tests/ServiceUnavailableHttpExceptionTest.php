<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\ServiceUnavailableHttpException;

class ServiceUnavailableHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new ServiceUnavailableHttpException();
        $this->assertSame(503, $exception->getStatusCode());
    }

    public function testHeadersDefaultRetryAfter()
    {
        $exception = new ServiceUnavailableHttpException(10);
        $this->assertSame(['Retry-After' => 10], $exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter($headers)
    {
        $exception = new ServiceUnavailableHttpException(10);
        $exception->setHeaders($headers);
        $this->assertSame($headers, $exception->getHeaders());
    }

    protected function createException()
    {
        return new ServiceUnavailableHttpException();
    }
}
