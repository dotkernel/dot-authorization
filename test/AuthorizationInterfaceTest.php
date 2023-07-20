<?php

declare(strict_types=1);

namespace DotTest;

use Dot\Authorization\AuthorizationInterface;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class AuthorizationInterfaceTest extends TestCase
{
    protected AuthorizationInterface|MockObject $mockAuthorizationInterface;

    /**
     * @throws Exception
     */
    public function setUp(): void
    {
        $this->mockAuthorizationInterface = $this->createMock(AuthorizationInterface::class);
        $this->mockAuthorizationInterface->method('isGranted')->willReturn(false);
    }

    public function testCreate(): void
    {
        $this->assertInstanceOf(AuthorizationInterface::class, $this->mockAuthorizationInterface);
    }

    public function testFunction(): void
    {
        $this->assertFalse($this->mockAuthorizationInterface->isGranted('no', ['admin'], null));
    }
}
