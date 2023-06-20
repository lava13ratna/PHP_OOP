<?php
class Account{
	private $customer;
	private $accountNo;
	private $balance;
	public static $annualInterestRate=4;
	
	public function __construct($cus,$num,$bal){
		$this->customer=$cus;
		$this->accountNo=$num;
		$this->balance=$bal;
	}
	public function setInitialBalance($amount){
		$this->balance=$amount;
	}
	public function getBalance(){
		return $this->balance;
	}
	public function deposite($amount){
		$this->balance+=$amount;
	}
	public function withdrawal($amount){
		$this->balance-=$amount;
	}
	public function calculateMonthlyInterest(){
		$interest=((self::$annualInterestRate/100)*$this->balance)/12;
		$this->balance += $interest;
        return $interest;
	}
	public static function modifyInterestRate($rate){
		self::$annualInterestRate=$rate;
	}
	
}
$Acc1 = new Account("Saver1", "123456", 2000.00);
$Acc2 = new Account("Saver2", "987654", 3000.00);

echo "Initial balances of two severs are:<br>";
echo "saver 1 bal: ".$Acc1->getBalance()."<br>";
echo "saver2 bal: ".$Acc2->getBalance()."<br>";

// Set annualInterestRate to 4% and calculate monthly interest
Account::modifyInterestRate(4);
$interest1 = $Acc1->calculateMonthlyInterest();
$interest2 = $Acc2->calculateMonthlyInterest();
echo "After 1st Month (4% interest):<br>";
echo "Saver1 balance: $" . $Acc1->getBalance() . " (Interest: $" . $interest1 . ")<br>";
echo "Saver2 balance: $" . $Acc2->getBalance() . " (Interest: $" . $interest2 . ")<br>";

// Set annualInterestRate to 4% and calculate monthly interest
Account::modifyInterestRate(5);
$interest1 = $Acc1->calculateMonthlyInterest();
$interest2 = $Acc2->calculateMonthlyInterest();
echo "After 2nd Month (5% interest):<br>";
echo "Saver1 balance: $" . $Acc1->getBalance() . " (Interest: $" . $interest1 . ")<br>";
echo "Saver2 balance: $" . $Acc2->getBalance() . " (Interest: $" . $interest2 . ")<br>";
?>
