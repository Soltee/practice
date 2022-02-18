<?php
/** Exceptions */

try {
	return (1 !== 2) ?
		throw new Exception() : false;
} catch (Exception $e){ //If not included, then fatal Error
	print "Catching exception ". $e . "<br/>";
} finally {
	print "Finally : Do something... <br/>";
}

echo "<br/><br/>";
echo  "<b>Require & Include</b> <br/>";
// Require : if not found, stops the execution and returns an fatal error
// require 'filenotfound.php';

//Include : If not found a file, return a warning but continue to execute other lines of code.
include 'filenotfound.php';

echo "<br/><br/>";
echo  "<b>Types of Errors</b> <br/>";
// Notice
echo "<b>Notice</b>: Non Critical Error. SOme minor error during execution <br/>";

//Warning
echo "<b>Warning</b>: Critical Error during execution. Eg , if some file is not included while it was supposed to be included by using include <br/>";

//Fatal Error
echo "<b>Fatal</b>: Critical Error during execution resulting in termination of code. Eg. if some file is not required while it was supposed to be required by using require <br/>";