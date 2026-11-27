<?php

declare(strict_types=1);

namespace DotTest\Authorization\Exception;

use Dot\Authorization\Exception\ExceptionInterface;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\Stub;
use PHPUnit\Framework\TestCase;

class ExceptionInterfaceTest extends TestCase
{
    protected ExceptionInterface|Stub $exceptionInterfaceMock;

    /**
     * @throws Exception
     */
    public function setUp(): void
    {
        $this->exceptionInterfaceMock = $this->createStub(ExceptionInterface::class);
    }

    public function testCreate(): void
    {
        $this->assertInstanceOf(ExceptionInterface::class, $this->exceptionInterfaceMock);
    }
}
