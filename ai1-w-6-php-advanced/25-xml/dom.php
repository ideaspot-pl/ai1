<?php

ini_set('display_errors', true);
$xml = <<<EOT
<users>
    <user>
        <id>1</id>
        <name>Alice</name>
    </user>
    <user>
        <id>2</id>
        <name>Bob</name>
    </user>
</users>
EOT;

$dom = new DOMDocument();
$dom->loadXML($xml);
$xpath = new DOMXPath($dom);
var_dump($xpath->query('//user/id')->item(0));
