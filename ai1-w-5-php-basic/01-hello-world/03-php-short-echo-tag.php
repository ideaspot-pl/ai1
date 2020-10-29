<?php

$title = "Welcome to PHP!";
$date = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
<?= $title ?><br/>
Today is: <strong><?= $date ?></strong>
</body>
</html>

