<?php
class Cat extends Animal {
    private $color;

    public function __construct($name, $age, $color) {
        parent::__construct($name, $age, 'Кошка');
        $this->color = $color;
    }

    public function makeSound() {
        return "Мяу!";
    }

    public function getInfo() {
        return parent::getInfo() . ", Цвет: {$this->color}";
    }
}
php?>
