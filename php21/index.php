<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 19 - 21 & All loop of php</h2>
	<p>While loop</p>
	<?php 
		// while loop
		$i = 1;
		echo "<ul>";
		while ($i <= 10) {
			echo "<li>"."Print of while loop"."<br></li>";
			$i++;
		}
		echo "</ul>";

	?>

	<p>While loop</p>
	<?php 
		// do while loop
		$i = 5;
		echo "<ul>";
		do {
			echo "<li>"."Print of do while loop"."<br></li>";
			$i--;
		}while($i > 0);
		echo "</ul>";

	?>

	<p>for loop</p>
	<?php 
		// for loop
	 	for ($i=0; $i <= 4; $i++) { 
			echo "<a href='#'>"."Print of for loop"."<br></a>";

	 	}

	?>
</body>
</html>


<!--/ Complate part of 15 -->