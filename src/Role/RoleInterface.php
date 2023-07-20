<?php

/**
 * @see https://github.com/dotkernel/dot-authorization/ for the canonical source repository
 */

declare(strict_types=1);

namespace Dot\Authorization\Role;

/**
 * Interface RoleInterface
 */
interface RoleInterface
{
    public function getName(): string;
}
