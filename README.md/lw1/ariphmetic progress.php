<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    if (($b - $a) === ($c - $b)) {
        echo "числа являются членами арифметической прогрессии";
    } else {
        echo "числа не являются членами арифметической прогрессии";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="">
        <input type="text" name="a" placeholder="Введите число">
        <input type="text" name="b" placeholder="Введите число">
        <input type="text" name="c" placeholder="Введите число">
        <input type="submit" name="submit">
    </form>
</body>

</html>
