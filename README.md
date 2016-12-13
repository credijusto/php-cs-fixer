# Credijusto PHP Coding Standards Fixer

This project adds default rules to [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer):

- **@Symfony**: true
- **array_syntax**: syntax => short
- **concat_space**: spacing => one
- **ordered_imports**: true
- **phpdoc_order**: true
- **phpdoc_align**: false

## Installation
Add this repository to `composer.json`:

```
...
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/credijusto/php-cs-fixer"
    }
],
...
```

Then install it:

```
composer require --dev credijusto/php-cs-fixer=dev-master
```

## Configuration

Configure your `.php_cs` file as described in [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) documentation and replace the `PhpCsFixer\Config` class for `Credijusto\PhpCsFixer\Config`:


```php
<?php
// ...
return Credijusto\PhpCsFixer\Config::create()
    ->setFinder($finder)
    // ...
;
```

## Usage

```
vendor/bin/php-cs-fixer fix
```
