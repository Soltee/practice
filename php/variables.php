<?php
/** Variables */

echo "<b>Variables <br/></b>";

//1. $var : represents any types
echo '$var: is simple variable.<br/>';
	
//2. $$var - Reference 
echo '$$var: is reference variable<br/>';

//Unset Variable
echo "<b>Unset Variable <br/></b>";
$var1 = "hello";
$var2 = 4;

echo "Var1: " .$var1 ."<br/>";//Return "hello";
echo "Var2: ". $var2 ."<br/>";//Return 4 ;
// unset($var2);
echo "Var1: " .$var1 ."<br/>"; //Return "hello";
echo "Var2: ". $var2 ."<br/>"; //Undefined

//Double inverted and single inverted commas
// "" : executes values of variable objects.
// '' : doesnnot 
echo "<br/>";


//Types of Variables
echo "<b>Types of Variable <br/>";
echo gettype($var2). "<br/><br/>";

//Global Variables
echo "<b>Global Variable <br/></b>";
echo "Browser Properties ".$_SERVER['HTTP_USER_AGENT'] ."<br/>"; //Browser Properties


echo $_SERVER['HTTP_X_FORWARDED_FOR']; // IP ADDRESS

//Constant Variable
echo "<b>Constant Variable NO dollar sign<br/>";
define("PT", "Ten"). "<br/><br/>";
const Connector = 10;
echo PT ."<br/>";
echo Connector ."<br/>";
echo "<br/>";


echo "<b>Static Data</b><br/>";
static $a = 1;
echo $a . "<br />";

class Demo {
	public $data  = 'Apple';

	const STATE   = 'constant';

	static $name  = 'Prabin';


	public function datas()
	{
		return [
			$this->data,
			self::STATE,
			Demo::STATE,
			self::$name,
			Demo::$name,
		];
	}
}

$a = new Demo();
echo $a->data . "<br />";
echo "Constant : ". $a::STATE . "<br />";
echo "Constant : ". Demo::STATE . "<br />";
echo "Static : ". $a::$name . "<br />";
echo "Static : ". Demo::$name . "<br />"; //colin colin ::

//INSIDE FUNCTIONS
echo "<pre>";
var_dump($a->datas());
echo "</pre>";

