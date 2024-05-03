# Usage

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
