<?php

$monday = new \DateTime('monday');
$copy = clone $monday;

var_dump($monday == $copy);
// true

var_dump($monday === $copy);
// false

function getNextDay(\DateTime $dateTime)
{
    $nextDay = $dateTime;
    $nextDay = $nextDay->add(new \DateInterval('P1D'));
    return $nextDay;
}

$tuesday = getNextDay($monday);
var_dump($tuesday);
// ???
var_dump($monday);
// ???
