<?php

declare(strict_types=1);

namespace Animals;

class Cat extends Animal
{
    private string $color;

    public function __construct(string $name, int $age, string $color)
    {
        parent::__construct($name, $age, 'Кошка');
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function makeSound(): void
    {
        echo $this->getName() . ' говорит: Мяу!' . '<br>';
    }
}
