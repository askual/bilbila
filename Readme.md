# Bilbila

Bilbila is a simple PHP library that analyzes a given phone number and gives necessary info about it. If you are wondering why we developed this library you can read our blog article [here](https://askual.com/blog/the-case-for-bilbila)

Bilbila requires PHP >= 5.3.3.

[![Bilbila Logo](https://img.askual.com/bilbila.png)]

# Table of Contents

- [Installation](#installation)
- [Basic Usage](#basic-usage)
- [Properties](#properties)
- [License](#license)


## Installation

```sh
composer require askual/bilbila
```

## Basic Usage

Use `Askual\Bilbila\Generate($phoneNumber)` to create a bilbila object.

```php
<?php
// require the Faker autoloader
require_once '/path/to/Bilbila/src/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$number = '251925287357';
$bilbila = Askual\Bilbila\Generate($number);

// generate data by accessing properties
echo $bilbila->number;
  // '+251825287357';
echo $bilbila->country;
  // 'eth'
```

## Properties

Each of the generator properties (like `name`, `address`, and `lorem`) are called "formatters". A faker generator has many of them, packaged in "providers". Here is a list of the bundled formatters in the default locale.

    randomDigit             // 7
    randomDigitNotNull      // 5
    randomNumber($nbDigits = NULL, $strict = false) // 79907610

## License

Bilbila is released under the MIT Licence. See the bundled LICENSE file for details.
