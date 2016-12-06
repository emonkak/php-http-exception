<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Emonkak\HttpException;

/**
 * RedirectHttpException.
 *
 * @author Shota Nozaki <emonkak@gmail.com>
 */
class RedirectHttpException extends HttpException
{
    /**
     * Constructor.
     *
     * @param string     $location   The redirect URL
     * @param int        $statusCode The HTTP status code, 3XX
     * @param string     $message    The internal exception message
     * @param \Exception $previous   The previous exception
     * @param int        $code       The internal exception code
     */
    public function __construct($location, $statusCode = 302, $message = null, \Exception $previous = null, $code = 0)
    {
        if ($statusCode < 300 || $statusCode >= 400) {
            throw new \InvalidArgumentException('Invalid HTTP redirect status code: ' . $statusCode);
        }

        $headers = array('Location' => $location);

        parent::__construct($statusCode, $message, $previous, $headers, $code);
    }
}
