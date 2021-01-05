<?php
require_once __DIR__ . '/../../../local-autoload.php';

$ducks = [];
$ducks[] = new MallardDuck();
$ducks[] = new DomesticDuck();
$ducks[] = new RubberDuck(); // <-- NEW!

foreach ($ducks as $duck) {
    echo "{$duck->getName()}:\n";
    $duck->swim();
    $duck->quack();
    $duck->fly();
    echo "\n";
}
