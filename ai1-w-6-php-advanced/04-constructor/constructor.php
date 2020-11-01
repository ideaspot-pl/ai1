<?php

class Student
{
    public function __construct($id = null)
    {
        if ($id) {
            // load user from DB
        }
    }
}

$alice = new Student(3);
$bob = new Student(5);
