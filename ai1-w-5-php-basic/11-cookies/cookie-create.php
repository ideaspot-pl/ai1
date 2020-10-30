<?php

setcookie('myCookie', '123', time() + 3600);
//setcookie('myCookie', '123', time());
var_dump($_COOKIE['myCookie']);
