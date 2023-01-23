<?php

$fName = 'Sabbir';
$lName = 'Ahmmed';

// defult
printf("My name is %s %s \n", $fName, $lName);

// change value
printf('My name is %2$s %1$s', $fName, $lName);
echo "\n";
printf('My name is %2$s %1$s. 
And my other name is %1s
', $fName, $lName);

// number
$m = 13.354;
$n = 12.32332;

printf("%.2f \n", $m);
printf("%.2f \n", $n);

// number
$m = 513.354;
$n = 12.32332;

printf("%06.2f \n", $m);
printf("%06.2f \n", $n);