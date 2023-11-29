# dot-authorization

Authorization base package defining interfaces for authorization services to be used with DotKernel applications.

![OSS Lifecycle](https://img.shields.io/osslifecycle/dotkernel/dot-authorization)
![PHP from Packagist (specify version)](https://img.shields.io/packagist/php-v/dotkernel/dot-authorization/3.4.1)

[![GitHub issues](https://img.shields.io/github/issues/dotkernel/dot-authorization)](https://github.com/dotkernel/dot-authorization/issues)
[![GitHub forks](https://img.shields.io/github/forks/dotkernel/dot-authorization)](https://github.com/dotkernel/dot-authorization/network)
[![GitHub stars](https://img.shields.io/github/stars/dotkernel/dot-authorization)](https://github.com/dotkernel/dot-authorization/stargazers)
[![GitHub license](https://img.shields.io/github/license/dotkernel/dot-authorization)](https://github.com/dotkernel/dot-authorization/blob/3.0/LICENSE.md)

[![Build Static](https://github.com/dotkernel/dot-authorization/actions/workflows/static-analysis.yml/badge.svg?branch=3.0)](https://github.com/dotkernel/dot-authorization/actions/workflows/static-analysis.yml)

[![SymfonyInsight](https://insight.symfony.com/projects/014df510-1cf7-4876-b1a8-303fbef2f364/big.svg)](https://insight.symfony.com/projects/014df510-1cf7-4876-b1a8-303fbef2f364)


## Installation

Run the following command in you project directory
```bash
$ composer require dotkernel/dot-authorization
```

Please note that usually this pacakge will be installed as a dependency to a concrete implementation, so you won't need to add this to your project manually.

## AuthorizationInterface

Defines the interface that should be implemented by any authorization service, in order to work with DotKernel applications. This is a result of the fact that, by default, any DotKernel package which has to do with authorization is assuming that a service is registered in the service container using as service name this interface's FQN

### Methods
```php
public function isGranted(string $permission, array $roles = [], $context = null): bool;
```
* this is the only method that deals with authorization. Given a permission and a list of roles, should return a boolean value of true if at least one role has access to the requested permission. As you can see, we expect that the authorization service to be implemented as an RBAC.

## RoleInterface

Defines the interface that Role objects must implement. A role object should be able to retrieve its name, so this interface has only one method defined
```php
public function getName(): string;
```

## IdentityInterface

Interface that needs to be implemented by entities that support roles. They should be able to retrieve their roles by defining a `getRoles()` method.
The roles should be an array of role names or role objects

This package is suitable for RBAC style authorization. Roles can be flat or hierarchical and they are assigned permissions.
A role is granted if it has the required permission.

## ForbiddenException

Exception to be thrown when accessing content without having the required permissions. This can be used withing an application to trigger a forbidden error and do a custom action(like displaying a forbidden page or redirecting). This package does not define how you should handle such situations. There is a concrete authorization implementation in [dot-rbac](https://github.com/dotkernel/dot-rbac) and a forbidden exception handler in [dot-rbac-guard](https://github.com/dotkernel/dot-rbac-guard) as DotKernel default packages for authorization.
