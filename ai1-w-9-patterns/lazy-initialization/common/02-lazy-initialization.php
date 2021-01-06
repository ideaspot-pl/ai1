<?php
require_once __DIR__ . '/../../common-autoload.php';

$user1 = UserLazyLoader::getUser(1);
$user1->display();

$user2 = UserLazyLoader::getUser(2);
$user2->display();

$user3 = UserLazyLoader::getUser(3);
$user3->display();

$user1 = UserLazyLoader::getUser(1);
$user1->display();

$user2 = UserLazyLoader::getUser(2);
$user2->display();

$user3 = UserLazyLoader::getUser(3);
$user3->display();
