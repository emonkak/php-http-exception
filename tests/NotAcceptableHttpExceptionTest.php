<?php

declare(strict_types=1);

namespace Emonkak\HttpException\Tests;

use Emonkak\HttpException\NotAcceptableHttpException;
use PHPUnit\Framework\TestCase;

/**
 * @covers Emonkak\HttpException\NotAcceptableHttpException
 */
class NotAcceptableHttpExceptionTest extends TestCase
{
    public function testGetStatusCode()
    {
        $exception = new NotAcceptableHttpException();
        $this->assertSame(406, $exception->getStatusCode());
    }

    public function testGetHeaders()
    {
        $exception = new NotAcceptableHttpException();
        $this->assertSame([], $exception->getHeaders());
    }
}
