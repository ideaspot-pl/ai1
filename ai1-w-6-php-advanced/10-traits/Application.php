<?php

require_once __DIR__ . '/HistoryAwareInterface.php';
require_once __DIR__ . '/HistoryAwareTrait.php';

class Application implements HistoryAwareInterface
{
    use HistoryAwareTrait;
}

$application = new Application();
$application->setCreatedAt(new \DateTime());
$application->setModifiedAt(new \DateTime());
$application->setCreatedBy('alice');
$application->setModifiedBy('alice');

var_dump($application);
