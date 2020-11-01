<?php

require_once __DIR__ . '/DateTime.php';

$dateTime1 = new \DateTime();
var_dump($dateTime1->format('Y-m-d'));

$dateTime2 = new \MyNamespace\DateTime();
var_dump($dateTime2->format('Y-m-d'));
