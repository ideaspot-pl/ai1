<?php
require_once __DIR__ . '/../../common-autoload.php';

// steel sword
$sword = new SteelSword();
$sword->display();

// steel sword with spell
$sword = new SpellDecorator(new SteelSword());
$sword->display();

// steel sword with rune
$sword = new RuneDecorator(new SteelSword());
$sword->display();
// add spell
$sword = new SpellDecorator($sword);
$sword->display();

// add name "Moonlight Butcher"
$sword = new NameDecorator($sword, "Moonlight Butcher");
$sword->display();
