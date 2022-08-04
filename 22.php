<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 22 & Nested loop of php</h2>
	<p>nested loop</p>
	<?php 
 	
 	for ($i=1; $i <= 100; $i+=10) { 
 		for ($n=$i; $n < $i+10 ; $n++) { 
 			echo $n." ";
 		}
 		echo "<br>";
 	}

	?> 
</body>
</html>