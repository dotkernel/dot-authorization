<?php
/**
 * @see https://github.com/dotkernel/dot-authorization/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/dot-authorization/blob/master/LICENSE.md MIT License
 */

declare(strict_types = 1);

namespace Dot\Authorization\Identity;

use Dot\Authorization\Role\RoleInterface;

/**
 * Interface IdentityInterface
 * @package Dot\Authorization\Identity
 */
interface IdentityInterface
{
    /**
     * @return string[]|RoleInterface[]
     */
    public function getRoles(): array;
}
