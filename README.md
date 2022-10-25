# Network Error Logging for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/adriangonzales/laravel-nel.svg?style=flat-square)](https://packagist.org/packages/adriangonzales/laravel-nel)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/adriangonzales/laravel-nel/run-tests?label=tests)](https://github.com/adriangonzales/laravel-nel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/adriangonzales/laravel-nel/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/adriangonzales/laravel-nel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/adriangonzales/laravel-nel.svg?style=flat-square)](https://packagist.org/packages/adriangonzales/laravel-nel)

Implementation of the [Network Error Logging](https://developer.mozilla.org/en-US/docs/Web/HTTP/Network_Error_Logging) protocol for Laravel. Provides configurations, a middleware for routes, and an optional collection endpoint and model for storing reports.

## Installation

You can install the package via composer:

```bash
composer require adriangonzales/laravel-nel
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-nel-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-nel-config"
```

This is the contents of the published config file:

```php
return [
    'enabled' => env('NEL_ENABLED', false),

    /*
     * The reporting API group to send network error reports to (see below).
     */
    'group' => env('NEL_GROUP', (string) Str::of(env('APP_NAME', 'Laravel'))->kebab()->finish('-nel')),

    /*
     * Specifies the lifetime of the policy, in seconds (in a similar way to e.g. HSTS policies are time-restricted).
     * The referenced reporting group should have a lifetime at least as long as the NEL policy.
     */
    'max_age' => env('NEL_MAX_AGE', 31536000),

    /*
     * If true, the policy applies to all subdomains under the origin that the policy header is set.
     * The reporting group should also be set to include subdomains, if this option is to be enabled.
     */
    'include_subdomains' => env('NEL_INCLUDE_SUBDOMAINS', true),

    /*
     * Floating point value between 0 and 1 which specifies the proportion of successful network requests to report.
     * Defaults to 0, so that no successful network requests will be reported if the key is not present in the JSON payload.
     */
    'success_fraction' => env('NEL_SUCCESS_FRACTION', 0),

    /*
     * Floating point value between 0 and 1 which specifies the proportion of failed network requests to report.
     * Defaults to 1, so that all failed network requests will be reported if the key is not present in the JSON payload.
     */
    'failure_fraction' => env('NEL_FAILURE_FRACTION', 1),
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-nel-views"
```

## Usage

```php

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Adrian Gonzales](https://github.com/adriangonzales)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
