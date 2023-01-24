<?php
function doSomething() {
    static $i; // static scope
    $i = $i ?? 0;
    
    $i++;
    echo $i;
    echo "\n";
}

doSomething();
doSomething();