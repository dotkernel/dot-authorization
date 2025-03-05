<?php

declare(strict_types=1);

namespace DotTest\Authorization\Exception;

use Dot\Authorization\Exception\ExceptionInterface;
use Dot\Authorization\Exception\RuntimeException;
use PHPUnit\Framework\TestCase;

class RuntimeExceptionTest extends TestCase
{
    public function testInstances(): void
    {
        $exception = new RuntimeException('test');
        $this->assertSame(RuntimeException::class, $exception::class);
        $this->assertContainsOnlyInstancesOf(ExceptionInterface::class, [$exception]);
    }
}
