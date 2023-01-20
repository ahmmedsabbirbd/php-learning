<?php
$name = "sabbir dsf";
$age = 20;

$ageWord = "age";

echo "$ageWord \n";
echo "My age $age \n";
echo "My $ageWord {$$ageWord} \n";
echo "My age ".$$ageWord;
echo "\n";
echo "My $ageWord {$$ageWord} \n My age {$$ageWord} .";

// define(name,value) const value
echo "\n";
define('PI', 3.1415);

echo "This is a PI value: ".PI;