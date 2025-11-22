<?php

function sayHello($name)
{
    echo "Hello $name!<br/>";
}

foreach (['Alice', 'Bob', 'Carol'] as $characterName) {
    sayHello($characterName);
}
