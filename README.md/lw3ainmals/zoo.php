<?php

declare(strict_types=1);

namespace Animals;

class Zoo
{
    private array $animals = [];

    public function addAnimal(Animal $animal): void {
    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function listAnimals(): void {
    public function listAnimals(): void
    {
        echo 'Животные в зоопарке:' . '<br>';
        foreach ($this->animals as $animal) {
            echo sprintf(
                '- %s (%s), возраст %d' . '<br>',
                $animal->getName(),
                $animal->getSpecies(),
                $animal->getAge()
            );
        }
    }

    public function animalSounds(): void {
    public function animalSounds(): void
    {
        echo '<br>' . 'Звуки животных:' . '<br>';
        foreach ($this->animals as $animal) {
            $animal->makeSound();
        }
    }
}
