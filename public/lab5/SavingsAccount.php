<?php
require_once 'BankAccount.php';

class SavingsAccount extends BankAccount {
    public static float $interestRate = 0.03; // 3% річних

    public function applyInterest() {
        $interest = $this->balance * self::$interestRate;
        $this->balance += $interest;
    }
}
?>