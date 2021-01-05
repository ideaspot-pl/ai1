<?php

class WoodenDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->quacker = new QuackerMute();
        $this->flyer = new FlyerNone();
    }

    public function getName()
    {
        return "Wooden Duck";
    }
}
