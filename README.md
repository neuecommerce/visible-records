# Visible Records for Laravel

[![GitHub Tests Action Status][icon-action-tests]][url-action-tests]
[![GitHub Code Analysis Action Status][icon-action-analysis]][url-action-analysis]
[![Software License][icon-license]][url-license]
[![Latest Version on Packagist][icon-packagist-version]][url-packagist]
[![Total Downloads][icon-packagist-downloads]][url-packagist]

An Activity Logger for Laravel Eloquent models.

## Installation

1. Install the package via Composer:

```shell
composer require neuecommerce/visible-records
```

## Implementation

### Automatic

Implementing the Visible Records package on your Eloquent models, is quite simple and can be done in 3 just simple steps:

1. Implement the `NeueCommerce\VisibleRecords\HasVisibilityInterface` interface on your model(s).

2. Implement the `NeueCommerce\VisibleRecords\HasVisibility` trait on your model(s).

3. Create a database migration that adds the `visibile_at` nullable timestamp column to your model(s) table.

Here's an example of a model with the proper implementation:

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use NeueCommerce\VisibleRecords\HasVisibilityInterface;
use NeueCommerce\VisibleRecords\HasVisibility;

class Product extends Model implements HasVisibilityInterface
{
    use HasVisibility;

    public $table = 'products';
}
```

Here's an example of a database migration:

```php
<?php

...
```

## Usage

...

## Testing

```shell
composer test
```

## Contributing

Thank you for your interest. Here are some of the many ways to contribute.

- Check out our [contributing guide](/.github/CONTRIBUTING.md)
- Look at our [code of conduct](/.github/CODE_OF_CONDUCT.md)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[url-action-tests]: https://github.com/neuecommerce/visible-records/actions?query=workflow%3Atests
[url-action-analysis]: https://github.com/neuecommerce/visible-records/actions?query=workflow%3Acode-analysis
[url-packagist]: https://github.com/neuecommerce/neuecommerce
[url-license]: https://opensource.org/licenses/MIT

[icon-action-tests]: https://github.com/neuecommerce/visible-records/actions/workflows/tests.yml/badge.svg?branch=main
[icon-action-analysis]: https://github.com/neuecommerce/visible-records/actions/workflows/code-analysis.yml/badge.svg?branch=main
[icon-license]: https://img.shields.io/github/license/neuecommerce/visible-records?label=License
[icon-packagist-version]: https://img.shields.io/packagist/v/neuecommerce/visible-records.svg?label=Packagist
[icon-packagist-downloads]: https://img.shields.io/packagist/dt/neuecommerce/visible-records.svg?label=Downloads
