<?php

use Designbycode\BusinessNameGenerator\Adjectives;
use Designbycode\BusinessNameGenerator\BusinessNameGenerator;
use Designbycode\BusinessNameGenerator\Nouns;

beforeEach(function () {
    $this->adjectives = ['Funny', 'Playful', 'Colorful'];
    $this->nouns = ['Cat', 'Dog', 'Elephant'];
    $this->generator = new BusinessNameGenerator($this->adjectives, $this->nouns);
});


it('can generates a business name with custom adjectives and nouns', function () {
    $businessName = $this->generator->generate()->first();
    $parts = explode(' ', $businessName);
    expect($parts)->toHaveCount(2)
        ->and($this->adjectives)->toContain($parts[0])
        ->and($this->nouns)->toContain($parts[1]);
});


it('can generates a business name using funny adjectives and nouns', function () {

    $parts = explode(' ', $this->generator->generate('funny', 'funny')->first());

    $funnyAdjectives = (new Adjectives)->funny();
    $funnyNouns = (new Nouns)->funny();

    expect($parts)->toHaveCount(2)
        ->and($funnyAdjectives)->toContain($parts[0])
        ->and($funnyNouns)->toContain($parts[1]);
});

it('can sets custom adjectives and nouns after instantiation', function () {
    $customAdjectives = ['Bright', 'Shiny'];
    $customNouns = ['Star', 'Galaxy'];
    $this->generator->setAdjectives($customAdjectives);
    $this->generator->setNouns($customNouns);

    $businessName = $this->generator->generate()->first();
    $parts = explode(' ', $businessName);

    expect($parts)->toHaveCount(2)
        ->and($customAdjectives)->toContain($parts[0])
        ->and($customNouns)->toContain($parts[1]);
});

it('can generates multiple business names', function () {
    $amount = 10;
    $names = $this->generator->amount(10)->generate('funny', 'color')->get();

    // Assert that the returned value is an array
    expect($names)->toBeArray()
        ->and($names)->toHaveCount($amount);

    // Assert that the array contains the correct number of names

    // Assert that each element in the array is a string
    foreach ($names as $name) {
        expect($name)->toBeString();
    }
});

it('can generates names using specified categories', function () {
    // Assuming you have specific methods in Adjectives and Nouns classes for these categories
    $amount = 5;
    $names = $this->generator->amount(5)->generate()->get();

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



it('can generate single name', function () {
    expect($this->generator->generate()->first())
        ->toBeString();
});

it('can generate multiple names', function () {
    expect($this->generator->amount(5)->generate()->get())
        ->toBeArray()
        ->toHaveCount(5);
});

it('can set adjectives and generate name', function () {
    expect($this->generator->setAdjectives(['happy'])->generate()->first())
        ->toContain('happy');
});

it('can set nous and generate name', function () {
    expect($this->generator->setNouns(['happy'])->generate()->first())
        ->toContain('happy');
});

it('can set adjectives, nous and generate name', function () {
    expect($this->generator->setNouns(['camper'])->setAdjectives(['happy'])->generate()->first())
        ->toEqual('happy camper');
});

it('can use string as parameter for Adjectives', function () {
        expect($this->generator->setAdjectives('color')->generate()->first())
            ->toBeString();
});

it('can use array as parameter for Adjectives', function () {
        expect($this->generator->setAdjectives(['silver', 'gold'])->generate()->first())
            ->toBeString();
});


