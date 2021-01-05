<?php

class DomesticDuck extends Duck implements QuackInterface, FlyInterface
{
    use QuackTrait;
    use FlyTrait;

    public function getName()
    {
        return "Domestic Duck";
    }
}
