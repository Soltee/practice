<?php
/** Assignment */

echo "<b>Assignment <br/></b>";

class Basketball {
	public $baskets;

	public function __construct()
	{
		$this->baskets  = 0;
	}	

	//Save score
	public function score()
	{
		$this->baskets++;
		return $this->baskets;
	}
}

$sport = new Basketball();
echo $sport->score() ."<br/>"; //1
echo $sport->score() ."<br/>"; //2
echo $sport->score() ."<br/>";  //3
echo $sport->score() ."<br/>";//4
echo $sport->score() ."<br/>";//5
echo $sport->score() ."<br/>";//6
echo $sport->score() ."<br/>";//7




