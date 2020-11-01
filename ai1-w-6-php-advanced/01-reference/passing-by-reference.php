<?php

$a = 10;

function setToTwenty(&$parameter)
{
    $parameter = 20;
}

setToTwenty($a);

var_dump($a);
// int 20
