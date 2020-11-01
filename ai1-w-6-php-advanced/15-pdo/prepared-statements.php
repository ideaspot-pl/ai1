<?php

require_once __DIR__ . '/../config.php';
global $config;

$pdo = new PDO($config['dsn'], $config['username'], $config['password']);
$statement = $pdo->prepare('SELECT * FROM user WHERE id = :id');


for ($i = 1; $i < 10; $i++) {
    $result = $statement->execute(array(
        'id' => $i,
    ));

    while ($row = $statement->fetch()) {
        var_dump($row);
    }
}
