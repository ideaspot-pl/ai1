<?php

require_once __DIR__ . '/profiler-includes.php';

for ($i = 0; $i < 30; $i++) {
    $functionName = 'f' . rand(1, 3);
    $functionName();
}
