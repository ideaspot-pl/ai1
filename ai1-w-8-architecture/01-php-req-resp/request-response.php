<?php

// get request info
$uri = $_SERVER["REQUEST_URI"];
$q = $_GET['q'];

// process
$data = ['apple', 'banana', 'pear', 'lime', 'orange', 'lemon'];
$found = null;
foreach ($data as $item) {
    if (strstr($item, $q) !== false) {
        $found = $item;
        break;
    }
}
if (! $found) {
    $found = "Not found";
}


// generate response
header("Content-Type: text/plain");
echo "Query: $q\n";
echo "Found fruit: $found\n";
