<?php
/**
 * @copyright: DotKernel
 * @library: dotkernel/dot-authorization
 * @author: n3vrax
 * Date: 9/6/2016
 * Time: 7:49 PM
 */

namespace Dot\Authorization;

/**
 * Interface AuthorizationInterface
 * @package Dot\Authorization
 */
interface AuthorizationInterface
{
    /**
     * @param $permission
     * @param array $roles
     * @param null $context
     * @return bool
     */
    public function isGranted($permission, array $roles = [], $context = null);
}
