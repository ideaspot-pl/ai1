<?php
require_once __DIR__ . '/../../common-autoload.php';

$user1 = new User(1);
$user1->display();

$user2 = new User(2);
$user2->display();

$user3 = new User(3);
$user3->display();

$user1 = new User(1);
$user1->display();

$user2 = new User(2);
$user2->display();

$user3 = new User(3);
$user3->display();
