<?php

declare(strict_types=1);

namespace Dot\Authorization\Exception;

use Exception;

class ForbiddenException extends Exception implements ExceptionInterface
{
    public function __construct(string $message = "", int $code = 403, ?Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
