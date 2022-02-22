<?php

namespace App\Services;

use App\Interfaces\PaymentContract;

class CustomPaymentGateway implements PaymentContract {

	protected $secret;


	public function __construct(string $secretKey)
	{
		
		$this->secret      = $secretKey;

	}

	public function execute()
	{
		
		// return $this->secret;
		return "Custom Payment Gateway";

	}
	

}