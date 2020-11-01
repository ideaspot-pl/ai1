<?php

ini_set('display_errors', true);
ini_set('user_agent', 'Mozilla/5.0 (iPhone Simulator; U;
    CPU iPhone OS 4_3_2 like Mac OD X; en-us)
       AppleWebKit/535.17.9 (KHTML, like Gecko) Version/5.0.2
       Mobile/8H7 Safari/6533.18.5');
$url = 'https://api.github.com/search/users?q=ideaspot';
$response = file_get_contents($url);
if (! $response) {
    die("No response.");
}
var_dump($response);

$json = json_decode($response);
var_dump($json);
