<?php
/*
    Integer Int
    Double / Float
    Boolean
    Null
    String
    Array
    Object
    Resource
*/

$name = "Sabbir";
$age = 20;
$dosomicValue = 3.3;

var_dump($name);
var_dump($age);
var_dump(null);
var_dump($dosomicValue);
var_dump(true);
var_dump($name, $age);

// text Upercase strtoupper()
$text = 'Dummy Text';
$uText = strtoupper($text);
echo $uText;
echo "\n";

// option 2
printf("I'm Sabbir and My position %s \n", $text);


// printf()
printf("My name is %s. I'm %s", $name, "Front End Developer");

// echo 
echo "
I'm Refuji.
And you 
";

// printf
printf("My name ".strtoupper($name));