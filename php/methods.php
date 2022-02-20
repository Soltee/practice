<?php
/** Methods */

// 1. Magic Methods 
echo "<b>Magic Methods</b> are the default methods available to all the instances of a class. <br/>";
echo "Must be Public always and start with __<br/>";
echo "Eg: __construct(), __destruct(), __set(), __get(), __call() etc<br/><br />";


echo "Methods are <b>Case in-sensitive.</b><br />";
function Hello(){
	return 5;
}

echo hello() . "<br />";