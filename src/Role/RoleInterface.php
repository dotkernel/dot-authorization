<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-authorization
 * @author: n3vrax
 * Date: 9/6/2016
 * Time: 7:49 PM
 */

namespace DotKernel\DotAuthorization\Role;

/**
 * Interface RoleInterface
 * @package DotKernel\DotAuthorization\Role
 */
interface RoleInterface
{
    /**
     * @return string
     */
    public function getName();
}