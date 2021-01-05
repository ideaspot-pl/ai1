<?php
require_once __DIR__ . '/../../../common-autoload.php';

$duck = DuckSimpleFactory::getDuck('marbled');
$duck->display();
