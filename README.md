# contactformapi [tutorial]

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ecoonline/contactformapi.svg?style=flat-square)](https://packagist.org/packages/ecoonline/contactformapi)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ecoonline/contactformapi/run-tests?label=tests)](https://github.com/ecoonline/contactformapi/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ecoonline/contactformapi/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ecoonline/contactformapi/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ecoonline/contactformapi.svg?style=flat-square)](https://packagist.org/packages/ecoonline/contactformapi)


This package uses the Spatie package-skeleton-laravel base to build a contact form tutorial package.

## Installation

You can install the package via composer:

```bash
composer require ecoonline/contactformapi
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="EcoOnline\Contactformapi\ContactformapiServiceProvider" --tag="contactformapi-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="EcoOnline\Contactformapi\ContactformapiServiceProvider" --tag="contactformapi-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$contactformapi = new EcoOnline\Contactformapi();
echo $contactformapi->echoPhrase('Hello, EcoOnline!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [alun-price](https://github.com/Alun-Price)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
