<?php
$name = 'Sabbir';

function doSomethink() {
    // option 1
    echo $GLOBALS['name'];

    echo "\n";
    
    // option 2 (best)
    global $name;
    echo $name;
    
    echo "\n";
    
    global $inName;
    $inName = "Ahmmed";
}

doSomethink();
echo $inName;