<?php

declare(strict_types=1);

namespace App;

use PDO;
use PDOException;

class Database
{
    private PDO $pdo;

    public function __construct(string $dsn, string $username = '', string $password = '', array $options = [])
    {
        $default = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        $this->pdo = new PDO($dsn, $username, $password, $options + $default);
    }

    public function fetchUsers(): array
    {
        return $this->pdo->query('SELECT id, name, email FROM users')->fetchAll();
    }

    public function insertUser(User $user): void
    {
        $statement = $this->pdo->prepare('INSERT INTO users (name, email) VALUES (:name, :email)');
        $statement->execute([
            ':name' => $user->getName(),
            ':email' => $user->getEmail(),
        ]);
    }

    public function ensureUsersTable(): void
    {
        $this->pdo->exec(
            'CREATE TABLE IF NOT EXISTS users (' .
            'id INTEGER PRIMARY KEY AUTOINCREMENT,' .
            'name TEXT NOT NULL,' .
            'email TEXT NOT NULL UNIQUE' .
            ')'
        );
    }
}
