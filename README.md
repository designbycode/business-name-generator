# Business Name Generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/designbycode/business-name-generator.svg?style=flat-square)](https://packagist.org/packages/designbycode/business-name-generator)
[![Tests](https://img.shields.io/github/actions/workflow/status/designbycode/business-name-generator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/designbycode/business-name-generator/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/designbycode/business-name-generator.svg?style=flat-square)](https://packagist.org/packages/designbycode/business-name-generator)


## Overview
The Business Name Generator is a PHP class that generates business names based on a combination of adjectives and nouns. It provides a flexible and customizable way to generate business names that can be used for various purposes.

## Business Name Generator Documentation
## Installation

You can install the package via composer:

```bash
composer require designbycode/business-name-generator
```

## Usage
### Basic Usage

```php
require 'vendor/autoload.php';

use Designbycode\BusinessNameGenerator\BusinessNameGenerator;
use Designbycode\BusinessNameGenerator\Nouns;
use Designbycode\BusinessNameGenerator\Adjectives;

// Create a new BusinessNameGenerator instance
$generator = new BusinessNameGenerator();

// Generate a business name using default adjectives and funny nouns
$businessName = $generator->generate('default', 'funny')->first();
echo $businessName;  // Example output: "Innovative Banana"
```

## Generating Business Names
To generate business names, use the generate() method:
```php
$generator->generate();
```

This will generate an array of business names based on the adjectives and nouns set earlier. You can access the generated names using the get() method:

```php
$names = $generator->get();
```
## Customizing the Generation Process
You can customize the generation process by specifying the category of adjectives and nouns to use. For example:

```php
$generator->generate('funny', 'playful');
```
> This will generate business names using funny adjectives and playful nouns.

## Retrieving Specific Names
You can retrieve specific names from the generated list using the following methods:
```php
$last_name = $generator->last(); // returns the last generated business name
$first_name = $generator->first(); // returns the first generated business name
$random_name = $generator->random(); // returns a random generated business name
```
You can also retrieve an array of random names using the randomArray() method:

```php
$random_names = $generator->randomArray(3); // returns an array of 3 random generated business names
```

## Converting to String
You can convert the generated names to a string using the toString() method:

```php
$names_string = $generator->toString(', '); // returns a string representation of the generated business names, separated by commas
```


### Setting Adjectives and Nouns
You can set the adjectives and nouns to use for generating business names using the following methods. You can also provide your own lists of adjectives and nouns:

```php 
$businessName = new BusinessNameGenerator();
$businessName
    ->setAdjectives(['Innovative', 'Creative', 'Dynamic'])
    ->setNouns(['Solutions', 'Technologies', 'Ventures'])
    ->generate()
    ->first()

echo $businessName;  // Example output: "Creative Solutions"

```
Alternatively, you can pass an array of adjectives and nouns to the constructor:

```php
$businessName = new BusinessNameGenerator(['Innovative', 'Creative', 'Dynamic'], ['Solutions', 'Technologies', 'Ventures']);

$businessName->generate()->first() // Example output: "Creative Solutions"
```


### Using Specific Categories
You can generate business names based on specific categories of adjectives and nouns:

```php 
$generator = new BusinessNameGenerator();

// Generate a business name using playful adjectives and color-related nouns
$businessName = $generator->generate('playful', 'color');
echo $businessName;  // Example output: "Cheerful Blue"
```

## Adjective and Noun Categories
### Adjective Categories
- default: Standard business-related adjectives.
- funny: Whimsical and humorous adjectives.
- playful: Light-hearted and playful adjectives.
- color: Color-related adjectives.
- all: A combination of all the above categories.

### Noun Categories
- default: Standard business-related nouns.
- funny: Whimsical and humorous nouns.
- playful: Light-hearted and playful nouns.
- color: Color-related nouns.
- all: A combination of all the above categories.

### Extending the Lists
If you want to extend the list of adjectives or nouns, you can create your own classes that implement the HasGeneratorLists interface.

```php 
namespace YourNamespace;

use Designbycode\BusinessNameGenerator\HasGeneratorLists;

class CustomAdjectives implements HasGeneratorLists
{
    public function default(): array
    {
        return ["Energetic", "Bold", "Brilliant"];
    }

    public function funny(): array
    {
        return ["Zany", "Wacky", "Goofy"];
    }

    public function playful(): array
    {
        return ["Bouncy", "Jovial", "Perky"];
    }

    public function color(): array
    {
        return ["Crimson", "Amber", "Sapphire"];
    }
}

```

Then use your custom class with the BusinessNameGenerator:

```php

use Designbycode\BusinessNameGenerator\BusinessNameGenerator;
use YourNamespace\CustomAdjectives;
use Designbycode\BusinessNameGenerator\Nouns;

$generator = new BusinessNameGenerator((new CustomAdjectives())->default(), (new Nouns())->default());

$businessName = $generator->generate('default', 'default');
echo $businessName;  // Example output: "Energetic Solutions"


````

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Claude Myburgh](https://github.com/claudemyburgh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
