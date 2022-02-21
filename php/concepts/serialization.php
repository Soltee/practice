<?php

//Seralization

echo "<b>Seralization</b></br>";
echo "Seralization is process of converting objects into strings(Text) and vice-versa so that it can be used or stored in data for various purposes.<br/>";
echo "During this, types and structors of the objects are intact.<br/>";
echo "Only data are coverted. no functions.<br/>";
echo "Eg: Js objects into string in php<br/>";

echo 'seralize() & unseralize()<br/>';
echo "Laravel: json_encode() and json_decode()<br/>";

class Seralization{
	public $num  = 10;
	public $arr  = [
		'hello', 'hi', [
			'me' => 'hero'
		]
	];


}


$s = new Seralization();
echo $s->num . "<br/>";
print_r($s->arr) . "<br/>";
echo "</br></br>";

//1. Seralizing n Unseralizing Values
// var_dump(serialize($s->num)) . "<br/>";
// echo "</br>";
// var_dump(serialize($s->arr)) . "<br/>";
// echo "</br>";


//2. Seralizing n Unseralizing Objects

echo "Seralizing...</br>";
$se = serialize($s);
var_dump($se);
echo "</br>";
echo $se->num ."</br>";//Return Error cause converted into strings text;
echo "Unseralizing...</br>";
$unse = unserialize($se);
var_dump($unse);
echo "</br>";
echo $unse->num ."<br/>"; //Return 10 cause converted back;
echo "</br></br>";

//3. Encoding & Decoding 
echo "Json Encoding or decoding...</br>";
$encoding = json_encode($unse);
var_dump($encoding); 
echo "</br>";
$decoding = json_decode($encoding);
var_dump($decoding); 
echo "</br>";










