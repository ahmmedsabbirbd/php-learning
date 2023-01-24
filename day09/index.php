<?php
include_once('function.php');

$x = 2;

if(isEven($x)) {
    echo "{$x} is number is even";
} else {
    echo "{$x} is number is odd";
}

echo "\n";

// Factorial
$number = 2;
$numberOfFactorial = factorial($number);

echo "The number {$number} factoril is {$numberOfFactorial} \n";


// name print
nameEcho();
