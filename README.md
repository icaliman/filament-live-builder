# This is my package live-builder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/xlitedev/live-builder.svg?style=flat-square)](https://packagist.org/packages/xlitedev/live-builder)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/xlitedev/live-builder/run-tests?label=tests)](https://github.com/xlitedev/live-builder/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/xlitedev/live-builder/Check%20&%20fix%20styling?label=code%20style)](https://github.com/xlitedev/live-builder/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/xlitedev/live-builder.svg?style=flat-square)](https://packagist.org/packages/xlitedev/live-builder)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require xlitedev/live-builder
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="live-builder-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="live-builder-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="live-builder-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$live-builder = new XliteDev\FilamentLiveBuilder();
echo $live-builder->echoPhrase('Hello, XliteDev!');
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

- [Ion Caliman](https://github.com/icaliman)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
