<?php

abstract class Animal {
    protected $name;
    protected $age;
    protected $species;

    public function __construct($name, $age, $species) {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }

    abstract public function makeSound();

    public function getInfo() {
        return "Имя: {$this->name}, Вид: {$this->species}, Возраст: {$this->age} лет";
    }
}

