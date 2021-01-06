<?php
require_once __DIR__ . '/../../common-autoload.php';

$studentPrototype = new Student();
$studentPrototype->setDepartment('IT')->setSemester('5');

$student1 = clone $studentPrototype;
$student1->setFirstName('Jon')->setLastName('Snow');
$student1->display();

$student2 = clone $studentPrototype;
$student2->setFirstName('Arya')->setLastName('Stark');
$student2->display();

$student3 = clone $studentPrototype;
$student3->setFirstName('Sansa')->setLastName('Stark');
$student3->display();
