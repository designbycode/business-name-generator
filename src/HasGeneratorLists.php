<?php

namespace Designbycode\BusinessNameGenerator;

interface HasGeneratorLists
{
    public function default(): array;

    public function funny(): array;

    public function playful(): array;

    public function color(): array;
}
