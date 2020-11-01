<?php

require_once __DIR__ . '/User.php';

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetName()
    {
        $user = new User();
        $user->setFirstName('Jon')->setLastName('Snow');
        $name = $user->getName();
        $this->assertEquals('Jon Snow', $name, 'Error when both first and last names are provided');

        $user = new User();
        $user->setFirstName('Jon');
        $name = $user->getName();
        $this->assertEquals('Jon', $name, 'Error when last name is not provided');
    }
}
