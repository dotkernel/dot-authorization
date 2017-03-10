<?php
/**
 * @see https://github.com/dotkernel/dot-authorization/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/dot-authorization/blob/master/LICENSE.md MIT License
 */

declare(strict_types = 1);

namespace Dot\Authorization;

/**
 * Interface AuthorizationInterface
 * @package Dot\Authorization
 */
interface AuthorizationInterface
{
    /**
     * @param string $permission
     * @param array $roles
     * @param mixed|null $context
     * @return bool
     */
    public function isGranted(string $permission, array $roles = [], $context = null): bool;
}
