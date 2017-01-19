<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-authorization
 * @author: n3vrax
 * Date: 9/6/2016
 * Time: 7:49 PM
 */

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
    public function getRoles();
}
