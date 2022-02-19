<?php

//Boat
class Boat  extends Vehicle {
	
	public function showinfo()
	{
		$this->setSpeed(100);
		return [
			'state'     => $this->engineState,
			'speed'     => $this->speed,
			'fuel'      => $this->fuel,
			'type'      => $this->vehicleType
		];
	}
}




