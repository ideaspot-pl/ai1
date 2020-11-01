<?php
require 'Obfuscator-Class/src/Obfuscator.php';

$sourceFilename = __DIR__ . '/src/json.php';
$distFilename = __DIR__ . '/dist/json.php';
$sData = file_get_contents($sourceFilename);
$sData = str_replace(array('<?php', '<?', '?>'), '', $sData); // Remove the open/close PHP tags
$sObfusationData = new Obfuscator($sData, 'My Obfuscated JSON');
file_put_contents($distFilename, '<?php ' . "\r\n" . $sObfusationData);
