<?php

class Person
{
    private $firstName;
    private $lastName;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return Person
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return Person
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    public static function getType()
    {
        return "Person";
    }

    public static function newWithName($firstName, $lastName)
    {
        var_dump(self::getType());
        var_dump(static::getType());

        $person = new self();
//        $person = new static();
        $person->setFirstName($firstName);
        $person->setLastName($lastName);
        return $person;
    }
}

class Student extends Person
{
    public static function getType()
    {
        return "Student";
    }
}

$person = Person::newWithName('Arya', 'Stark');
$student = Student::newWithName('Samwell', 'Tarly');

var_dump($person);
var_dump($student);
