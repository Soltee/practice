<?php

class Vehicle {
	public $engineState; 
	public $speed;
	public $fuel;
	public $vehicleType;

	public function __construct()
	{
		$this->engineState  	= 0;
		$this->speed  			= 0;
		$this->fuel 		  	= 0;
		$this->vehicleType  	= "";
	}


	//Get engine State
	public function getEngineState()
	{
		return ($this->engineState) ? true : false;
	}

	//Set speed
	public function setSpeed(int $speed)
	{
		if(!$this->engineState):
			echo "Engine is OFF, Cannot set Speed.<br />";
			return;
		endif;

		if($this->fuel <= 0):
			echo "No fuel, Cannot set speed.<br />";
			return;
		endif;

		return ($this->speed = $speed);
	}

	//Get speed
	public function getSpeed()
	{
		return ($this->speed);
	}

	//Set Fuel
	public function setFuel(int $fuel)
	{
		return ($this->fuel = $fuel);
	}

	//Get Fuel
	public function getFuel()
	{
		return ($this->fuel);
	}

	//Set Type
	public function setType(string $type)
	{
		return ($this->vehicleType = $type);
	}

	//Get Type
	public function getType()
	{
		return ($this->vehicleType);
	}

	//Start Engine
	public function startEngine()
	{
		if($this->fuel <= 0):
			echo "No fuel. Engine cannot be started. <br/>";
			return;
		endif;


		if($this->getEngineState()):
			echo "Engine is already ON. <br />";
			return;
		endif;

		$this->engineState  = true;
		echo "Engine has now started.<br />";

	}

	//Stop Engine
	public function stopEngine()
	{
		if($this->getSpeed() > 0):
			echo "Vehicle in motion. Cannot stop right now. <br/>";
			return;
		endif;

		if(!$this->getEngineState()):
			echo "Engine is already OFF. <br/>";
			return;
		endif;

		$this->engineState  = false;
		echo "Engine has now stopped. <br/>";
	}


	//Acclerate
	public function accelerate(int $speed)
	{
		if(!$this->engineState): 
			echo "Oops! Engine is OFF.<br />";
			return;
		endif;

		if($this->fuel <= 0):
			echo "No fuel! Cannot be accelerated.<br />";
			return;
		endif;

		$this->speed += $speed;
		return "Accelerating by ".$speed."mp/h.<br />";
	}

	//Break
	public function break(int $speed)
	{
		if(!$this->engineState):
			echo "Oops! Engine is OFF.<br />";
			return;
		endif;

		$this->speed -= $speed;
		return "Breaking by ".$speed."mp/h.<br />";
	}

	//Show Info
	public function showinfo()
	{
		return [
			'state'     => $this->engineState,
			'speed'     => $this->speed,
			'fuel'      => $this->fuel,
			'type'      => $this->vehicleType
		];
	}
}





