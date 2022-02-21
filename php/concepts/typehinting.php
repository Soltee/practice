<?php
/** Type Hinting */

echo "<b>Type Hinting <br/></b>";

echo 'Type Hinting is the expected type of data to be passed as arguments during method declaration.<br/>';
echo 'If not then, this is throw an error saying excepted but got this. and will terminate the execution.<br/>';
echo "Eg: on methods parameters such as string, int, array, callable<br/><br/>";


class Hello {
	public function say_hello(string $name)
	{
		echo $name . " says hello!<br/>";
	}

	public function getNum(int $num)
	{
		echo $num . "<br/>";
	}

	public function getArray(array $arr)
	{
		print_r($arr) . "<br/>";
	}
}

$hello = new Hello();
$hello->say_hello('Prabin'); 
$hello->getNum(355);

$hello->getNum("Help");// Return Error
$hello->getArray("Help");// Return Error





