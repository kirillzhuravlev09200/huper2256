<?php

declare(strict_types=1);

require __DIR__ . '/autoload.php';

use Animals\cat;
use Animals\dog;
use Animals\zoo;

$zoo = new Zoo();
$zoo->addAnimal(new dog('Барбос', 4, 'Терьер'));
$zoo->addAnimal(new cat('Мурка', 2, 'Черный'));
$zoo->addAnimal(new dog('Рекс', 6, 'Овчарка'));

$zoo->listAnimals();
$zoo->animalSounds();
