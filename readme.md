# TasBranding

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation


``` bash
composer require tallandsassy/tasbranding

# This will, basically, setup config/tasbranding.php. You should definitley modify, as desired.
php artisan vendor:publish --tag=tasbranding.config

# copy the default logo over. You can override when wanted.
# find logos in public/tassy/branding/logos
php artisan vendor:publish --provider="TallAndSassy\TasBranding\TasBrandingServiceProvider"
```

## Usage
For usage, visit (on your local installation): http://localhost/grok/tassy/groks_tasbranding

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author email instead of using the issue tracker.

## Credits

- [author name][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/tallandsassy/tasbranding.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/tallandsassy/tasbranding.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/tallandsassy/tasbranding/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/tallandsassy/tasbranding
[link-downloads]: https://packagist.org/packages/tallandsassy/tasbranding
[link-travis]: https://travis-ci.org/tallandsassy/tasbranding
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/tallandsassy
[link-contributors]: ../../contributors
