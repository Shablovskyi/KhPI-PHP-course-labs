<?php
require_once 'account_interface.php';

class BankAccount implements AccountInterface {
    const MIN_BALANCE = 0;

    protected float $balance;
    protected string $currency;

    public function __construct($initialBalance, $currency = "USD") {
        if ($initialBalance < self::MIN_BALANCE) {
            throw new Exception("Початковий баланс не може бути меншим за " . self::MIN_BALANCE);
        }
        $this->balance = $initialBalance;
        $this->currency = $currency;
    }

    public function deposit($amount) {
        if ($amount <= 0) {
            throw new Exception("Сума для поповнення повинна бути додатною.");
        }
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= 0) {
            throw new Exception("Сума для зняття повинна бути додатною.");
        }
        if ($amount > $this->balance) {
            throw new Exception("Недостатньо коштів.");
        }
        $this->balance -= $amount;
    }

    public function getBalance() {
        return $this->balance . " " . $this->currency;
    }
}
?>