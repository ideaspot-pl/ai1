<?php

abstract class AbstractDuck
{
    /** @var FlyInterface */
    protected $flyer;

    /** @var QuackInterface */
    protected $quacker;

    abstract public function getName();

    public function swim()
    {
        echo "Plum plum plum...\n";
    }

    public function doQuack()
    {
        $this->quacker->quack();
    }

    public function doFly()
    {
        $this->flyer->fly();
    }
}
