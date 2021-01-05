<?php

class DomesticDuck extends Duck implements QuackInterface, FlyInterface
{
    public function getName()
    {
        return "Domestic Duck";
    }

    public function fly()
    {
        echo "Domestic Fly Fly Fly\n";
    }

    public function quack()
    {
        echo "Domestic Quack Quack Quack\n";
    }
}
