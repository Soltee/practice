<?php
/***********************
	* 1st Question Solution
***********************/
class BankAccount{
	public $id;
	public $bank;
	public $account_number;
	public $balance;
	public $statement_file_url;
	public $owner;
	public $gender;
	public $dob;
	public $created_on;

	public function __construct($id, $bank, $account_number, $balance, $statement_file_url, $owner, $gender, $dob)
	{
		$this->id 				 	 =		$id;
		$this->bank 				 =		$bank;
		$this->account_number 		 =		$account_number;
		$this->balance 		 		 =		$balance;
		$this->statement_file_url    =		$statement_file_url;
		$this->owner 		 		 =		$owner;
		$this->gender 		 		 =		$gender;
		$this->dob 		 			 =		$dob;
		$this->created_on 		 	 =		date('Y-m-d');
	}

}

class BankAccountController extends BankAccount{

	public $accounts  = [];

	public function __construct()
	{
		$this->accounts[]  = new BankAccount(1, "Mega Bank Nepal Limited", "1001", 4000, "https://localhost:8000/storage/statements/one.jpg","Prabin Gurung", "male", 'Feb 1997'); 
		$this->accounts[]  = new BankAccount(2, "Lumibin Bikas Bank Limited", "1002", 5000, "https://localhost:8000/storage/statements/two.jpg","Prabin Gurung", "male", 'Feb 1997');
	}

	//1. Deposit  Amount
	public function depositBalance($id, $amount)
	{	
		array_filter($this->accounts, function($a)  use ($id, $amount){
			if($a->id === $id ):
				return $a->balance += $amount;
			endif;
		});
	}

	//2. Deduct  Amount
	public function deductBalance($id, $amount)
	{	
		array_filter($this->accounts, function($a)  use ($id, $amount){
			if($a->id === $id ):
				return $a->balance -= $amount;
			endif;
		});
	}

	//3. Get Current Balance
	public function getCurrentBalance($id)
	{	
		$account = array_filter($this->accounts, function($a)  use ($id){
			return ($a->id === $id );
		});

		foreach ($account as $property) {
			return $property->balance;
		}
	}

	//4. Get Bank Statement
	public function getBankStatement($id)
	{	
		$account = array_filter($this->accounts, function($a)  use ($id){
			return ($a->id === $id );
		});

		foreach ($account as $property) {
			return $property->statement_file_url;
		}
	}


	//5. Transfer Between Accounts
	public function transferBalance($from, $to, $amount)
	{	
		array_filter($this->accounts, function($a)  use ($from, $amount){
			if($a->id === $from ):
				return $a->balance -= $amount;
			endif;
		});

		array_filter($this->accounts, function($a)  use ($to, $amount){
			if($a->id === $to ):
				return $a->balance += $amount;
			endif;
		});
	}
}




/***********************
	* 2st Question Solution
***********************/
class Account {
	public $id;
	public $bank;
	public $account_number;
	public $current_balance;
	public $statement_file_url;
	public $username;
	public $created_on;


	public function __construct($id, $bank, $account_number, $current_balance, $statement_file_url, $username)
	{

		$this->id 						= $id;
		$this->bank 					= $bank;
		$this->account_number 			= $account_number;
		$this->current_balance 			= $current_balance;
		$this->received_balance 		= 0;
		$this->statement_file_url 		= $statement_file_url;
		$this->username 				= $username;
		$this->created_on 				= date("Y-m-d");
	}
}

class AccountController {

	public $accounts  = [];

	public function __construct()
	{
		$this->accounts[]  = new Account(3, 'NABIL', '#0000003', '1000', 'https://localhost:8000/storage/statement/sujal.jpg', 'Sujal'); 
		$this->accounts[]  = new Account(4, 'MEGA', '#00000005', '2000', 'https://localhost:8000/storage/statements/rashi.jpg', 'Rashi');
	}

	//1. Deposit  on Sujal Account
	public function depositBalance($username, $amount)
	{	
		array_filter($this->accounts, function($a)  use ($username, $amount){
			if($a->username === $username ):
				return $a->current_balance += $amount;
			endif;
		});
	}

	//2. Transfer  Amount from Sujal To Rashi
	public function transferBalance($from, $to, $amount)
	{	
		array_filter($this->accounts, function($a)  use ($from, $amount){
			if($a->username === $from ):
				return $a->current_balance -= $amount;
			endif;
		});

		array_filter($this->accounts, function($a)  use ($to, $amount){
			if($a->username === $to ):
				$a->received_balance	   += $amount;
				return $a->current_balance += $amount;
			endif;
		});
	}

	//3. Withdraw Received balance from Rashi
	public function withdrawReceivedBalance($username)
	{	
		$account = array_filter($this->accounts, function($a)  use ($username){
			return ($a->username === $username );
		});

		foreach ($account as $property) {
			return $property->received_balance;
		}
	}


	//4. Print Bank Statement
	public function printBankStatement($username)
	{	
		$account = array_filter($this->accounts, function($a)  use ($username){
			return ($a->username === $username );
		});

		foreach ($account as $property) {
			print_r($property->statement_file_url);
		}
	}

	//5. Print Current Balance
	public function printCurrentBalance($username)
	{	
		$account = array_filter($this->accounts, function($a)  use ($username){
			return ($a->username === $username );
		});

		foreach ($account as $property) {
			print_r($property->current_balance);
		}
	}

}

