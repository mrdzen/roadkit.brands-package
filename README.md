## Installation

You can install the package via composer:

```bash
composer require roadkit/brands-mapping
```

## Usage

``` php
...
$provider = 'shate;
$brandOriginName = 'BLUEPRINT';

$brandNormalizeValue = BrandsMappingFacade::normalize($brandOriginName, $provider)
$brandOriginValue = BrandsMappingFacade::normalize($brandNormalizeValue, $provider)

dd($brandNormalizeValue, $brandOriginValue);
...

```

### Testing

``` bash
composer test / phpunit
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.