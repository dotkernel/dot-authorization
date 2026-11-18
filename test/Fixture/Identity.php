<?php

declare(strict_types=1);

namespace DotTest\Authorization\Fixture;

use Dot\Authorization\Identity\IdentityInterface;
use Dot\Authorization\Role\RoleInterface;

final class Identity implements IdentityInterface
{
    /**
     * @param array<string|RoleInterface> $roles
     */
    public function __construct(private readonly array $roles)
    {
    }

    public function getRoles(): array
    {
        return $this->roles;
    }
}
