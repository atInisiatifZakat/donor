# Inisiatif Donor

[![PHPUnit](https://github.com/atInisiatifZakat/donor/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/atInisiatifZakat/donor/actions/workflows/run-tests.yml)
[![Laravel Pint](https://github.com/atInisiatifZakat/donor/actions/workflows/fix-php-code-style-issues.yml/badge.svg?branch=main)](https://github.com/atInisiatifZakat/donor/actions/workflows/fix-php-code-style-issues.yml)
[![Psalm](https://github.com/atInisiatifZakat/donor/actions/workflows/run-psalm-static-analyst.yml/badge.svg?branch=main)](https://github.com/atInisiatifZakat/donor/actions/workflows/run-psalm-static-analyst.yml)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/inisiatif/donor.svg?style=flat-square)](https://packagist.org/packages/inisiatif/donor)
[![Total Downloads](https://img.shields.io/packagist/dt/inisiatif/donor.svg?style=flat-square)](https://packagist.org/packages/inisiatif/donor)

Simple donor Rest API used at Inisiatif Zakat Indonesia

## Installation

You can install the package via composer:

```bash
composer require inisiatif/donor
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="donor-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="donor-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="donor-views"
```

## Usage

```php
$inisiatifDonor = new Inisiatif\InisiatifDonor();
echo $inisiatifDonor->echoPhrase('Hello, Inisiatif!');
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

- [Nuradiyana](https://github.com/atInisiatifZakat)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
