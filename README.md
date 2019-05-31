## Laravel Brand Mapping
Представляет собой пакет для маппинга названий брендов

## Requirements
* PHP >= 7.0
* Laravel >= 5.5

## Install

Via composer:

```bash
$ composer require roadkit/brands-mapping
```
Enable an alias by editing config/app.php:
```bash
'aliases' => [
    ...
    'BrandsMapping' => 'Roadkit\BrandsMapping\BrandsMappingFacade',
    ...
]
```

## Convert to normalize

```php
echo BrandsMapping::normalize('BLUEPRINT', 'shate')
```
```
BLUE PRINT
```

## Convert to origin

```php
echo BrandsMapping::origin('BLUE PRINT', 'shate')
```
```
BLUEPRINT
```

### Testing

```
./vendor/bin/phpunit
```
or
``` bash
composer test 
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.