<?php
require_once 'BankAccount.php';
require_once 'SavingsAccount.php';

echo "<pre>";

try {
    $acc1 = new BankAccount(100);
    $acc1->deposit(50);
    $acc1->withdraw(30);
    echo "Баланс рахунку 1: " . $acc1->getBalance() . "\n";

    $acc2 = new SavingsAccount(200, "EUR");
    $acc2->deposit(100);
    $acc2->applyInterest();
    echo "Баланс накопичувального рахунку: " . $acc2->getBalance() . "\n";

    // Спроба зняти більше, ніж є
    $acc1->withdraw(200);
} catch (Exception $e) {
    echo "Помилка: " . $e->getMessage() . "\n";
}

try {
    // Спроба поповнення на від’ємну суму
    $acc2->deposit(-50);
} catch (Exception $e) {
    echo "Помилка: " . $e->getMessage() . "\n";
}

try {
    // Неправильний початковий баланс
    $acc3 = new BankAccount(-10);
} catch (Exception $e) {
    echo "Помилка при створенні рахунку: " . $e->getMessage() . "\n";
}

echo "</pre>";
?>