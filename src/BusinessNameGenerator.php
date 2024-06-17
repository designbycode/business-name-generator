<?php

namespace Designbycode\BusinessNameGenerator;

class BusinessNameGenerator
{
    private int $amount;

    private array $names;

    /**
     * @param  array  $adjectives
     * @param  array  $nouns
     */
    public function __construct(public array $adjectives = [], public array $nouns = [])
    {
        $this->adjectives = $adjectives ?: (new Adjectives)->default();
        $this->nouns = $nouns ?: (new Nouns)->default();
        $this->amount = 1;
    }

    /**
     * @param  array|string  $adjectivesList
     * @return $this
     */
    public function setAdjectives(array|string $adjectivesList): self
    {
        $this->adjectives = is_array($adjectivesList) ? $adjectivesList : $this->adjectivesList($adjectivesList);

        return $this;
    }

    /**
     * @param  array|string  $nounsList
     * @return $this
     */
    public function setNouns(array|string $nounsList): self
    {
        $this->nouns = is_array($nounsList) ? $nounsList : $this->nounsList($nounsList);

        return $this;
    }

    /**
     * @param  int  $amount
     * @return $this
     */
    public function amount(int $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @param  string  $adjectivesCategory
     * @param  string  $nounsCategory
     * @return BusinessNameGenerator
     */
    public function generate(string $adjectivesCategory = 'default', string $nounsCategory = 'default'): self
    {
        $adjectives = $this->adjectivesList($adjectivesCategory);
        $nouns = $this->nounsList($nounsCategory);

        for ($i = 0; $i < $this->amount; $i++) {
            $adjective = $adjectives[array_rand($adjectives)];
            $noun = $nouns[array_rand($nouns)];
            $this->names[] = $adjective.' '.$noun;
        }

        return $this;
    }

    /**
     * Returns an array of generated business names.
     *
     * @return array
     *
     * @example
     * $generator = new BusinessNameGenerator();
     * $generator->generate();
     * $names = $generator->get(); // returns an array of generated business names
     */
    public function get(): array
    {
        return $this->names;
    }

    /**
     * Returns the last generated business name.
     *
     * @return string
     *
     * @example
     * $generator = new BusinessNameGenerator();
     * $generator->generate();
     * $last_name = $generator->last(); // returns the last generated business name
     */
    public function last(): string
    {
        return array_slice($this->names, -1)[0];
    }

    /**
     * Returns the first generated business name.
     *
     * @return string
     *
     * @example
     * $generator = new BusinessNameGenerator();
     * $generator->generate();
     * $first_name = $generator->first(); // returns the first generated business name
     */
    public function first(): string
    {
        return reset($this->names);
    }

    /**
     * Returns a random generated business name.
     *
     * @return string
     *
     * @example
     * $generator = new BusinessNameGenerator();
     * $generator->generate();
     * $random_name = $generator->random(); // returns a random generated business name
     */
    public function random(): string
    {
        return $this->names[array_rand($this->names)];
    }

    /**
     * Returns an array of random generated business names.
     *
     * @param  int  $number
     * @return array
     *
     * @example
     * $generator = new BusinessNameGenerator();
     * $generator->generate();
     * $randomNames = $generator->randomArray(3); // returns an array of 3 random generated business names
     */
    public function randomArray(int $number = 1): array
    {
        $array = $this->names;
        // Get random keys
        $randomKeys = array_rand($array, $number);

        // If you want to get the actual values, you can use array_map or array slicing
        $this->names = array_map(function ($key) use ($array) {
            return $array[$key];
        }, $randomKeys);

        return $this->names;
    }

    /**
     * Returns a string representation of the generated business names, separated by a given separator.
     *
     * @param  string  $separator
     * @return string
     *
     * @example
     * $generator = new BusinessNameGenerator();
     * $generator->generate();
     * $names_string = $generator->toString(', '); // returns a string representation of the generated business names, separated by commas
     */
    public function toString($separator = ', '): string
    {
        return implode($separator, $this->names);
    }

    /**
     * @param  string  $adjectivesCategory
     * @return array
     */
    private function adjectivesList(string $adjectivesCategory): array
    {
        return match (strtolower($adjectivesCategory)) {
            'funny' => (new Adjectives)->funny(),
            'playful' => (new Adjectives)->playful(),
            'color' => (new Adjectives)->color(),
            'all' => (new Adjectives)->all(),
            default => $this->adjectives,
        };
    }

    /**
     * @param  string  $nounsCategory
     * @return array
     */
    private function nounsList(string $nounsCategory): array
    {
        return match (strtolower($nounsCategory)) {
            'funny' => (new Nouns)->funny(),
            'playful' => (new Nouns)->playful(),
            'color' => (new Nouns)->color(),
            'all' => (new Nouns)->all(),
            default => $this->nouns,
        };
    }
}
