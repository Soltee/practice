<?php
/** Classes */

// 1. intefaces Class 
echo "<b>intefaces <br/></b>";
echo "Can be independent but can extend many other intefaces. <br/>";
echo "Must have function definations only. <br/>";
echo "Can only be implemented by abstract or concrete classes. <br/>";
echo "It be implemented by classes to be used. (implements) <br/>";



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







