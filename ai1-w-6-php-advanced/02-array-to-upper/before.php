<?php

/**
 * Iterates over a table of strings and changes them to upper case.
 * @param array<string> $output Array of strings.
 * @return int Number of items in the array that were converted to upper case.
 */
function arrayToUpper(array &$output)
{

}

$words = array(
    'banana',
    'apple',
    'pineapple',
);
$count = arrayToUpper($words);
var_dump($count);
var_dump($words);
