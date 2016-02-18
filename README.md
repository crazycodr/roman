ROMAN
=====

[![Latest Version](https://img.shields.io/github/release/crazycodr/roman.svg?style=flat-square)](https://github.com/crazycodr/roman/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/crazycodr/roman/master.svg?style=flat-square)](https://travis-ci.org/crazycodr/roman)
[![HHVM Status](https://img.shields.io/hhvm/league/csv.svg?style=flat-square)](http://hhvm.h4cc.de/package/league/csv)
[![Total Downloads](https://img.shields.io/packagist/dt/crazycodr/roman.svg?style=flat-square)](https://packagist.org/packages/league/csv)

Roman is a simple library to convert numbers from decimal to roman and vice versa.

Usage
-------

```php
$converter = new CrazyCodr\Converters\Roman();
$roman = $converter->toRoman(4999); //Outputs MMMMCMXCIX
$number = $converter->fromRoman('MMMMCMXCIX'); //Outputs 4999
```

System Requirements
-------

You need **PHP >= 5.0** although you should be using at least **PHP >= 5.6** by now!

Note that this library is only tested against PHP 5.6, 7.0 and HHVM but should work in any version!

Install
-------

Install `Roman` using Composer.

```
$ composer require crazycodr/roman
```

Testing
-------

`Roman` has a [PHPUnit](https://phpunit.de) test suite and a coding style compliance test suite using [PHP CS Fixer](http://cs.sensiolabs.org/). To run the tests, run the following command from the project folder.

``` bash
$ composer test
```

License
-------

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.

[PSR-2]: http://www.php-fig.org/psr/psr-2/
[PSR-4]: http://www.php-fig.org/psr/psr-4/
