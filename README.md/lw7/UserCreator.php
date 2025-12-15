<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class UserCreator
{
    public function __construct(private Database $database)
    {
    }

    public function promptAndSave(): void
    {
        $this->database->ensureUsersTable();

        $name = $this->prompt('Имя');
        $email = $this->prompt('Email');

        try {
            $user = new User($name, $email);
            $this->database->insertUser($user);
            echo 'Пользователь добавлен: ' . $user->getName() . ' <' . $user->getEmail() . '>' . '<br>';
        } catch (InvalidArgumentException $exception) {
            echo 'Ошибка: ' . $exception->getMessage() . '<br>';
        }
    }

    private function prompt(string $label): string
    {
        if (PHP_SAPI !== 'cli') {
            return [
                'Имя'   => $_POST['name']  ?? '',
                'Email' => $_POST['email'] ?? '',
            ][$label] ?? '';
        }

        echo $label . ': ';
        return trim(fgets(STDIN));
    }
}
