# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.3.1] - 2026-10-14

### Fixed

* PDF rendering fails on certain UTF-8 characters in Blade views
* `laz_flash()` not flushing correctly when session driver is `array`

## [1.3.0] - 2026-08-05

### Added

* `Laz::pdf()->landscape()` orientation helper
* `Laz::excel()->headers(array $labels)` for custom column headers
* `laz_now()` helper now accepts an optional `Carbon` instance as second argument

### Changed

* Upgraded internal DomPDF wrapper to support custom paper sizes
* `@lazFlash` directive now renders nothing instead of an empty `<div>` when no flash is set

### Fixed

* Excel export strips trailing whitespace from string cells

## [1.2.1] - 2026-04-22

### Fixed

* Service provider registers correctly on Laravel 11 with the new application bootstrap
* `Laz::pdf()->html()` does not respect `isRemoteEnabled` flag on some server configs

## [1.2.0] - 2025-11-30

### Added

* `Laz::pdf()->margins(float $top, float $right, float $bottom, float $left)` for custom page margins
* `Laz::excel()->sheet(string $name)` to set a custom worksheet name
* Support for Laravel 11

### Changed

* Minimum PHP version raised to 8.0
* Internal core pipeline refactored for lower memory footprint on large exports

### Deprecated

* `laz_env()` — use Laravel's built-in `env()` directly; will be removed in v2.0

## [1.1.0] - 2025-04-10

### Added

* `@lazFlash` Blade directive
* `laz_flash(string $message, string $type)` global helper
* `laz_env(string $key, $default)` global helper
* `laz_now(string $format)` global helper

### Changed

* `Laz` facade now resolves from the IoC container instead of static calls

## [1.0.0] - 2024-09-01

### Added

* Initial release
* `Laz::pdf()->view()` and `Laz::pdf()->html()` for PDF generation via DomPDF
* `Laz::excel()->export(array $data, string $filename)` for `.xlsx` export via PhpSpreadsheet
* Auto-discovery via Laravel package manifest — no `config/app.php` changes needed

[1.3.1]: https://github.com/laravelazier/laravelazier/compare/v1.3.0...v1.3.1
[1.3.0]: https://github.com/laravelazier/laravelazier/compare/v1.2.1...v1.3.0
[1.2.1]: https://github.com/laravelazier/laravelazier/compare/v1.2.0...v1.2.1
[1.2.0]: https://github.com/laravelazier/laravelazier/compare/v1.1.0...v1.2.0
[1.1.0]: https://github.com/laravelazier/laravelazier/compare/v1.0.0...v1.1.0
[1.0.0]: https://github.com/laravelazier/laravelazier/releases/tag/v1.0.0
