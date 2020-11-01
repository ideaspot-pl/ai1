<?php

// get the php://input file contents to $payloadString
$payloadString = file_get_contents('php://input');

// decode the JSON string to an associative array, for further processing
$payload = json_decode($payloadString, true);

// convert the $items array to JSON-string
$itemsJson = json_encode($payload);

// show browser the response is an application/json content type and echo the JSON
header('Content-type: application/json');
echo $itemsJson;
