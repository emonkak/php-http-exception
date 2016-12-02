<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\TooManyRequestsHttpException;

class TooManyRequestsHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new TooManyRequestsHttpException();
        $this->assertSame(429, $exception->getStatusCode());
    }

    public function testHeadersDefaultRertyAfter()
    {
        $exception = new TooManyRequestsHttpException(10);
        $this->assertSame(array('Retry-After' => 10), $exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter($headers)
    {
        $exception = new TooManyRequestsHttpException(10);
        $exception->setHeaders($headers);
        $this->assertSame($headers, $exception->getHeaders());
    }

    protected function createException()
    {
        return new TooManyRequestsHttpException();
    }
}
