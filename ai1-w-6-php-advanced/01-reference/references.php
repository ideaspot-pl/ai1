<?php

$myVariable = 'abc';
$myArray = array(
    'Jon',
    'Arya',
    'Eddard',
);

$variableRef = &$myVariable;
$arrayRef = &$myArray;
$arrayElementRef = &$myArray[0];

$variableRef = 'def';
$arrayElementRef = 'Daenerys';

var_dump($myVariable);
var_dump($myArray);
