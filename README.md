# Credijusto PHP Coding Standards Fixer

This project adds default rules to [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer):

- **@Symfony**: true
- **array_syntax**: syntax => short
- **concat_space**: spacing => one
- **ordered_imports**: true

## Installation

```
composer require --dev credijusto/php-cs-fixer
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
