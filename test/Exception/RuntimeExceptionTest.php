<?php

declare(strict_types=1);

namespace DotTest\Authorization\Exception;

use Dot\Authorization\Exception\ExceptionInterface;
use Dot\Authorization\Exception\RuntimeException;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(RuntimeException::class)]
final class RuntimeExceptionTest extends TestCase
{
    public function testIsCaughtAsPackageException(): void
    {
        $this->expectException(ExceptionInterface::class);
        $this->expectExceptionMessage('test');

        throw new RuntimeException('test');
    }
}
