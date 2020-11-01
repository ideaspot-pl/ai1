<?php

ini_set('display_errors', false);

echo '<pre>';
echo 'isset: ' . (isset($_REQUEST['intVal']) ? 'yes' : 'no') . "\n";
echo 'empty: ' . (empty($_REQUEST['intVal']) ? 'yes' : 'no') . "\n";
echo 'ctype_alnum: ' . (ctype_alnum($_REQUEST['intVal']) ? 'yes' : 'no') . "\n";
echo 'ctype_alpha: ' . (ctype_alpha($_REQUEST['intVal']) ? 'yes' : 'no') . "\n";
echo 'ctype_digit: ' . (ctype_digit($_REQUEST['intVal']) ? 'yes' : 'no') . "\n";
echo '/\d+/: ' . (preg_match('/\d+/', $_REQUEST['intVal']) ? 'yes' : 'no') . "\n";
echo '/[0-9]+/: ' . (preg_match('/[0-9]+/', $_REQUEST['intVal']) ? 'yes' : 'no') . "\n";
echo '/[a-zA-Z]+/+: ' . (preg_match('/[a-zA-Z]+/', $_REQUEST['intVal']) ? 'yes' : 'no') . "\n";
echo '</pre>';
?>
<form method="get">
    <input type="text" name="intVal" value="<?= $_REQUEST['intVal'] ?>" />
    <input type="submit" />
</form>
