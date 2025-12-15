<?php

declare(strict_types=1);

require __DIR__ . '/autoload.php';

use App\Database;
use App\UserCreator;

$dsn = 'sqlite:' . __DIR__ . '/data/users.db';
$database = new Database($dsn);
$creator = new UserCreator($database);

$creator->promptAndSave();

$users = $database->fetchUsers();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form method="post">
        <label>
            Имя: <input name="name" type="text">
        </label><br><br>

        <label>
            Email: <input name="email" type="email">
        </label><br><br>

        <button type="submit">Сохранить</button>
    </form>
    <hr>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?= htmlspecialchars($user['name']) ?> (<?= htmlspecialchars($user['email']) ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
