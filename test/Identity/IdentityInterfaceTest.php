<?php

declare(strict_types=1);

namespace DotTest\Authorization\Identity;

use Dot\Authorization\Identity\IdentityInterface;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\Stub;
use PHPUnit\Framework\TestCase;

class IdentityInterfaceTest extends TestCase
{
    protected IdentityInterface|Stub $identityInterfaceMock;

    /**
     * @throws Exception
     */
    public function setUp(): void
    {
        $this->identityInterfaceMock = $this->createStub(IdentityInterface::class);
        $this->identityInterfaceMock->method('getRoles')->willReturn(['admin']);
    }

    public function testCreate(): void
    {
        $this->assertInstanceOf(IdentityInterface::class, $this->identityInterfaceMock);
    }

    public function testFunctions(): void
    {
        $role = $this->identityInterfaceMock->getRoles();
        $this->assertIsArray($role);
        $this->assertSame(['admin'], $role);
    }
}
