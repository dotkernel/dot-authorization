<?php

declare(strict_types=1);

namespace DotTest\Authorization\Exception;

use Dot\Authorization\Exception\ExceptionInterface;
use Dot\Authorization\Exception\ForbiddenException;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ForbiddenExceptionTest extends TestCase
{
    protected ForbiddenException|MockObject $forbiddenExceptionMock;

    /**
     * @throws Exception
     */
    public function setUp(): void
    {
        $this->forbiddenExceptionMock = $this->createMock(ForbiddenException::class);
    }

    public function testCreate(): void
    {
        $this->assertInstanceOf(ForbiddenException::class, $this->forbiddenExceptionMock);
        $this->assertInstanceOf(ExceptionInterface::class, $this->forbiddenExceptionMock);
    }
}
