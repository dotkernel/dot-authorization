# dot-authorization

Dotkernel authorization service abstractions.

`dot-authorization` is the base authorization package of Dotkernel. It defines the interfaces that authorization services for Dotkernel applications implement.

## Documentation

Documentation is available at: https://docs.dotkernel.org/dot-authorization/.

## Versions

| Version | PHP versions | Branch |
| --- | --- | --- |
| 4.x | 8.3, 8.4, 8.5, 8.6 | `4.0` |
| 3.x | 8.2, 8.3, 8.4, 8.5 | `3.0` |

To upgrade from version 3, read the [upgrade guide](https://docs.dotkernel.org/dot-authorization/v4/upgrading/).

## Badges

![OSS Lifecycle](https://img.shields.io/osslifecycle/dotkernel/dot-authorization)
![PHP from Packagist (specify version)](https://img.shields.io/packagist/php-v/dotkernel/dot-authorization/4.0.0)

[![GitHub issues](https://img.shields.io/github/issues/dotkernel/dot-authorization)](https://github.com/dotkernel/dot-authorization/issues)
[![GitHub forks](https://img.shields.io/github/forks/dotkernel/dot-authorization)](https://github.com/dotkernel/dot-authorization/network)
[![GitHub stars](https://img.shields.io/github/stars/dotkernel/dot-authorization)](https://github.com/dotkernel/dot-authorization/stargazers)
[![GitHub license](https://img.shields.io/github/license/dotkernel/dot-authorization)](https://github.com/dotkernel/dot-authorization/blob/4.0/LICENSE.md)

[![Build Static](https://github.com/dotkernel/dot-authorization/actions/workflows/continuous-integration.yml/badge.svg?branch=4.0)](https://github.com/dotkernel/dot-authorization/actions/workflows/continuous-integration.yml)
[![codecov](https://codecov.io/gh/dotkernel/dot-authorization/graph/badge.svg?token=ZBZDEA3LY8)](https://codecov.io/gh/dotkernel/dot-authorization)
[![PHPStan](https://github.com/dotkernel/dot-authorization/actions/workflows/static-analysis.yml/badge.svg?branch=4.0)](https://github.com/dotkernel/dot-authorization/actions/workflows/static-analysis.yml)

## Installation

Run this command in your project directory:

```shell
composer require dotkernel/dot-authorization
```

Usually, a concrete implementation installs this package as a dependency.
You do not need to add it to your project.

## AuthorizationInterface

Each authorization service for Dotkernel applications implements this interface.
By default, the Dotkernel authorization packages get the service from the container with the fully qualified name of this interface.

### Methods

```php
/**
 * @param array<string|RoleInterface> $roles
 */
public function isGranted(string $permission, array $roles = [], mixed $context = null): bool;
```

> This is the only method for authorization.

The method gets a permission and a list of roles.
It returns `true` if one or more of the roles have the permission.
Each role is a role name (`string`) or a `RoleInterface` object.
The interface expects a role-based access control (RBAC) implementation.

## RoleInterface

Role objects implement this interface.
A role object returns its name, so the interface has one method.

```php
public function getName(): string;
```

## IdentityInterface

Entities that have roles implement this interface.
The `getRoles()` method returns the roles of the entity.
Each role is a role name or a role object, and one array can contain both.

This package is for RBAC authorization.
Roles can be flat or hierarchical, and each role has permissions.
A role is granted if it has the necessary permission.

## Exceptions

`ExceptionInterface` extends `Throwable`.
Catch it to catch each exception of this package.

### ForbiddenException

Throw this exception when a user accesses content without the necessary permissions.
An application can catch it to show a forbidden page or to redirect the user.
This package does not define how to handle the exception.
The default code is `403`, and the previous exception can be any `Throwable`.

[dot-rbac](https://github.com/dotkernel/dot-rbac) contains a concrete authorization service.
[dot-rbac-guard](https://github.com/dotkernel/dot-rbac-guard) contains a handler for the forbidden exception.
These are the default Dotkernel packages for authorization.
