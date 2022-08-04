<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 25 & function of php</h2>
	<?php 

		function hellow($name="Demmha"){
			echo "hi ".$name.". how are you?<br>";
		}

		hellow();

		// student mark
		function mark($math,$bangla,$english){
			$sum = $math + $bangla + $english;
			$avarace = $sum / 3;

			$result = "Your avarace result is ".$avarace."%";
			// echo $result;

			return $result;
		}

		$result = mark(60,50,80);

		echo $result;
	?> 
</body>
</html>