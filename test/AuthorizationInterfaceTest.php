<?php

declare(strict_types=1);

namespace DotTest\Authorization;

use Dot\Authorization\AuthorizationInterface;
use DotTest\Authorization\Fixture\Identity;
use DotTest\Authorization\Fixture\InMemoryAuthorization;
use DotTest\Authorization\Fixture\Role;
use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\TestCase;
use ReflectionMethod;

#[CoversNothing]
final class AuthorizationInterfaceTest extends TestCase
{
    private AuthorizationInterface $authorization;

    protected function setUp(): void
    {
        $this->authorization = new InMemoryAuthorization(['admin' => ['user.delete']]);
    }

    public function testRoleNameGrantsPermission(): void
    {
        $this->assertTrue($this->authorization->isGranted('user.delete', ['guest', 'admin']));
    }

    public function testRoleObjectGrantsPermission(): void
    {
        $this->assertTrue($this->authorization->isGranted('user.delete', [new Role('admin')]));
    }

    public function testIdentityRolesCanBeMixed(): void
    {
        $identity = new Identity(['guest', new Role('admin')]);

        $this->assertTrue($this->authorization->isGranted('user.delete', $identity->getRoles()));
    }

    public function testUnknownPermissionIsDenied(): void
    {
        $this->assertFalse($this->authorization->isGranted('user.create', ['admin']));
    }

    public function testNoRolesIsDenied(): void
    {
        $this->assertFalse($this->authorization->isGranted('user.delete'));
    }

    public function testSignatureIsStable(): void
    {
        $method     = new ReflectionMethod(AuthorizationInterface::class, 'isGranted');
        $parameters = $method->getParameters();

        $this->assertSame('bool', (string) $method->getReturnType());
        $this->assertCount(3, $parameters);
        $this->assertSame(['permission', 'roles', 'context'], [
            $parameters[0]->getName(),
            $parameters[1]->getName(),
            $parameters[2]->getName(),
        ]);
        $this->assertSame([], $parameters[1]->getDefaultValue());
        $this->assertNull($parameters[2]->getDefaultValue());
    }
}
