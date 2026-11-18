# Usage

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

### Example

This implementation keeps the permissions of each role in an array.

```php
<?php

declare(strict_types=1);

use Dot\Authorization\AuthorizationInterface;
use Dot\Authorization\Role\RoleInterface;

final class InMemoryAuthorization implements AuthorizationInterface
{
    /**
     * @param array<string, list<string>> $permissions role name => granted permissions
     */
    public function __construct(private readonly array $permissions)
    {
    }

    public function isGranted(string $permission, array $roles = [], mixed $context = null): bool
    {
        foreach ($roles as $role) {
            $name = $role instanceof RoleInterface ? $role->getName() : $role;
            if (in_array($permission, $this->permissions[$name] ?? [], true)) {
                return true;
            }
        }

        return false;
    }
}

$authorization = new InMemoryAuthorization(['admin' => ['user.delete']]);
var_dump($authorization->isGranted('user.delete', ['guest', 'admin'])); // bool(true)
```

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

```php
/**
 * @return array<string|RoleInterface>
 */
public function getRoles(): array;
```

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

```php
public function __construct(string $message = '', int $code = 403, ?Throwable $previous = null);
```

The default code is `403`.
The previous exception can be any `Throwable`, which includes an `Error`.

[dot-rbac](https://github.com/dotkernel/dot-rbac) contains a concrete authorization service.
[dot-rbac-guard](https://github.com/dotkernel/dot-rbac-guard) contains a handler for the forbidden exception.
These are the default Dotkernel packages for authorization.
