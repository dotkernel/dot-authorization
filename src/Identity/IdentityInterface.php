<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-authorization
 * @author: n3vrax
 * Date: 9/6/2016
 * Time: 7:49 PM
 */

namespace DotKernel\DotAuthorization\Identity;

use DotKernel\DotAuthorization\Role\RoleInterface;

/**
 * Interface IdentityInterface
 * @package DotKernel\DotAuthorization\Identity
 */
interface IdentityInterface
{
    /**
     * @return string[]|RoleInterface[]
     */
    public function getRoles();
}