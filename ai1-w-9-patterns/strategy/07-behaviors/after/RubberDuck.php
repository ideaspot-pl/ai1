<?php

class RubberDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->quacker = new Squeaker();
        $this->flyer = new FlyerNone();
    }

    public function getName()
    {
        return "Rubber Duck";
    }
}
