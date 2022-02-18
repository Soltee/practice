<?php
/** Functions */

//1. Referencing by &
echo "<b>Referencing BY '&'<br/></b>";
function hello(&$two2)
{
	$two2 .= " called by Reference.<br/>";
}

$str = "This is";
hello($str);
echo $str;
