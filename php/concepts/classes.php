<?php
/** Classes */

// 1. Singleton Class 
echo "<b>Singleton Class<br/></b>";
echo "Class with only one object , so must have only one access point. <br/>";
echo "Must have a constructor. <br/>";

class Connector {
	private static $obj;
	private function __construct()
	{
		echo __CLASS__ . " initialize only once. <br/>";
	}

	public static function connect()
	{
		if(!isset(self::$obj)){
			self::$obj = new Connector();
		}
		return self::$obj;
	}
}

$obj1  = Connector::connect();
$obj2  = Connector::connect();
$obj3  = Connector::connect();
$obj4  = Connector::connect();
$obj5  = Connector::connect();
// var_dump($obj1 === $obj2);

echo "<br/><br/>";
echo "<b>Classes Introduction</b><br/>";
echo "Classes can have many (use) traits and (implement) intefaces, methods, properties. <br/>";
echo "Can extend to maximum of 1 class( Abstract or Concrete). <br/><br/>";
echo "Donot Have</br>";
echo "Cannot have abstract methods and nested classes within. <br/>";

abstract class Animal
{

	public function getAnimal()
	{
		echo "getAnimal<br/>";
	}
	
}

// $a = new Animal(); // Return Error cause cannot instantiate abstract classes


class E extends Animal {
	public function __construct()
	{
		foreach([
			'name'  => "bishal",
			'bank'  => 'muktinath'
		] as $p)
		{
			echo $p . "<br />";
		}
	}
}

$e = new E();
$e->getAnimal();



