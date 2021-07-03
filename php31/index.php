<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 31 & Global variable of php</h2>
	<?php 
	 $a = 2;
 	
	function number() {
		global $a;
		$a +=33;
	 echo $a;
	}

	number();
	echo $a;

	?> 
</body>
</html>