<?php

use Designbycode\BusinessNameGenerator\Adjectives;
use Designbycode\BusinessNameGenerator\BusinessNameGenerator;
use Designbycode\BusinessNameGenerator\Nouns;

it('generates a business name using default lists', function () {
    $generator = new BusinessNameGenerator();
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

it('generates a business name using playful adjectives and color-related nouns', function () {
    $generator = new BusinessNameGenerator();

    $businessName = $generator->generate('playful', 'color');
    $parts = explode(' ', $businessName);

    $playfulAdjectives = (new Adjectives())->playful();
    $colorNouns = (new Nouns())->color();

    expect($parts)->toHaveCount(2)
        ->and($playfulAdjectives)->toContain($parts[0])
        ->and($colorNouns)->toContain($parts[1]);
});

it('generates a business name using funny adjectives and nouns', function () {
    $generator = new BusinessNameGenerator();

    $businessName = $generator->generate('funny', 'funny');
    $parts = explode(' ', $businessName);

    $funnyAdjectives = (new Adjectives())->funny();
    $funnyNouns = (new Nouns())->funny();

    expect($parts)->toHaveCount(2)
        ->and($funnyAdjectives)->toContain($parts[0])
        ->and($funnyNouns)->toContain($parts[1]);
});

it('sets custom adjectives and nouns after instantiation', function () {
    $generator = new BusinessNameGenerator();

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
