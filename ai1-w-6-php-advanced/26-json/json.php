<?php

class User
{
    public $firstName;
    public $lastName;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return User
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
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
}

$user = new User();
$user->setFirstName('Jon')->setLastName('Snow');

$json = json_encode($user);
$user2 = json_decode($json);

var_dump($user);
var_dump($json);
var_dump($user2);
