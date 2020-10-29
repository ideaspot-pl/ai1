<?php

$characters = [
    'Targaryen' => [
        'Daenerys' => true,
        'Rhaegar' => true,
    ],
    'Stark' => [
        'Arya' => true,
        'Sansa' => true,
        'Eddard' => true,
    ],
    'Lannister' => [
        'Tyrion' => true,
        'Cersei' => true,
    ],
];

var_dump($characters);
echo "Is Eddard Stark still alive? " . ($characters['Stark']['Eddard'] ? 'Yes' : 'No') . '<br/>';

$characters['Stark']['Eddard'] = false;
var_dump($characters);
echo "Is Eddard Stark still alive? " . ($characters['Stark']['Eddard'] ? 'Yes' : 'No') . '<br/>';
