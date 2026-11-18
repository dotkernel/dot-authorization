# Upgrading from version 3 to version 4

## Breaking changes

| Change | Symptom | Fix |
| --- | --- | --- |
| PHP 8.2 is not supported | Composer does not install version 4 on PHP 8.2 | Use PHP 8.3 or later, or stay on version 3 |
| `ExceptionInterface` extends `Throwable` | Fatal error: "cannot implement interface Throwable, extend Exception or Error instead" | Make your class extend `Exception`, `RuntimeException` or a class of this package |
| `$roles` and `getRoles()` have PHPDoc value types | PHPStan in your project can report `argument.type` or `return.type` | Use only role names (`string`) or `RoleInterface` objects |

## Compatible changes

- `ForbiddenException` accepts any `?Throwable` as the previous exception. Each call that worked in version 3 also works in version 4.

## Your own exception class

Version 3 accepted a class that implements `ExceptionInterface` but is not an exception.

```php
use Dot\Authorization\Exception\ExceptionInterface;

class AccessDenied implements ExceptionInterface
{
}
```

In version 4, the class must extend `Exception` or one of its subclasses.

```php
use Dot\Authorization\Exception\ExceptionInterface;
use RuntimeException;

class AccessDenied extends RuntimeException implements ExceptionInterface
{
}
```

## Packages that require version 3

`dot-rbac`, `dot-navigation` and `dot-twigrenderer` require `dotkernel/dot-authorization` `^3.4.1`.
Composer does not install version 4 until these packages allow it.
