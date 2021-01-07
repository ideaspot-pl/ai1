<?php
require_once __DIR__ . '/../../common-autoload.php';

$weapons = [];
$weapons[] = new Bow();
$weapons[] = new Crossbow();
$weapons[] = new Knife();
$weapons[] = new Stone();
$weapons[] = new Sword();

foreach ($weapons as $weapon) {
    if ($weapon instanceof ThrowableInterface) {
        $weapon->doThrow();
    } elseif ($weapon instanceof  CutableInterface) {
        $weapon->cut();
    } elseif ($weapon instanceof ShootableInterface) {
        $weapon->shoot();
    }

    // todo: use $weapon->attack() on all
}
