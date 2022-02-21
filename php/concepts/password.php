<?php
/** Password */

// 1. Hash Pass 
echo "<b>Hash Pass<br/></b>";
$inputPass 	= "11111111";

$hash 		= password_hash($inputPass, PASSWORD_DEFAULT);

$verify     = password_verify('2222222222', $hash);
echo $hash . "<br/>"; // Returns Unique Hash
echo $verify . "<br/>"; // Returns Null
