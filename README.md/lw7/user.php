<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class User
{
    private string $name;
    private string $email;

    public function __construct(string $name, string $email)
    {
        $this->name = trim($name);
        $this->email = trim($email);

        $this->validate();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    private function validate(): void
    {
        if ($this->name === '') {
            throw new InvalidArgumentException('Имя не может быть пустым');
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Email некорректен');
        }
    }
}
