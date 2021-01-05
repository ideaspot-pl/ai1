<?php
require_once __DIR__ . '/../../../local-autoload.php';

$ducks = [];
$ducks[] = new MallardDuck();
$ducks[] = new DomesticDuck();
$ducks[] = new RubberDuck();
$ducks[] = new WoodenDuck();

foreach ($ducks as $duck) {
    echo "{$duck->getName()}:\n";
    $duck->swim();
    $duck->doQuack(); // <-- NEW!
    $duck->doFly();   // <-- NEW!
    echo "\n";
}
