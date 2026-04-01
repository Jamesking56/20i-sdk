# 20i PHP SDK

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jamesking.dev/20i-sdk.svg?style=flat-square)](https://packagist.org/packages/jamesking.dev/20i-sdk)
[![Total Downloads](https://img.shields.io/packagist/dt/jamesking.dev/20i-sdk.svg?style=flat-square)](https://packagist.org/packages/jamesking.dev/20i-sdk)

This package is a full PHP SDK for the 20i Reseller API using [Saloon](https://docs.saloon.dev/) v4.
It provides Saloon Request classes, Saloon Resources and a base SDK class to make it easier to use the 20i Reseller API.
You can decorate this package with any of Saloon's plugins, such as the Laravel plugin and caching plugin.

## Support this project

I donate my own time creating open source packages like this and contributing to other open source projects.

I'd love it if you could sponsor me so that I can dedicate more time contributing to open source:

- [GitHub Sponsors](https://github.com/sponsors/Jamesking56)
- [Tidelift](https://tidelift.com/funding/github/packagist/jamesking.dev/20i-sdk)
- [Thanks.dev](https://thanks.dev/u/gh/Jamesking56)

## Requirements

- PHP 8.2+
- [Saloon](https://docs.saloon.dev/) v4

## Installation

You can install the package via [Composer](https://getcomposer.org/):

```bash
composer require jamesking.dev/20i-sdk
```

## Usage

[Generate your 20i General API Key from StackCP](https://my.20i.com/reseller/api)

```php
use JamesKingDev\TwentyI\TwentyI;

require_once 'vendor/autoload.php';

$twentyI = new TwentyI('your-20i-general-api-key');

// List all packages
$packagesResponse = $twentyI->packages()->listPackages();

// Get a specific package
$packageResponse = $twentyI->packages()->package(123);

// Work with VPS
$vpsResponse = $twentyI->vps()->getVps(456);

// Search for domains
$domainsResponse = $twentyI->domainNames()->domainSearch('example');

// Access reseller services
$servicesResponse = $twentyI->reseller()->services(789);

var_dump($packagesResponse->json());
```

### Available Resources

The SDK provides the following resource classes for organizing API endpoints:

- `cloudServers()` - Cloud server ordering and upgrades
- `domainNames()` - Domain name operations
- `managedVps()` - Managed VPS operations
- `mssqlDatabases()` - MS SQL database management
- `orderAndRenewServices()` - Service ordering and renewals
- `packages()` - Hosting package and domain management
- `reseller()` - Reseller-level operations
- `vps()` - Virtual Private Server management
- `websiteTurbo()` - Website Turbo service management

### Response Handling

All methods return a `Saloon\Http\Response` object:

```php
$response = $twentyI->packages()->listPackages();

if ($response->successful()) {
    $data = $response->json();
    // Process data
}

if ($response->failed()) {
    // Handle error
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [GitHub Releases](https://github.com/Jamesking56/20i-sdk/releases) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please see [SECURITY.md](SECURITY.md) for details.

## Credits

- [James King (Author)](https://github.com/Jamesking56)
- [Contributors](https://github.com/Jamesking56/20i-sdk/graphs/contributors)
- [Saloon Contributors](https://github.com/saloonphp/saloon/graphs/contributors)
- [Rector Contributors](https://github.com/rectorphp/rector/graphs/contributors)
- [Laravel Pint Contributors](https://github.com/laravel/pint/graphs/contributors)

## License

The MIT License (MIT). Please see [LICENSE.md](LICENSE.md) for more information.
