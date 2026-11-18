<?php

declare(strict_types=1);

namespace DotTest\Authorization\Fixture;

use Dot\Authorization\AuthorizationInterface;
use Dot\Authorization\Role\RoleInterface;

use function in_array;

final class InMemoryAuthorization implements AuthorizationInterface
{
    /**
     * @param array<string, list<string>> $permissions role name => granted permissions
     */
    public function __construct(private readonly array $permissions)
    {
    }

    public function isGranted(string $permission, array $roles = [], mixed $context = null): bool
    {
        foreach ($roles as $role) {
            $name = $role instanceof RoleInterface ? $role->getName() : $role;
            if (in_array($permission, $this->permissions[$name] ?? [], true)) {
                return true;
            }
        }

        return false;
    }
}
