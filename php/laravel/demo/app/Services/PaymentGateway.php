<?php

namespace App\Services;

class PaymentGateway {

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