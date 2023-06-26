<?php

declare(strict_types=1);

class Account
{

    protected $name;
    protected $acctNum;
    protected $deposits = array();
    protected $withdrawls;
    protected $balance = 0;

    public function __construct(string $name, int $acctNum)
    {
        $this->name = $name;
        $this->acctNum = $acctNum;
    }
    public function SetName(string $name)
    {
        $this->name = $name;
    }
    public function SetAcctNum(int $acctNum)
    {
        $this->acctNum = $acctNum;
    }
    private function SetBalance(float $balance)
    {
        $this->balance = $balance;
    }
    public function  GetName(): string
    {
        return $this->name;
    }
    public function GetAcctNum(): int
    {
        return $this->acctNum;
    }
    public function GetBalance(): float
    {
        return $this->balance;
    }
    public function GetWithdrawls(): void
    {
        echo ("Withdrawls:");
        echo ("<BR>");
        foreach ($this->withdrawls as ["Amount" => $amount, "Date" => $date]) {
            echo ("Date: " . $date . " Amount: -" . $amount);
            echo ("<BR>");
        }
    }
    public function GetDeposits(): void
    {
        echo ("Deposits:");
        echo ("<BR>");
        foreach ($this->deposits as ["Amount" => $amount, "Date" => $date]) {
            echo ("Date: " . $date . " Amount: " . $amount);
            echo ("<BR>");
        }
    }
    public function Deposit(float $amount, string $date): void
    {
        $this->deposits[] = array("Amount" => $amount, "Date" => $date);
        $this->balance += $amount;
    }
    public function Withdrawl(float $amount, string $date): void
    {
        $this->withdrawls[] = array("Amount" => $amount, "Date" => $date);
        $this->balance -= $amount;
    }
}
?>