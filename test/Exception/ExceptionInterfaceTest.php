<?php

declare(strict_types=1);

namespace DotTest\Authorization\Exception;

use Dot\Authorization\Exception\ExceptionInterface;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ExceptionInterfaceTest extends TestCase
{
    protected ExceptionInterface|MockObject $exceptionInterfaceMock;

    /**
     * @throws Exception
     */
    public function setUp(): void
    {
        $this->exceptionInterfaceMock = $this->createMock(ExceptionInterface::class);
    }

    public function testCreate(): void
    {
        $this->assertInstanceOf(ExceptionInterface::class, $this->exceptionInterfaceMock);
    }
}
