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

Install the package via composer:

```bash
composer require shadcn-blade/ui
```

Initialize shadcn-blade in your project:

```bash
php artisan shadcn:init
```

This will:
- Create a `components.json` configuration file
- Set up Tailwind v4 with theme variables
- Allow you to choose a base color scheme (neutral, zinc, slate, stone, gray)
- Create the component directory structure

## Usage

Add components to your project:

```bash
# Add individual components
php artisan shadcn:add button
php artisan shadcn:add input

# Components are copied to resources/views/components/ui/
# You own the code and can customize freely
```

Use components in your Blade views:

```blade
<x-ui.button variant="default">Click me</x-ui.button>
<x-ui.input type="email" placeholder="Email" />
<x-ui.badge variant="destructive">New</x-ui.badge>
```

### Color Schemes

Choose from 5 base color schemes during initialization:
- **neutral** - Pure grayscale
- **zinc** - Neutral with minimal saturation
- **slate** - Cool blue-gray tones
- **stone** - Warm gray with brown undertones
- **gray** - Balanced neutral gray

To change the color scheme later:

```bash
php artisan shadcn:init --force
```

## Components

**Legend:**
- ✅ Complete & Available
- 🚧 In Progress
- ⏳ Planned

### Component Status

| Component       | Status       |
|-----------------|--------------|
| Accordion       | ⏳            |
| Alert Dialog    | ⏳            |
| Alert           | ⏳            |
| Aspect Ratio    | ⏳            |
| Avatar          | ⏳            |
| Badge           | ✅            |
| Breadcrumb      | ⏳            |
| Button          | ✅            |
| Button Group    | ⏳            |
| Calendar        | ⏳            |
| Card            | ⏳            |
| Carousel        | ⏳            |
| Chart           | ⏳            |
| Checkbox        | ✅            |
| Collapsible     | ⏳            |
| Combobox        | ⏳            |
| Command         | ⏳            |
| Context Menu    | ⏳            |
| Data Table      | ⏳            |
| Date Picker     | ⏳            |
| Dialog          | ⏳            |
| Drawer          | ⏳            |
| Dropdown Menu   | ⏳            |
| Empty           | ⏳            |
| Field           | ⏳            |
| Form            | ⏳            |
| Hover Card      | ⏳            |
| Input           | ✅            |
| Input Group     | ⏳            |
| Input OTP       | ⏳            |
| Item            | ⏳            |
| Kbd             | ⏳            |
| Label           | ✅            |
| Menubar         | ⏳            |
| Native Select   | ⏳            |
| Navigation Menu | ⏳            |
| Pagination      | ⏳            |
| Popover         | ⏳            |
| Progress        | ⏳            |
| Radio Group     | ✅            |
| Resizable       | ⏳            |
| Scroll Area     | ⏳            |
| Select          | ⏳            |
| Separator       | ⏳            |
| Sheet           | ⏳            |
| Sidebar         | ⏳            |
| Skeleton        | ⏳            |
| Slider          | ⏳            |
| Sonner          | ⏳            |
| Spinner         | ⏳            |
| Switch          | ✅            |
| Table           | ⏳            |
| Tabs            | ⏳            |
| Textarea        | ✅            |
| Toast           | ⏳            |
| Toggle          | ⏳            |
| Toggle Group    | ⏳            |
| Tooltip         | ⏳            |
| Typography      | ⏳            |

> **Total: 58 components** (8 complete, 50 planned)

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
