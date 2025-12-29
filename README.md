# shadcn-blade/ui

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shadcn-blade/ui.svg?style=flat-square)](https://packagist.org/packages/shadcn-blade/ui)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/shadcn-blade/ui/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/shadcn-blade/ui/actions?query=workflow%3Arun-tests+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/shadcn-blade/ui.svg?style=flat-square)](https://packagist.org/packages/shadcn-blade/ui)

A Laravel Blade port of [shadcn/ui](https://ui.shadcn.com). Beautiful, accessible, and customizable components built with Laravel Blade and Tailwind CSS.

## About

shadcn-blade/ui brings the popular shadcn/ui component library to Laravel Blade. This is not a component library in the traditional sense - you don't install it as a dependency. Instead, you pick the components you need and add them directly to your project.

The components are:
- Built with Laravel Blade and Tailwind CSS
- Fully customizable and accessible
- Styled with a consistent design system
- Easy to integrate into any Laravel project

## Installation

You can install the package via composer:

```bash
composer require shadcn-blade/ui
```

Ensure you have Tailwind CSS installed and configured in your Laravel project.

## Usage

After installation, you can start using the components in your Blade views. Each component is designed to be copy-paste friendly and fully customizable.

```blade
<x-shadcn-button variant="default">
    Click me
</x-shadcn-button>
```

You can publish the views to customize them:

```bash
php artisan vendor:publish --tag="shadcn-blade-views"
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="shadcn-blade-config"
```

## Components

The library includes a growing collection of components including:
- Buttons
- Cards
- Forms
- Dialogs
- And many more...

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

- [ihxnnxs](https://github.com/ihxnnxs)
- Inspired by [shadcn/ui](https://ui.shadcn.com)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
