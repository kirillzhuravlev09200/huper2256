<?php

declare(strict_types=1);

require __DIR__ . '/autoload.php';

use Animals\Cat;
use Animals\Dog;
use Animals\Zoo;

$zoo = new Zoo();
$zoo->addAnimal(new Dog('Барбос', 4, 'Терьер'));
$zoo->addAnimal(new Cat('Мурка', 2, 'Черный'));
$zoo->addAnimal(new Dog('Рекс', 6, 'Овчарка'));

$zoo->listAnimals();
$zoo->animalSounds();
