<?php

$browserTime = isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) ? strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) : time();

$lastModifiedTime = strtotime('2017-03-28 10:00');

if ($browserTime > $lastModifiedTime) {
    header('304 Not Modified', true, 304);
    exit;
}

header('Last-Modified: ' . gmdate('D, d M Y H:i:s \G\M\T', time()));

echo "Last modification time: " . date('Y-m-d H:i:s', $lastModifiedTime);
