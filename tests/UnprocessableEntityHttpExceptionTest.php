<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\UnprocessableEntityHttpException;

class UnprocessableEntityHttpExceptionTest extends HttpExceptionTest
{
    public function testStatusCode()
    {
        $exception = new UnprocessableEntityHttpException();
        $this->assertSame(422, $exception->getStatusCode());
    }

    /**
     * Test that setting the headers using the setter function
     * is working as expected.
     *
     * @param array $headers The headers to set
     *
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter($headers)
    {
        $exception = new UnprocessableEntityHttpException(10);
        $exception->setHeaders($headers);
        $this->assertSame($headers, $exception->getHeaders());
    }

    protected function createException()
    {
        return new UnprocessableEntityHttpException();
    }
}
