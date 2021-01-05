<?php
spl_autoload_register(function ($className) {
    @include_once "$className.php";
    @include_once "../common/$className.php";
});
