<?php

// get the php://input file contents to $payloadString
$payloadString = '';

// decode the JSON string to an associative array, for further processing
$payload = [];

// convert the $items array to JSON-string
$itemsJson = '';

// show browser the response is an application/json content type and echo the JSON
