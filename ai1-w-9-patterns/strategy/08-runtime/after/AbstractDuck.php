<?php

abstract class AbstractDuck
{
    /** @var FlyInterface */
    protected $flyer;

    /** @var QuackInterface */
    protected $quacker;

    public function __construct()
    {
        $this->flyer = new FlyerNone();
        $this->quacker = new QuackerMute();
    }

    /**
     * @param FlyInterface $flyer
     * @return AbstractDuck
     */
    public function setFlyer($flyer)
    {
        $this->flyer = $flyer;
        return $this;
    }

    /**
     * @param QuackInterface $quacker
     * @return AbstractDuck
     */
    public function setQuacker($quacker)
    {
        $this->quacker = $quacker;
        return $this;
    }

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
