<?php

ini_set('display_errors', true);
$a = 10;
$b = 20;

function myFunction()
{
    global $a;
    $localB = $GLOBALS['b'];

    echo "'$a' '$b' '$localB'<br/>";
}

myFunction();
echo "'$a' '$b' '$localB'<br/>";
