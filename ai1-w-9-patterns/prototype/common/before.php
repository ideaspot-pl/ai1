<?php
require_once __DIR__ . '/../../common-autoload.php';

$student1 = new Student();
$student1->setFirstName('Jon')->setLastName('Snow')->setSemester('5')->setDepartment('IT');
$student1->display();

$student2 = new Student();
$student2->setFirstName('Arya')->setLastName('Stark')->setSemester('5')->setDepartment('IT');
$student2->display();

$student3 = new Student();
$student3->setFirstName('Sansa')->setLastName('Stark')->setSemester('5')->setDepartment('IT');
$student3->display();
