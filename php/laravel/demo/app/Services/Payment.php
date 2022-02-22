<?php

namespace App\Services;

class Payment {

	protected $gateway;

	public function __construct(PaymentGateway $gateway)
	{
		
		$this->gateway   = $gateway;

	}


	public function process()
	{
		
		return $this->gateway->execute();

	}

}