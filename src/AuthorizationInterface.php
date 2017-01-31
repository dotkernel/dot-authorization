<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-authorization
 * @author: n3vrax
 * Date: 9/6/2016
 * Time: 7:49 PM
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
    public function isGranted(string $permission, array $roles = [], mixed $context = null): bool;
}
