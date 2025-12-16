<?php

class Dog extends Animal {
    private $breed;

    public function __construct($name, $age, $breed) {
        parent::__construct($name, $age, 'Собака');
        $this->breed = $breed;
    }

    public function makeSound() {
        return "Гав-гав!";
    }

    public function getInfo() {
        return parent::getInfo() . ", Порода: {$this->breed}";
    }
}
?>
