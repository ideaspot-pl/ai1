<?php

ini_set('display_errors', true);

define("ABC", "Abc");

var_dump(ABC);
// string 'Abc' (length=3)

var_dump(Abc);
// error notice; string 'Abc' (length=3)

define("PI", 3.14159);

var_dump(PI);
// float 3.14159
var_dump(pi);
// error notice; string 'pi' (length=2)
