<?php

declare(strict_types=1);

namespace DotTest\Role;

use Dot\Authorization\Role\RoleInterface;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class RoleInterfaceTest extends TestCase
{
    protected RoleInterface|MockObject $roleInterfaceMock;

    /**
     * @throws Exception
     */
    public function setUp(): void
    {
        $this->roleInterfaceMock = $this->createMock(RoleInterface::class);
        $this->roleInterfaceMock->method('getName')->willReturn('Test');
    }

    public function testCreate(): void
    {
        $this->assertInstanceOf(RoleInterface::class, $this->roleInterfaceMock);
    }

    public function testFunctions(): void
    {
        $name = $this->roleInterfaceMock->getName();
        $this->assertSame('Test', $name);
    }
}
