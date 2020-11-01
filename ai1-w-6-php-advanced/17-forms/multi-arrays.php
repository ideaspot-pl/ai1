<?php

var_dump($_REQUEST);
?>
<form method="post">
    <input type="checkbox" name="option[key1][]" value="opt1" />
    <input type="checkbox" name="option[key1][]" value="opt2" />
    <input type="checkbox" name="option[key2][]" value="opt3" />
    <input type="checkbox" name="option[key2][]" value="opt4" />
    <input type="submit" />
</form>
