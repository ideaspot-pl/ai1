<?php

class MarbledDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->quacker = new Quacker();
        $this->flyer = new FlyerHigh();
    }

    public function getName()
    {
        return "Marbled Duck";
    }
}
