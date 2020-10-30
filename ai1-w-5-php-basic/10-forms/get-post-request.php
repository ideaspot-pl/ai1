<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET, POST, REQUEST</title>
</head>
<body>
<h2>GET</h2>
<pre><?= print_r($_GET, true) ?></pre>
<h2>POST</h2>
<pre><?= print_r($_POST, true) ?></pre>
<h2>REQUEST</h2>
<pre><?= print_r($_REQUEST, true) ?></pre>
<h2>Form get</h2>
<form method="get">
    <input type="text" name="getField" />
    <input type="submit" value="Submit" />
</form>
<h2>Form post</h2>
<form method="post">
    <input type="text" name="postField" />
    <input type="submit" value="Submit" />
</form>
</body>
</html>
