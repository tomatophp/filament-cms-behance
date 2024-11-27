![Screenshot](https://raw.githubusercontent.com/tomatophp/filament-cms-behance/master/art/screenshot.jpg)

# Filament cms behance

[![Latest Stable Version](https://poser.pugx.org/tomatophp/filament-cms-behance/version.svg)](https://packagist.org/packages/tomatophp/filament-cms-behance)
[![License](https://poser.pugx.org/tomatophp/filament-cms-behance/license.svg)](https://packagist.org/packages/tomatophp/filament-cms-behance)
[![Downloads](https://poser.pugx.org/tomatophp/filament-cms-behance/d/total.svg)](https://packagist.org/packages/tomatophp/filament-cms-behance)

Behance Extension for Filament CMS Builder to import data from Behance

## Installation

```bash
composer require tomatophp/filament-cms-behance
```
after install your package please run this command

```bash
php artisan filament-cms-behance:install
```

finally register the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\TomatoPHP\FilamentCmsBehance\FilamentCmsBehancePlugin::make())
```


## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-cms-behance-config"
```

you can publish views file by use this command

```bash
php artisan vendor:publish --tag="filament-cms-behance-views"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="filament-cms-behance-lang"
```

you can publish migrations file by use this command

```bash
php artisan vendor:publish --tag="filament-cms-behance-migrations"
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security

Please see [SECURITY](SECURITY.md) for more information about security.

## Credits

- [Fady Mondy](mailto:info@3x1.io)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
