<?php

$now = time();
$expiresTime = $now + 15;

header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', $expiresTime));
header('Pragma: cache');
header('Cache-Control: must-revalidate, max-age=15');

echo "Last time refreshed: " . date('Y-m-d H:i:s', $now);
