<?php

class MallardDuck extends Duck implements QuackInterface, FlyInterface
{
    use QuackTrait;
    use FlyTrait;

    public function getName()
    {
        return "Mallard Duck";
    }
}
