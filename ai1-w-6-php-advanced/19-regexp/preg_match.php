<?php

$pattern = "/^(\d\d\d\d)-(\d\d)-(\d\d) (\d\d):(\d\d):(\d\d)$/";
$onlyDate = date('Y-m-d H:i:s');
$dateWithText = "Today is: $onlyDate!";

$isMatched = preg_match($pattern, $onlyDate, $matches);
var_dump($isMatched);
var_dump($matches);

$isMatched = preg_match($pattern, $dateWithText, $matches);
var_dump($isMatched);
var_dump($matches);

$pattern = "/(\d\d)-/";
$isMatched = preg_match_all($pattern, $onlyDate, $matches, PREG_PATTERN_ORDER);
var_dump($isMatched);
var_dump($matches);

$isMatched = preg_match_all($pattern, $onlyDate, $matches, PREG_SET_ORDER);
var_dump($isMatched);
var_dump($matches);
