<?php

class DomesticDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->quacker = new Quacker();
        $this->flyer = new FlyerLow();
    }

    public function getName()
    {
        return "Domestic Duck";
    }
}
