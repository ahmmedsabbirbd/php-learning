<?php
/***
* Check odd and even
*/

function isEven($n) {
    if($n % 2) {
        return true;
    }
    return false;
}

function factorial($n) {
    if(gettype($n)!='integer') {
        return "Invalid";
    }
    return ($n <= 1) ? 1 : $n * factorial($n - 1);
}

function nameEcho($name = 'Sabbir') {
    echo "Your name {$name}";
}