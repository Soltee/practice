<?php

namespace App\Services;

use App\Interfaces\PaymentContract;

class PaypalGateway implements PaymentContract {

	protected $secret;


	public function __construct(string $secretKey)
	{
		
		$this->secret      = $secretKey;

	}

	public function execute()
	{
		
		return $this->secret;

	}



}