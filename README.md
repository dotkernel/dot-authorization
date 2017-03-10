# dot-authorization

Package defining authorization abstractions for authorization services. This package is common between several other dotkernel packages which work with authorization.

## Installation

Usually installed with a concrete implementation, if developing custom authorization service, add this as a dependency by running the following command
```bash
$ composer require dotkernel/dot-authorization
```

## AuthorizationInterface

This interface must be implemented by authorization services. The fully qualified interface name should also be used as the service name of the authorization service.

It defines just one method that returns a boolean value

```php
public function isGranted($permission, array $roles = [], $context = null);
```

## RoleInterface

Defines the interface that Role objects must implement. A role object should be able to retrieve its name, so this interface has only one method defined `getName()`.

## IdentityInterface

Interface that needs to be implemented by entities that are assigned roles. They should be able to retrieve their roles by defining a `getRoles()` method.
The roles should be an array of role names or role objects

This package is suitable for RBAC style authorization. Roles can be flat or hierarchical and they are assigned permissions.
A role is granted if it has the required permission.

## ForbiddenException

This exception can be thrown from a middleware in case the user is forbidden to access some content.
The status code of a forbidden response is 403. Error handling middleware should be provided to handle this kind of error.
