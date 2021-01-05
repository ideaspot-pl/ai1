<?php
require_once __DIR__ . '/../../../local-autoload.php';

$ducks = [];
$ducks[] = new MallardDuck();
$ducks[] = new DomesticDuck();
$ducks[] = new RubberDuck();
$ducks[] = new WoodenDuck(); // <-- NEW!

foreach ($ducks as $duck) {
    echo "{$duck->getName()}:\n";
    if (method_exists($duck, 'swim')) {
        $duck->swim();
    }
    if (method_exists($duck, 'quack')) {
        $duck->quack();
    }
    if (method_exists($duck, 'fly')) {
        $duck->fly();
    }
    echo "\n";
}
