<?php

$characters = [
    'Targaryen' => [
        'Daenerys' => true,
        'Rhaegar' => true,
    ],
    'Stark' => [
        'Arya' => true,
        'Sansa' => true,
        'Eddard' => false,
    ],
    'Lannister' => [
        'Tyrion' => true,
        'Cersei' => true,
    ],
];

foreach ($characters as $lastname => $familyMembers) {
    echo "$lastname family<br/>";
}
