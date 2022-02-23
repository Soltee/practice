<?php 

interface Itype 
{

	public function getType();
	public function setType();

}

trait Math 
{

	public function specialCal()
	{

		echo "Trait Math.<br />";

	}

}

abstract class Species
{
	use Math;

	public function determineAge()
	{

		echo "Abstract Class: Species.<br />";

	}

}

abstract class PlantKingdom extends Species implements Itype
{
	use Math;

	protected $type  = "Type";

}


class Spruce extends PlantKingdom 
{

	public function __construct()
	{

		echo $this->type . "<br />";

	}

	public function getType(){}
	public function setType(){}

}

$s = new Spruce();
$s->determineAge();
$s->specialCal();


