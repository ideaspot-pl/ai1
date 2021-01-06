<?php

class User
{
    private $id;
    private $fetchedAt;

    public function __construct($id)
    {
        sleep(1);
        $this->id = $id;
        $this->fetchedAt = new \DateTime();
    }

    public function display()
    {
        echo "I am User {$this->id}, fetched at {$this->fetchedAt->format('H:i:s')}.\n";
    }
}
