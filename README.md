
# Nepali Currency Converter

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dineshuprety/nepal-currency-converter.svg?style=flat-square)](https://packagist.org/packages/dineshuprety/nepal-currency-converter)
[![Tests](https://github.com/dineshuprety/nepal-currency-converter/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/dineshuprety/nepal-currency-converter/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/dineshuprety/nepal-currency-converter.svg?style=flat-square)](https://packagist.org/packages/dineshuprety/nepal-currency-converter)

Nepali currency converter is a php package that gives the historical, latest currency rate and converts nepali currency to another.i.e
```php

 $inr = NepalCurrencyConverter::convert(1)->toINR();
 echo $inr; // 0.62

```

## Installation

You can install the package via composer:

```bash
composer require dineshuprety/nepal-currency-converter
```

## Usage

```php
namespace Nepo\NepalCurrencyConverter\Tests;
use Nepo\NepalCurrencyConverter\NepalCurrencyConverter;

 $inr = NepalCurrencyConverter::convert(1)->toINR();
 echo $inr; // 0.62

```
## Currency Convert Option
To change the Nepali currency to other currency options : 
* toINR();
* toBDT();
* toCNY();
* toPKR();
* toMVR();

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [dineshuprety](https://github.com/dineshuprety)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
