<?php

namespace Designbycode\BusinessNameGenerator;

class BusinessNameGenerator
{
    public function __construct(public array $adjectives = [], public array $nouns = [])
    {
        $this->adjectives = $adjectives ?: (new Adjectives())->default();
        $this->nouns = $nouns ?: (new Nouns())->default();
    }

    public function setAdjectives(array $adjectivesList): void
    {
        $this->adjectives = $adjectivesList;
    }

    public function setNouns(array $nounsList): void
    {
        $this->nouns = $nounsList;
    }

    public function generate(string $adjectivesCategory = 'default', string $nounsCategory = 'default'): string
    {
        $adjectives = match (strtolower($adjectivesCategory)) {
            'funny' => (new Adjectives())->funny(),
            'playful' => (new Adjectives())->playful(),
            'color' => (new Adjectives())->color(),
            'all' => (new Adjectives())->all(),
            default => $this->adjectives,
        };

        $nouns = match (strtolower($nounsCategory)) {
            'funny' => (new Nouns())->funny(),
            'playful' => (new Nouns())->playful(),
            'color' => (new Nouns())->color(),
            'all' => (new Nouns())->all(),
            default => $this->nouns,
        };

        $adjective = $adjectives[array_rand($adjectives)];
        $noun = $nouns[array_rand($nouns)];

        return $adjective.' '.$noun;
    }
}
