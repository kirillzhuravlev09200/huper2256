<?php

class Zoo {
    private $animals = [];

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    public function listAnimals() {
        foreach ($this->animals as $animal) {
            echo $animal->getInfo() . PHP_EOL;
        }
    }

    public function animalSounds() {
        foreach ($this->animals as $animal) {
            echo "{$animal->getInfo()} издает звук: {$animal->makeSound()}" . PHP_EOL;
        }
    }
}
?>
