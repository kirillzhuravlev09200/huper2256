<?php

declare(strict_types=1);

require __DIR__ . '/autoload.php';

use Bank\BankAccount;
use Bank\Exceptions\InsufficientFundsException;
use Bank\Exceptions\InvalidAmountException;

try {
    $account = new BankAccount(100.0);
    echo 'Начальный баланс: ' . $account->getBalance() . "<br>";

    $account->deposit(50);
    echo 'После пополнения: ' . $account->getBalance() . "<br>";

    $account->withdraw(30);
    echo 'После снятия 30: ' . $account->getBalance() . "<br>";

    $account->withdraw(200);
} catch (InvalidAmountException | InsufficientFundsException $exception) {
    echo 'Ошибка: ' . $exception->getMessage() . '<br>';
}
