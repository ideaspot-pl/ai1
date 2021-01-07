<?php
require_once __DIR__ . '/../../common-autoload.php';

$weapons = [];
$weapons[] = new ShootableAdapter(new Bow());
$weapons[] = new ShootableAdapter(new Crossbow());
$weapons[] = new CuttableAdapter(new Knife());
$weapons[] = new ThrowableAdapter(new Stone());
$weapons[] = new CuttableAdapter(new Sword());

foreach ($weapons as $weapon) {
    // todo: use $weapon->attack() on all
    $weapon->attack();
}
