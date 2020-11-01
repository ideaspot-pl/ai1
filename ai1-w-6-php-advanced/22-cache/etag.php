<?php

ini_set('display_errors', true);
//$eTag = md5_file(__FILE__);
$eTag = '123';

$noneMatch = isset($_SERVER['HTTP_IF_NONE_MATCH']) ? $_SERVER['HTTP_IF_NONE_MATCH'] : '';

if ($noneMatch == $eTag) {
    header('HTTP/1.1 304 Not Modified', true, 304);
    exit;
}
header("ETag: $eTag");
echo "This is website content with etag == '$eTag'";
