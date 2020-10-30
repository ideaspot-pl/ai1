<?php

$conn = mysqli_connect('127.0.0.1', 'homestead', 'secret', 'lusers');
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);
if (! $result) {
    die("Error: " . mysqli_error($conn));
}

$users = array();
while ($row = mysqli_fetch_assoc($result)) {
    $users[] = $row;
}

foreach ($users as $user) {
    var_dump($user);
}

?>
<form method="post" action="mysqli-submit.php">
    <input type="text" placeholder="username" name="username" />
    <input type="text" placeholder="first name" name="firstName" />
    <input type="text" placeholder="last name" name="lastName" />
    <input type="submit" value="Submit" />
</form>
