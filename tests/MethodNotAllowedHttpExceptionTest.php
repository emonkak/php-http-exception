<?php

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\MethodNotAllowedHttpException;

class MethodNotAllowedHttpExceptionTest extends HttpExceptionTest
{
    public function testHeadersDefault()
    {
        $exception = new MethodNotAllowedHttpException(array('GET', 'PUT'));
        $this->assertSame(array('Allow' => 'GET, PUT'), $exception->getHeaders());
    }

    /**
     * @dataProvider headerDataProvider
     */
    public function testHeadersSetter($headers)
    {
        $exception = new MethodNotAllowedHttpException(array('GET'));
        $exception->setHeaders($headers);
        $this->assertSame($headers, $exception->getHeaders());
    }
}
