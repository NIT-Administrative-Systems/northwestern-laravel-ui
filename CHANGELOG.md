# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/), and this project adheres to [Semantic Versioning](https://semver.org/).

## [Unreleased]
- Support for Livewire v3 asset injection.

## [v3.0.0] - 2024-02-27
### Breaking Change
This release now requires the underlying [Sentry PHP SDK v4.0](https://github.com/getsentry/sentry-php). Please refer to the PHP SDK [sentry-php/UPGRADE-4.0.md](https://github.com/getsentry/sentry-php/blob/master/UPGRADE-4.0.md) guide for a complete list of breaking changes.

- `@sentry/browser` should be updated to a minimum version of `7.100.0`. Please refer to the [migration guide](https://github.com/getsentry/sentry-javascript/blob/develop/MIGRATION.md) for a complete list of breaking changes.
  - If you are using the `resources/js/sentry.js` file from this package, [review the new version](https://github.com/NIT-Administrative-Systems/northwestern-laravel-ui/blob/033827623529e44239491e264c1c2f5b54c7075f/src/Presets/northwestern-stubs/js/sentry.js). 
- `@sentry/tracing` is no longer required and can be removed from your project if it is not otherwise used.

## [v2.2.0] - 2023-08-31

### Added
- Support for additional flash keys with contextual styling.
- A YouTube icon is now included in the footer.

### Changed
- The Bootstrap 5 pagination styles will be used for Laravel pagination links by default.

### Fixed
- Corrected a misspelling of `Police` to `Policies` in the footer.
- Bootstrap 5 compatability issues with the `demo-styles` view.
- Alignment issues with the `northwestern::errors` component.
- Rendering for the address, phone, and email pins in the footer on smaller screens have been corrected.

### Removed
- The Twitter icon has been removed from the footer, and the corresponding CSS was removed.

## [v2.1.0] - 2023-06-13

### Added
- **Global Alert** component.

### Changed
- Defined the text color for the `.nav-link:active` state.

### Fixed
- Updated the namespace on a Bootstrap 5 data attribute in the `northwestern::flash` component.

- [unreleased]: https://github.com/NIT-Administrative-Systems/northwestern-laravel-ui/compare/v2.2.0...HEAD
- [v2.2.0]: https://github.com/NIT-Administrative-Systems/northwestern-laravel-ui/compare/v2.1.0...v2.2.0
- [v2.1.0]: https://github.com/NIT-Administrative-Systems/northwestern-laravel-ui/compare/v2.0.3...v2.1.0