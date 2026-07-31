# Gearman IDE helper

[![Latest Stable Version](https://poser.pugx.org/cracksalad/gearman-ide-helper/v)](https://packagist.org/packages/cracksalad/gearman-ide-helper)
[![Total Downloads](https://poser.pugx.org/cracksalad/gearman-ide-helper/downloads)](https://packagist.org/packages/cracksalad/gearman-ide-helper)
[![License](https://poser.pugx.org/cracksalad/gearman-ide-helper/license)](https://packagist.org/packages/cracksalad/gearman-ide-helper)
[![PHP Version Require](https://poser.pugx.org/cracksalad/gearman-ide-helper/require/php)](https://packagist.org/packages/cracksalad/gearman-ide-helper)

This package contains IDE help files for [PECL Gearman extension](https://github.com/php/pecl-networking-gearman). It may be used for autocomplete in your IDE and type checking.
Note, that this package provides IDE helpers for the object oriented style of the Gearman extension only.

This package is up to date with **PECL Gearman extension version 2.2** and uses types **compatible with PHP 8.0+**. Additionally it uses type annotations based on [Psalm](https://psalm.dev/).

**This package is for you, if** you do not want to install gearmand (Gearman daemon) and the PECL Gearman extension in your development environment, but you do not want to abstain from type checking and IDE autocomplete.

## Installation

You should not use this package in production. Thereby add the `--dev` flag when requiring.

```bash
composer require --dev cracksalad/gearman-ide-helper
```

## Compatibility

|ext-gearman |gearman-ide-helper |
|------------|-------------------|
|2.1.x |1.0.x |
|2.2.x |1.1.x |

## License

This library is licensed under the MIT License. Please see [LICENSE](LICENSE) for more information.
