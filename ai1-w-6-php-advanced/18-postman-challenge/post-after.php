<?php

// get data to $items array
$items = $_REQUEST;

// convert the $items array to JSON-string
$itemsJson = json_encode($items);

// show browser the response is an application/json content type and echo the JSON
header('Content-type: application/json');
echo $itemsJson;
