<?php

// get request info
$uri = $_SERVER["REQUEST_URI"];
$q = isset($_GET['q']) ? $_GET['q'] : null;

// process
$data = ['apple', 'banana', 'pear', 'lime', 'orange', 'lemon'];
$found = null;
if ($q) {
    foreach ($data as $item) {
        if (strstr($item, $q) !== false) {
            $found = $item;
            break;
        }
    }

    if (!$found) {
        $found = "Not found";
    }
} else {
    $found = "No search query";
}


// generate response
header("Content-Type: text/plain");
echo "Query: $q\n";
echo "Found fruit: $found\n";
