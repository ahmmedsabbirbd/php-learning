<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 28 & function of php</h2>
	<?php 

		/*function hellow($name){
			$change = "Demmha";
			echo "hi ".$name.". how are you?<br>";
		}
		$change = " rofic";
		hellow($change); // $change value not change
*/
		/*function hellow(&$name){
			$change = "Demmha";
			echo "hi ".$name.". how are you?<br>";
		}
		$change = " rofic";
		hellow($change); // $change value already change*/



		$functionVariable = function ($name){
			echo "hi ".$name.". how are you?<br>";
		};
		$functionVariable('riyad');
	?> 
</body>
</html>