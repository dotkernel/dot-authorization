<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-authorization
 * @author: n3vrax
 * Date: 9/6/2016
 * Time: 7:49 PM
 */

declare(strict_types = 1);

namespace Dot\Authorization\Role;

/**
 * Interface RoleInterface
 * @package Dot\Authorization\Role
 */
interface RoleInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
