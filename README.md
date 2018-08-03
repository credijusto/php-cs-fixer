# Credijusto PHP Coding Standards Fixer

This project adds default rules to [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer):

- **@Symfony**: true
- **array_syntax**: syntax => short
- **concat_space**: spacing => one
- **ordered_imports**: true
- **phpdoc_order**: true
- **phpdoc_align**: false
- **yoda_style**: false

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

## Resolving link issue on aurum and client-portal

```

```

* Go to [Settings](https://github.com/settings/profile) -> [Developer settings](https://github.com/settings/developers) -> [Personal access tokens](https://github.com/settings/tokens) -> [Generate new token](https://github.com/settings/tokens/new)
* Add a name for the token
* Add all repo permissions
* Click on `Generate token`
* Copy your token

### On terminal

Run the command
```
composer config -g github-oauth.github.com your_token_from_da_jel
```
