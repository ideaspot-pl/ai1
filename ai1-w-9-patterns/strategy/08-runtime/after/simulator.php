<?php
require_once __DIR__ . '/../../../local-autoload.php';

$ducks = [];

// -------- NEW ---------
$duck = new MallardDuck();
$duck->setQuacker(new Quacker());
$duck->setFlyer(new FlyerHigh());
$ducks[] = $duck;

$duck = new DomesticDuck();
$duck->setQuacker(new Quacker());
$duck->setFlyer(new FlyerLow());
$ducks[] = $duck;

$duck = new RubberDuck();
$duck->setQuacker(new Squeaker());
$duck->setFlyer(new FlyerNone());
$ducks[] = $duck;

$duck = new WoodenDuck();
$duck->setQuacker(new QuackerMute());
$duck->setFlyer(new FlyerNone());
$ducks[] = $duck;
// ------- /NEW ---------

foreach ($ducks as $duck) {
    echo "{$duck->getName()}:\n";
    $duck->swim();
    $duck->doQuack();
    $duck->doFly();
    echo "\n";
}
