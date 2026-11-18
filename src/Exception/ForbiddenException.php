<?php

declare(strict_types=1);

namespace Dot\Authorization\Exception;

use Exception;
use Throwable;

class ForbiddenException extends Exception implements ExceptionInterface
{
    public function __construct(string $message = '', int $code = 403, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
