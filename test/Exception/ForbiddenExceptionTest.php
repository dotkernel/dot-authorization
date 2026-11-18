<?php

declare(strict_types=1);

namespace DotTest\Authorization\Exception;

use Dot\Authorization\Exception\ForbiddenException;
use Error;
use LogicException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(ForbiddenException::class)]
final class ForbiddenExceptionTest extends TestCase
{
    public function testDefaults(): void
    {
        $exception = new ForbiddenException();

        $this->assertSame('', $exception->getMessage());
        $this->assertSame(403, $exception->getCode());
        $this->assertNull($exception->getPrevious());
    }

    public function testAcceptsExceptionAsPrevious(): void
    {
        $previous  = new LogicException('inner');
        $exception = new ForbiddenException('Forbidden', 403, $previous);

        $this->assertSame('Forbidden', $exception->getMessage());
        $this->assertSame($previous, $exception->getPrevious());
    }

    public function testAcceptsErrorAsPrevious(): void
    {
        $previous = new Error('inner');

        $this->assertSame($previous, (new ForbiddenException('Forbidden', 403, $previous))->getPrevious());
    }
}
