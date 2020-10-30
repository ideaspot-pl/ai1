<?php

$counterPath = __DIR__ . '/counter.txt';

function readCounter($counterPath)
{
    // fopen for read, fgets, fclose, trim and return number
    return 0;
}

function writeCounter($counterPath, $num)
{
    // fopen for write, fwrite and fclose
}

$visits = readCounter($counterPath);
echo "Visits: $visits";

$visits += 1;
writeCounter($counterPath, $visits);
