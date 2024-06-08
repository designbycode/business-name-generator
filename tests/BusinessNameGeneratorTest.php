<?php

use Designbycode\BusinessNameGenerator\Adjectives;
use Designbycode\BusinessNameGenerator\BusinessNameGenerator;
use Designbycode\BusinessNameGenerator\Nouns;

beforeEach(function () {
    $this->adjectives = ['Funny', 'Playful', 'Colorful'];
    $this->nouns = ['Cat', 'Dog', 'Elephant'];
    $this->generator = new BusinessNameGenerator($this->adjectives, $this->nouns);
});

it('generates a business name using default lists', function () {
    $generator = new BusinessNameGenerator;
    $businessName = $generator->generate();
    expect($businessName)->toBeString();
});

it('generates a business name with custom adjectives and nouns', function () {
    $customAdjectives = ['Cool', 'Amazing', 'Super'];
    $customNouns = ['Shop', 'Hub', 'Center'];
    $generator = new BusinessNameGenerator($customAdjectives, $customNouns);

    $businessName = $generator->generate();
    $parts = explode(' ', $businessName);

    expect($parts)->toHaveCount(2)
        ->and($customAdjectives)->toContain($parts[0])
        ->and($customNouns)->toContain($parts[1]);
});


it('generates a business name using funny adjectives and nouns', function () {
    $generator = new BusinessNameGenerator;

    $businessName = $generator->generate('funny', 'funny');
    $parts = explode(' ', $businessName);

    $funnyAdjectives = (new Adjectives)->funny();
    $funnyNouns = (new Nouns)->funny();

    expect($parts)->toHaveCount(2)
        ->and($funnyAdjectives)->toContain($parts[0])
        ->and($funnyNouns)->toContain($parts[1]);
});

it('sets custom adjectives and nouns after instantiation', function () {
    $generator = new BusinessNameGenerator;

    $customAdjectives = ['Bright', 'Shiny'];
    $customNouns = ['Star', 'Galaxy'];
    $generator->setAdjectives($customAdjectives);
    $generator->setNouns($customNouns);

    $businessName = $generator->generate();
    $parts = explode(' ', $businessName);

    expect($parts)->toHaveCount(2)
        ->and($customAdjectives)->toContain($parts[0])
        ->and($customNouns)->toContain($parts[1]);
});

test('it generates multiple business names', function () {
    $amount = 10;
    $names = $this->generator->generateMultiple('default', 'default', $amount);

    // Assert that the returned value is an array
    expect($names)->toBeArray()
        ->and($names)->toHaveCount($amount);

    // Assert that the array contains the correct number of names

    // Assert that each element in the array is a string
    foreach ($names as $name) {
        expect($name)->toBeString();
    }
});

test('it generates names using specified categories', function () {
    // Assuming you have specific methods in Adjectives and Nouns classes for these categories
    $amount = 5;
    $names = $this->generator->generateMultiple('playful', 'default', $amount);

    // Assert that the returned value is an array
    expect($names)->toBeArray()
        ->and($names)
        ->toHaveCount($amount);

    // Assert that the array contains the correct number of names

    // Assert that each element in the array is a string
    foreach ($names as $name) {
        expect($name)->toBeString();
    }
});
