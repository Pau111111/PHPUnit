# PHPUnit

PHPUnit is a programmer-oriented testing framework for PHP. It is an instance of the xUnit architecture for unit testing frameworks.

## Installation

We distribute a [PHP Archive (PHAR)](https://php.net/phar) that has all required (as well as some optional) dependencies of PHPUnit 9.1 bundled in a single file:

```bash
$ wget https://phar.phpunit.de/phpunit-nightly.phar

$ php phpunit-nightly.phar --version
```

Alternatively, you may use [Composer](https://getcomposer.org/) to download and install PHPUnit as well as its dependencies. Please refer to the "[Getting Started](https://phpunit.de/getting-started-with-phpunit.html)" guide for details on how to install PHPUnit.

Command to install PHPUnit: $ php composer.phar require --dev phpunit/phpunit ^9
