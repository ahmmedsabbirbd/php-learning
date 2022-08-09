<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 37 & Foreach Loop with List </h2>
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
		foreach( $emp as list( $id, $name, $position, $salery ) ) {
			echo "<tr>"; 
				echo "<td>";
					echo $id;
				echo "</td>";

				echo "<td>";
					echo $name;
				echo "</td>"; 
				
				echo "<td>";
					echo $position;
				echo "</td>"; 
				
				echo "<td>";
					echo $salery;
				echo "</td>"; 
			echo "</tr>";
		}

		echo "</table>";

		echo "</br>";

		$emp1 = [
			[ 
				"id"		=> 1, 
				"name"		=> "Sabbir Ahmmed", 
				"position"	=> "Font-end Devoloper",
				"salery"	=> "18000" 
			],
			[ 
				"id"		=> 2, 
				"name"		=> "Sohan Ahmmed", 
				"position"	=> "Font-end Devoloper",
				"salery"	=> "20000" 
			]
		];

		echo "<table>";
		echo "<tr>
			<td>Number</td>
			<td>Name</td>
			<td>Position</td>
			<td>Salery</td>
		</tr>";
		foreach( $emp1 as list( "id" => $id, "name" => $name, "position" => $position, "salery" => $salery ) ) {
			echo "<tr>"; 
				echo "<td>";
					echo $id;
				echo "</td>";
				
				echo "<td>";
					echo $name;
				echo "</td>"; 
				
				echo "<td>";
					echo $position;
				echo "</td>"; 
				
				echo "<td>";
					echo $salery;
				echo "</td>"; 
			echo "</tr>";
		}

		echo "</table>";
	?>
</body>
</html>