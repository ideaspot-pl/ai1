<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/UserRepository.php';

$userRepository = new UserRepository();

for ($i = 1; $i < 10; $i++) {
    $user = $userRepository->findById($i);
    var_dump($user);
    if ($user) {
        var_dump($user->getName());
    }
}
