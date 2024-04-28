# Runway

A Laravel package to launch a preconfigured docker container for  Laravel application.

## Installation

```
composer require --dev pixelatedcraft/runway
php artisan vendor:publish --provider=Pixelatedcraft\\Runway\\RunwayServiceProvider
```

## Usage

Start the web application container:

```
php artisan runway:start
```

Stop the web application container:

```
php artisan runway:stop
```

## Currently using

1. PHP 8.3 with Apache
2. MariaDB
