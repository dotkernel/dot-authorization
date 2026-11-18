# Changelog

## 4.0.0 - TBD

### Changed

- `ExceptionInterface` extends `Throwable`. This is a breaking change.
- Require PHP 8.3, 8.4, 8.5 or 8.6.
- Update PHPUnit to 12.5.
- Set PHPStan to level 8.
- Update the CI actions: `actions/checkout@v7`, `actions/cache@v6` and `codecov/codecov-action@v7`.
- Replace the mock-based tests with tests that use fixture classes.
- Make PHPUnit fail on notices, warnings, deprecations and risky tests.

### Added

- PHPDoc value types for `AuthorizationInterface::isGranted()` `$roles` and `IdentityInterface::getRoles()`.
- Documentation for version 4 and an upgrade guide.

### Deprecated

- Nothing.

### Removed

- Support for PHP 8.2.

### Fixed

- `ForbiddenException` accepts any `Throwable` as the previous exception.

## 3.8.1 - 2026-01-28

### Changed

- Update PHPUnit to `^10.5.62` (security update).

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.8.0 - 2025-10-31

### Changed

- Nothing.

### Added

- Support for PHP 8.5.

### Deprecated

- Nothing.

### Removed

- Support for PHP 8.1.

### Fixed

- Nothing.

## 3.7.0 - 2025-03-05

### Changed

- Replace Psalm with PHPStan.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Psalm.

### Fixed

- Nothing.

## 3.6.1 - 2025-01-27

### Changed

- Update Psalm to 6.x.
- Run Codecov on PHP 8.4.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.6.0 - 2025-01-22

### Changed

- Update `laminas/laminas-coding-standard` to 3.x.
- Run static analysis in `composer check`.

### Added

- Support for PHP 8.4.
- `.laminas-ci.json`.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.5.2 - 2024-08-22

### Changed

- Nothing.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Rename `instalation.md` to `installation.md`.

## 3.5.1 - 2024-05-03

### Changed

- Update `mkdocs.yml`.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.5.0 - 2024-05-03

### Changed

- Nothing.

### Added

- Documentation for version 3.
- Code coverage with Codecov.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.4.1 - 2023-11-29

### Changed

- Nothing.

### Added

- Support for PHP 8.3.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.4.0 - 2023-07-25

### Changed

- Require PHP 8.1 or 8.2.
- Use the native `mixed` type for `$context` in `AuthorizationInterface::isGranted()`.

### Added

- PHPUnit tests, Psalm and the Laminas Coding Standard.

### Deprecated

- Nothing.

### Removed

- Support for PHP 7.4 and 8.0.

### Fixed

- Nothing.

## 3.3.0 - 2023-03-29

### Changed

- Nothing.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- `laminas/laminas-dependency-plugin`.

### Fixed

- Nothing.

## 3.2.0 - 2022-04-26

### Changed

- Nothing.

### Added

- Support for PHP 8.0 and 8.1.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.1.0 - 2020-11-02

### Changed

- Composer 2 compatibility.
- Update composer.json to require version 2 of laminas/laminas-dependency-plugin to be Composer 2 compatible.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.0.2 - 2020-04-23

### Changed

- Nothing.

### Added

- Composer keywords.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.0.1 - 2020-04-23

### Changed

- Update the dev requirements: PHPUnit 9 and PHP_CodeSniffer 3.5.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 3.0.0 - 2020-04-22

### Changed

- Update the packages and the minimum PHP version.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 2.0.0 - 2020-01-30

### Changed

- Laminas and Mezzio migration.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Support.

### Fixed

- Nothing.

## 0.1.2 - 2018-05-04

Package refresh.

### Changed

- Nothing.

### Added

- Nothing.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 0.1.1 - 2017-03-10

### Added

- Updated php file doc blocks.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.

## 0.1.0 - 2017-03-07

Initial tagged release.

### Added

- Everything.

### Deprecated

- Nothing.

### Removed

- Nothing.

### Fixed

- Nothing.
