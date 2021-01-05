<?php
require_once __DIR__ . '/../../../local-autoload.php';

$mallarDuck = new MallardDuck();
$mallarDuck->setQuacker(new Quacker());
$mallarDuck->setFlyer(new FlyerHigh());

$rubberDuck = new RubberDuck();
$rubberDuck->setQuacker(new Squeaker());
$rubberDuck->setFlyer(new FlyerNone());

// CHANGE HERE:

// ...

// NO CHANGE BELOW

foreach ([$mallarDuck, $rubberDuck] as $duck) {
    echo "{$duck->getName()}:\n";
    $duck->swim();
    $duck->doQuack();
    $duck->doFly();
    echo "\n";
}
