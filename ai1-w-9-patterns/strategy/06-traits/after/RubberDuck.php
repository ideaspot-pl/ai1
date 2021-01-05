<?php

class RubberDuck extends Duck implements QuackInterface
{
    public function getName()
    {
        return "Rubber Duck";
    }

    public function quack()
    {
        echo "Squeak\n";
    }
}
