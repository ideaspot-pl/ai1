<?php
require_once __DIR__ . '/../../../common-autoload.php';

if (count($argv) != 3) {
    echo <<<EOT
Usage: php example.php <factory> <type>

Factories: 1 - animal; 2 - toy

Toy types: rubber, stuffed, wooden
Animal types: domestic, mallard, marbled
EOT;
    exit(1);
}

$factoryId = $argv[1];
$type = $argv[2];

switch ($factoryId) {
    case 1:
        $duck = AnimalDuckFactory::createDuck($type);
        break;
    case 2:
        $duck = ToyDuckFactory::createDuck($type);
        break;
    default:
        die("Invalid factory.");
}

$duck->display();
