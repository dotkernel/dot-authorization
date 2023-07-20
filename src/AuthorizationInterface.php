<?php

declare(strict_types=1);

namespace Dot\Authorization;

interface AuthorizationInterface
{
    /**
     * @param array $roles
     */
    public function isGranted(string $permission, array $roles = [], mixed $context = null): bool;
}
