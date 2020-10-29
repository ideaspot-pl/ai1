<?php

function sayHello($name)
{
    echo "Hello $name!<br/>";
}

foreach (array('Jon', 'Arya', 'Eddard') as $characterName) {
    sayHello($characterName);
}
