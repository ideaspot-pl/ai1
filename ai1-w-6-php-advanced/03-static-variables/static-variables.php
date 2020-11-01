<?php

function memoryPlusMemoryRead($value)
{
    static $sum = 0;
    $sum += $value;
    var_dump($sum);
}

memoryPlusMemoryRead(5);
// int 5
memoryPlusMemoryRead(10);
// int 15
memoryPlusMemoryRead(15);
// int 30
