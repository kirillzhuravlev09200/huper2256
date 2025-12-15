<?php

declare(strict_types=1);

require __DIR__ . '/functions.php';

echo '1. Функция alphabeticalOrder:' . '<br>';
$result1 = alphabeticalOrder('alphabetical');
echo 'Входная строка: "alphabetical"' . '<br>';
echo 'Результат: "' . $result1 . '"' . '<br>';
echo '<br>';

echo '2. Функция findPerfectNumber:' . '<br>';
$numbers1 = [6, 28, 496, 12, 15];
$perfect1 = findPerfectNumber($numbers1);
echo 'Массив: [' . implode(', ', $numbers1) . ']' . '<br>';
echo 'Идеальное число: ' . ($perfect1 !== null ? $perfect1 : 'не найдено') . '<br>';
echo '<br>';

$numbers2 = [12, 15, 20, 28];
$perfect2 = findPerfectNumber($numbers2);
echo 'Массив: [' . implode(', ', $numbers2) . ']' . '<br>';
echo 'Идеальное число: ' . ($perfect2 !== null ? $perfect2 : 'не найдено') . '<br>';
echo '<br>';

echo '3. Функция mostRecent:' . '<br>';
$text1 = 'hello world hello php world hello';
$mostFrequent1 = mostRecent($text1);
echo 'Текст: "' . $text1 . '"' . '<br>';
echo 'Самое частое слово: "' . $mostFrequent1 . '"' . '<br>';
echo '<br>';

$text2 = 'the quick brown fox jumps over the lazy dog the fox';
$mostFrequent2 = mostRecent($text2);
echo 'Текст: "' . $text2 . '"' . '<br>';
echo 'Самое частое слово: "' . $mostFrequent2 . '"' . '<br>';
