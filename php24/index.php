<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 24 & Goto of php</h2>
	<?php 
		$br = "<br>";

 	 echo "HI".$br;
 	 echo "HI".$br;
 	 echo "HI".$br;
 	 goto gotoVariable;
 	 echo "HI".$br;
 	 echo "HI".$br;

 	 gotoVariable:
 	 echo "It's 'goto' statement";


	?> 
</body>
</html>