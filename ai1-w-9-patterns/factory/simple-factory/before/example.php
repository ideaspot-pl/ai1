<?php
require_once __DIR__ . '/../../../common-autoload.php';

$type = 'mallard';

switch ($type) {
    case 'mallard':
        $duck = new MallardDuck();
        break;
    case 'domestic':
        $duck = new DomesticDuck();
        break;
    case 'marbled':
        $duck = new MarbledDuck();
        break;
    default:
        throw new \Exception("Invalid duck type.");
}

$duck->display();
