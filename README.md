# Gearman IDE helper

This package contains IDE help files for [PECL Gearman extension](https://github.com/php/pecl-networking-gearman). It may be used for autocomplete in your IDE and type checking. 

This package is up to date with **PECL Gearman extension version 2.1** and uses types **compatible with PHP 8.0+**. Additionally it uses type annotations based on [Psalm](https://psalm.dev/).

**This package is for you, if** you do not want to install gearmand (Gearman daemon) and the PECL Gearman extension in your development environment, but you do not want to abstain from type checking and IDE autocomplete.

## Installation

You should not use this package in production. Thereby add the `--dev` flag when requiring.

```bash
composer require --dev cracksalad/gearman-ide-helper
```