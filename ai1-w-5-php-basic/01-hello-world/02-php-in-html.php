<?php

$title = "Welcome to PHP!";
$date = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
<?php echo $title; ?><br/>
Today is: <strong><?php echo $date; ?></strong>
</body>
</html>
