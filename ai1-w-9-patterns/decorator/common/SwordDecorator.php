<?php
abstract class SwordDecorator extends Sword
{
    /** @var Sword */
    private $wrappedObj;

    public function __construct(Sword $wrappedObj)
    {
        $this->wrappedObj = $wrappedObj;
    }

    public function getWrappedObj()
    {
        return $this->wrappedObj;
    }

    public function setWrappedObj($wrappedObj)
    {
        $this->wrappedObj = $wrappedObj;
        return $this;
    }

    public function getPurchasePrice()
    {
        return $this->getWrappedObj()->getPurchasePrice();
    }

    public function getSellPrice()
    {
        return $this->getWrappedObj()->getSellPrice();
    }

    public function getDamage()
    {
        return $this->getWrappedObj()->getDamage();
    }
}
