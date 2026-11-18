<?php

declare(strict_types=1);

namespace Dot\Authorization;

use Dot\Authorization\Role\RoleInterface;

interface AuthorizationInterface
{
    /**
     * @param array<string|RoleInterface> $roles
     */
    public function isGranted(string $permission, array $roles = [], mixed $context = null): bool;
}
