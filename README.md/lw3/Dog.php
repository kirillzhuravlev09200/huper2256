<?php

declare(strict_types=1);

namespace Animals;

class Dog extends Animal
{
    private string $breed;

    public function __construct(string $name, int $age, string $breed)
    {
        parent::__construct($name, $age, 'Собака');
        $this->breed = $breed;
    }

    public function getBreed(): string
    {
        return $this->breed;
    }

    public function makeSound(): void
    {
        echo $this->getName() . ' говорит: Гав-гав!' . '<br>';
    }
}
