<?php

declare(strict_types=1);

namespace Animals;

abstract class Animal
{
    private string $name;
    private int $age;
    private string $species;

    public function __construct(string $name, int $age, string $species)
    {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSpecies(): string
    {
        return $this->species;
    }

    abstract public function makeSound(): void;
}
