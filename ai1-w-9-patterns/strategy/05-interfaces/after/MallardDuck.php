<?php

class MallardDuck extends Duck implements QuackInterface, FlyInterface
{
    public function getName()
    {
        return "Mallard Duck";
    }

    public function fly()
    {
        echo "Mallard Fly Fly\n";
    }

    public function quack()
    {
        echo "Mallard Quack Quack\n";
    }
}
