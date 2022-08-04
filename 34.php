<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 34 & Foreach Loop  </h2>
	<?php
		$color = array(
			"red",
			"yellow",
			"blue"
		);

		$age = array(
			"sabbir"	=> 20,
			"sumon"		=> 27,
			"korim"		=> 35
		);

		foreach( $color as $value ) {
			echo $value . "<br>";
		}

		echo "<br>";

		foreach( $age as $key => $value ) {
			echo $key . " = " . $value . "<br>";
		}
	?>
</body>
</html>