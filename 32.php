<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 32 & array of php</h2>
	<?php 
		$name = array("sabbir","sakil",233,33.3);
		echo $name[0]."<br>";

		echo "<pre>";
		print_r($name);
		echo "</pre>";

		var_dump($name);
		$sizeofName = sizeof($name);
		echo "<ul>";
		for ($i=1; $i < $sizeofName; $i++) { 
			echo "<li>".$name[$i]."</li><br>";
		}
		echo "</ul>";

	?> 

	<h2>Part 2</h2>
	<?php 
		$age = array(
			"99"=> "Biyadob",
			"sakil",
			"Sala"=>233,
			33.3
		);

		echo $age[99]."<br>";

		echo "<pre>";
		print_r($age);
		echo "</pre>";

		var_dump($age);

		echo sizeof($age);
	?> 
</body>
</html>