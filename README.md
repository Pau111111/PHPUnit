# PHPUnit

PHPUnit is a programmer-oriented testing framework for PHP. It is an instance of the xUnit architecture for unit testing frameworks.

## Installation

There is distributed a [PHP Archive (PHAR)](https://php.net/phar) that has all required (as well as some optional) dependencies of PHPUnit 9.1 bundled in a single file:

```bash
$ wget https://phar.phpunit.de/phpunit-nightly.phar

$ php phpunit-nightly.phar --version
```

Alternatively, you may use [Composer](https://getcomposer.org/) to download and install PHPUnit as well as its dependencies. Please refer to the "[Getting Started](https://phpunit.de/getting-started-with-phpunit.html)" guide for details on how to install PHPUnit.

Command to install PHPUnit:
``` bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
and
``` bash
php composer.phar update
```
or

``` bash
$ php composer.phar require --dev phpunit/phpunit ^9
```

Commands to execute PHPUnit operations:

You must tell with the command what class you will use in the test file
``` bash
$ ./vendor/bin/phpunit --bootstrap ./app/Util.php ./tests/app/UtilTest.php --color
```