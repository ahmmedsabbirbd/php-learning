<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 35 & PHP Multidimensional Array   </h2>
	<?php
		$emp = [
			[ 1, "Sabbir Ahmmed", "Font-end Devoloper", "18000" ],
			[ 2, "Korim Ali", "Font-end Devoloper", "15000" ],
			[ 3, "Shaown Ahmmed", "Back-end Devoloper", "12000" ]
		];

		echo "<table>";
		echo "<tr>
			<td>Number</td>
			<td>Name</td>
			<td>Position</td>
			<td>Salery</td>
		</tr>";
		foreach( $emp as $emps ) {
			echo "<tr>";

			foreach( $emps as $empd ) {
				echo "<td>";
				echo $empd;
				echo "</td>";
			}

			echo "</tr>";
		}

		echo "</table>";
	?>

	<h2>PHP 36 & PHP Multidimensional ArrayMultidimensional Associative</h2>
	<?php
		$marks = [
			"Sabbir Ahmmed"	=> [
				"bangla"	=> "70", 
				"english"	=> "80", 
				"math"	=> "90" 
			],

			"Naim Ahmmed"	=> [
				"bangla"	=> "80", 
				"english"	=> "70", 
				"math"	=> "90" 
			]
		];

		echo "<table>";
		foreach( $marks as $key => $mark ) {
			echo "<tr>";
				echo "<td>";
					echo $key;
				echo "</td>";

				foreach ( $mark as $singlemark ) {
					echo "<td>";
						echo $singlemark;
					echo "</td>";
				}
			echo "</tr>";
		}

		echo "</table>";
	?>
</body>
</html>