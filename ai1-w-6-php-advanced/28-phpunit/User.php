<?php

class User
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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

//    /**
//     * @return string
//     */
//    public function getName()
//    {
//        if ($this->firstName && $this->lastName) {
//            return $this->firstName . ' ' . $this->lastName;
//        }
//        if ($this->firstName) {
//            return $this->firstName;
//        }
//        if ($this->lastName) {
//            return $this->lastName;
//        }
//    }
}
