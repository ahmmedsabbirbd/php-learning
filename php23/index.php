<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 23 & Break and continue of php</h2>
	<p>nested loop</p>
	<?php 
 	
 	 for ($i=0; $i <= 10 ; $i++) { 
 	 		
 	 		if ($i==4) {
 	 			echo "sala pirnt of four".$i."<br>";
 	 			continue;
 	 		}
 	 		echo $i."<br>";
 	 }
 	
 	 for ($i=1;true; $i++) { 
 	 		echo $i."<br>";

 	 		if ($i == 100) {
 	 			break;
 	 		}
 	 }

	?> 
</body>
</html>