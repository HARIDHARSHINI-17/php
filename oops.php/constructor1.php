<?php

class BankAccount
{
	public $accountNumber;
	public $balance;

	public function __construct($accountNumber, $balance)
	{
		$this->accountNumber = $accountNumber;
		$this->balance = balance;
	}	
}
$account = new BankAccount(1,1000);
echo $account->accountNumber;
echo $account->$balance;
?>
