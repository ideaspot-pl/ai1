<?php

ini_set('display_errors', true);

class Person
{
    private $age;
    protected $minAge = 18;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     * @return Person
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

}

class Student extends Person
{
    public function isAboveMinAge()
    {
        return ($this->getAge() >= $this->minAge) ? true : false;
    }
}

$student = new Student();
$student->setAge(21);
var_dump($student->getAge());
// int 21

//var_dump($student->age);
//// notice, null

var_dump($student->isAboveMinAge());
// boolean true

//var_dump($student->minAge);
//// fatal error
