<?php
require_once __DIR__ . '/../../../local-autoload.php';

$ducks = [];
$ducks[] = new MallardDuck();
$ducks[] = new DomesticDuck();

foreach ($ducks as $duck) {
    echo "{$duck->getName()}:\n";
    $duck->swim();
    $duck->quack();
    echo "\n";
}
