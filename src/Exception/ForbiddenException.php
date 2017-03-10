<?php
/**
 * @see https://github.com/dotkernel/dot-authorization/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/dot-authorization/blob/master/LICENSE.md MIT License
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
