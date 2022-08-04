<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 30 & function of php</h2>
	<?php 
 	
	function number($n) {
		for ($i=$n; $i >= 0 ; $i--) { 
			echo $i."<br>";
		}
	}

	number(12);

	?> 
</body>
</html>