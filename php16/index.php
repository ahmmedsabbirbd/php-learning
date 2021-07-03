<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP 257</title>
</head>
<body>
	<h2>PHP 15.5 - 16 & ifElse and switch statement of php</h2>
	<?php 
		// age calculation 
		$age = 0;

		if ($age >= 31 && $age < 120) {
			echo "Your are Man";
		} elseif ($age >= 18 && $age < 30) {
			echo "Your are adlut";
		} elseif ($age <= 17 && $age > 0) {
			echo "Your are child";
		} else {
			echo "Type valid age";
		}
		// short age calculation 
		echo "<br>";
		$age = 1;

		if ($age >= 31 && $age < 120):
			echo "Your are Man";
		 elseif ($age >= 18 && $age < 30):
			echo "Your are adlut";
		 elseif ($age <= 17 && $age > 0):
			echo "Your are child";
		 else:
			echo "Type valid age";
		endif;

		// switch case
		echo '<br>';
		$montName = 'Ma';

		switch ($montName) {
			case 'January':
				echo "This mount is January. And It's not good month";
				break;
			case 'February':
				echo "This mount is February. And It's good month";
				break;
			case 'March':
				echo "This mount is March. And It's good month";
				break;
				case 'April': case 'May': case 'June': case 'July': case 'August': case 'September': case 'October': case 'November': case 'December';
				echo "And It's good month";
				break;
			
			default:
				echo "Please valid month";
				break;
		}

	?>
</body>
</html>


<!--/ Complate part of 15 -->