<?php

class CustomException extends Exception
{
}

try {
    $i = rand(0,2);
    if ($i == 0) {
        throw new CustomException("This is a custom exception.");
    } elseif ($i == 1) {
        throw new \Exception("This is a default exception.");
    }
    echo "No exception this time.<br/>\n";
} catch (CustomException $e) {
    echo "Custom Exception was caught: {$e->getMessage()}.<br/>\n";
    var_dump($e->getTraceAsString());
} catch (\Exception $e) {
    echo "Global namespace default \\Exception was caught: {$e->getMessage()}<br/>\n";
    var_dump($e->getTraceAsString());
} finally {
    echo "Always happens.<br/>\n";
}
