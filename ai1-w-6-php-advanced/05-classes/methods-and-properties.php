<?php

class Student
{
    public $firstName;
    public $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getName()
    {
        return "{$this->getFirstName()} {$this->getLastName()}";
    }
}

$alice = new Student("Alice", "Smith");
var_dump($alice->getName());
// string 'Alice Smith' (length=11)
