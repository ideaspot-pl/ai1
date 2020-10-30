<?php

$counterPath = __DIR__ . '/counter.txt';

function readCounter($counterPath)
{
    // fopen for read, fgets, fclose, trim and return number
    $fp = fopen($counterPath, "r");
    $num = fgets($fp);
    $num = trim($num);
    fclose($fp);
    return $num;
}

function writeCounter($counterPath, $num)
{
    // fopen for write, fwrite and fclose
    $fp = fopen($counterPath, "w");
    fwrite($fp, $num);
    fclose($fp);
}

$visits = readCounter($counterPath);
echo "Visits: $visits";

$visits += 1;
writeCounter($counterPath, $visits);
