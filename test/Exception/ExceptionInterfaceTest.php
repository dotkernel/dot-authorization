<?php

declare(strict_types=1);

namespace DotTest\Authorization\Exception;

use Dot\Authorization\Exception\ExceptionInterface;
use Dot\Authorization\Exception\ForbiddenException;
use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\TestCase;

#[CoversNothing]
final class ExceptionInterfaceTest extends TestCase
{
    public function testMessageIsReadableThroughInterface(): void
    {
        $this->assertSame('Forbidden', $this->message(new ForbiddenException('Forbidden')));
    }

    private function message(ExceptionInterface $exception): string
    {
        return $exception->getMessage();
    }
}
