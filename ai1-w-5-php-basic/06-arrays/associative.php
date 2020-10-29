<?php

$valentinesDay = [
    'day' => 14,
    'month' => 'February',
];
$valentinesDay['year'] = date('Y');

var_dump($valentinesDay);

echo "This year Valentine's Day is on {$valentinesDay['day']} 
{$valentinesDay['month']} {$valentinesDay['year']}";
