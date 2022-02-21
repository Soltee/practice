<?php
/** Overloading */

class overLoading {
	function overLoad($name)
	{
		echo "Regular : ". $name . "<br/>";
	}

	function overLoad($name, $age)
	{
		echo "Overloading : ". $name . " ". $age ."<br/>";
	}
}

$ol = new overLoading();
$ol->overLoad('Prabin');
$ol->overLoad('Prabin', 24);

/** Overiding */
class Loading{
	public function say_hello()
	{
		echo "From Loading.." . "<br />";
	}

	public function hello()
	{
		echo "Base Class: Loading.." . "<br />";
	}
}

class Riding extends Loading {
	function hello()
	{
		echo "Child Class: Riding" . "<br />";
	}
}

$load = new Loading();
$load->say_hello();
$load->hello();

$ride  = new Riding();
$ride->hello();
