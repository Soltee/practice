<?php

require "Super.php";
require "Car.php";
require "Plane.php";
require "Boat.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vehicles</title>
</head>
<body>
	<?php
		//Car
		echo "<b>CAR</b><br/>";
		$car 	 = new Car();

		echo "<b>Pouring Fuel.....</b><br/>";				
		$car->setFuel(40) ."<br />";
		echo $car->getFuel() ."<br />";

		echo "<b>Starting Engine.....</b><br/>";
		echo $car->getEngineState() . "<br />";		
		$car->startEngine() ."<br />";
		echo $car->getEngineState() . "<br />";		

		echo "<b>Accceleating Speed.....</b><br/>";				
		echo $car->accelerate(100);

		echo "<b>Breaking Speed.....</b><br/>";				
		echo $car->break(10);
		echo $car->getSpeed() . "<br />";		

		echo "<b>Setting Type.....</b><br/>";				
		$car->setType('BUS') ."<br />";

		echo "<b>Showing Infos.....</b><br/>";
		echo "STATE : ".$car->getEngineState(). "<br />";						
		echo "FUEL : ".$car->getFuel(). "<br />";						
		echo "SPEED : ".$car->getSpeed(). "<br />";						
		echo "TYPE : ".$car->getType(). "<br />";						
		foreach($car->showinfo() as $property => $value){
			echo ucwords($property) ."=". $value. "<br />";
		}

		echo "<b>Breaking Again.....</b><br/>";				
		echo $car->break(90);
		echo $car->getSpeed() . "<br />";
		echo "<b>Stopping or.....</b><br/>";				
		$car->stopEngine();

		



		/*******  Plane ******/
		echo "<br/><br/><b>PLANE</b><br/>";
		$plane   = new Plane();
		echo "<b>Pouring Fuel.....</b><br/>";				
		$plane->setFuel(40) ."<br />";

		$plane->startEngine() ."<br />";

		echo "<b>Setting Type.....</b><br/>";				
		$plane->setType('first class') ."<br />";
		foreach($plane->showinfo() as $property => $value){
			echo ucwords($property) .": ". $value. "<br />";
		}


		/*******  Boat ******/
		echo "<br/><br/><b>BOAT</b><br/>";
		$boat    = new Boat();
		echo "<b>Pouring Fuel.....</b><br/>";				
		$boat->setFuel(40) ."<br />";

		$boat->startEngine() ."<br />";

		echo "<b>Setting Type.....</b><br/>";				
		$boat->setType('first class') ."<br />";
		foreach($boat->showinfo() as $property => $value){
			echo ucwords($property) .": ". $value. "<br />";
		}
	


	?>

</body>
</html>
