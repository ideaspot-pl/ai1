<?php
spl_autoload_register(function ($className) {
    include_once "$className.php"; // deliberately no __DIR__, so loads always from the script execution dir
});
