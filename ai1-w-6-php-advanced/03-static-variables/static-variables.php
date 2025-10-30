<?php

function memoryPlusMemoryRead(int $value)
{
    static $sum = 0;
    $sum += $value;
    var_dump($sum);
}

memoryPlusMemoryRead(5);
// int 5
memoryPlusMemoryRead(5);
// int 10
memoryPlusMemoryRead(5);
// int 15
