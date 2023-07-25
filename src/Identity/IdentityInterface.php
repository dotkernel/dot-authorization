<?php

declare(strict_types=1);

namespace Dot\Authorization\Identity;

use Dot\Authorization\Role\RoleInterface;

interface IdentityInterface
{
    /**
     * @return string[]|RoleInterface[]
     */
    public function getRoles(): array;
}
