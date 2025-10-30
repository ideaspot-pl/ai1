<?php

$myVariable = 'original value';
$myArray = [
    'Geralt',
    'Ciri',
    'Jaskier',
];

$variableRef = &$myVariable;
$arrayRef = &$myArray;
$arrayElementRef = &$myArray[2];

$variableRef = 'updated value';
$arrayElementRef = 'Zoltan';

var_dump($myVariable);
var_dump($myArray);
