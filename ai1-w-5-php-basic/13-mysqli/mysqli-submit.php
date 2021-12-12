<?php

if (empty($_REQUEST['username']) || empty($_REQUEST['firstName']) || empty($_REQUEST['lastName'])) {
    die("Invalid input.");
}

$conn = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'ai');
$sql = "INSERT INTO user (username, firstName, lastName) VALUES ('{$_REQUEST['username']}', '{$_REQUEST['firstName']}', '{$_REQUEST['lastName']}')";
$result = mysqli_query($conn, $sql);
if (! $result) {
    die("Error: " . mysqli_error($conn));
}

header('Location: mysqli-index.php');

?>
