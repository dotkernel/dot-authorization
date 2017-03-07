<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-authorization
 * @author: n3vrax
 * Date: 9/6/2016
 * Time: 7:49 PM
 */

declare(strict_types = 1);

namespace Dot\Authorization\Exception;

use Exception;

/**
 * Class ForbiddenException
 * @package Dot\Authorization\Exception
 */
class ForbiddenException extends \Exception implements ExceptionInterface
{
    public function __construct($message = "", $code = 403, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
