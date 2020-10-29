<?php

$orderStatuses = array('new', 'in progress', 'shipped');
$orderStatuses = ['new', 'in progress', 'shipped'];
$orderStatuses = [
    0 => 'new',
    1 => 'in progress',
    2 => 'shipped',
];

$orderStatuses[] = 'ready for shipment';

$orderStatuses[2] = 'complete';

var_dump($orderStatuses);
