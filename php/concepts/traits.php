<?php
/** Traits */

// 1. Traits  
echo "<b>Traits<br/></b>";
echo "Have constructor, use many Traits, have methods and Data Fields. <br/>";
echo "Class can use many traits (use). <br/>";

echo "Cannot implement interfaces, extend Classes, <br/>";
echo "No Abstract Methods.<br/>";
echo "Cannot instantiate Objects. <br/><br/>";

/**
  * summary
  */
trait A
{  
  public $string  = 'Hello ';
  public function __construct()
  {
        
    echo "Trait A";
  }

} 

/**
 * summary
 */
trait B
{
  use A;

  public function __construct()
  {
    echo "Trait B.<br />";
  }
  
}

trait C
{

  use A, B;

  public function __construct()
  {
    echo "Trait C.<br />";
    $this->string .= "Trait A.<br />";

  }

}


class D
{
  use C;
}

$c = new D();
echo $c->string;






