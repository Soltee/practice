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
