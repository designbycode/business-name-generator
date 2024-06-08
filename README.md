# Business Name Generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/designbycode/business-name-generator.svg?style=flat-square)](https://packagist.org/packages/designbycode/business-name-generator)
[![Tests](https://img.shields.io/github/actions/workflow/status/designbycode/business-name-generator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/designbycode/business-name-generator/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/designbycode/business-name-generator.svg?style=flat-square)](https://packagist.org/packages/designbycode/business-name-generator)

The BusinessNameGenerator package is designed to help you generate creative and unique business names by combining adjectives and nouns from various categories. The package provides default, funny, playful, and color-related lists for both adjectives and nouns, giving you plenty of options to create a memorable business name.

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
$businessName = $generator->generate('default', 'funny');
echo $businessName;  // Example output: "Innovative Banana"
```

### Custom Adjectives and Nouns 
You can also provide your own lists of adjectives and nouns:

```php 
$customAdjectives = ["Cool", "Amazing", "Super"];
$customNouns = ["Shop", "Hub", "Center"];

$generator = new BusinessNameGenerator($customAdjectives, $customNouns);

$businessName = $generator->generate();
echo $businessName;  // Example output: "Super Shop"

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
