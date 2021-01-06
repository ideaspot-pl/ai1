<?php
class Student
{
    private $department;
    private $semester;
    private $firstName;
    private $lastName;

    public function __construct()
    {
        sleep(2);
    }

    public function display()
    {
        echo "Student {$this->firstName} {$this->lastName}; semester {$this->semester} of {$this->department} department.\n";
    }

    /**
     * @param mixed $department
     * @return Student
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * @param mixed $semester
     * @return Student
     */
    public function setSemester($semester)
    {
        $this->semester = $semester;
        return $this;
    }

    /**
     * @param mixed $firstName
     * @return Student
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @param mixed $lastName
     * @return Student
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
}
