<?php

require_once __DIR__ . '/../config.php';
global $config;

$pdo = new PDO($config['dsn'], $config['username'], $config['password']);
$sql = 'SELECT * FROM user WHERE id >= 0 AND id <= 10';
$statement = $pdo->query($sql);
while ($row = $statement->fetch()) {
    var_dump($row);
}
