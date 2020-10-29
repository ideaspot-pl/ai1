<?php

$characters = array(
    'Targaryen' => array(
        'Daenerys' => true,
        'Rhaegar' => true,
    ),
    'Stark' => array(
        'Arya' => true,
        'Sansa' => true,
        'Eddard' => false,
    ),
    'Lannister' => array(
        'Tyrion' => true,
        'Cersei' => true,
    ),
);

foreach ($characters as $lastname => $familyMembers) {
    echo "<strong>$lastname family</strong><br/>";
    foreach ($familyMembers as $firstName => $isAlive) {
        echo $firstName . " - " . ($isAlive ? 'alive' : 'deceased') . "<br/>";
    }
}
