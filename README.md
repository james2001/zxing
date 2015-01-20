[![SensioLabsInsight](https://insight.sensiolabs.com/projects/f49ca80c-455f-43e8-87cd-8a248dd7ba30/mini.png)](https://insight.sensiolabs.com/projects/f49ca80c-455f-43e8-87cd-8a248dd7ba30)
PHP QRcode reader (zxing)
=========================

Call [zxing](https://github.com/zxing/zxing/) (code barre reader) in php

Requirement
-----------

This library package requires PHP 5.3 or later and java.

If you want to use it very easily, you should consider installing [composer](http://getcomposer.org) on your system.
It is not mandatory though.

Setup
-----

- With composer *(recommended)*

Add the following line to the `composer.json` of your project and launch composer install command

```json
{
    "require": {
        "james001/zxing": "~1.0"
    }
}
```

Launch install from your project root with:

```shell
composer install --no-dev --prefer-dist
```

Tests
-----

This library is fully unit tested, and uses [PHPUnit](https://phpunit.de/getting-started.html) to launch the tests.

Once you installed the dev dependencies, launch the test suite with the following command:
    
```shell
./vendor/bin/phpunit tests
```
