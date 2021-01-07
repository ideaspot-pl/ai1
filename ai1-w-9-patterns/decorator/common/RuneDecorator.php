<?php
class RuneDecorator extends SwordDecorator
{
    public function getPurchasePrice()
    {
        return $this->getWrappedObj()->getPurchasePrice() + 500;
    }

    public function getSellPrice()
    {
        return $this->getWrappedObj()->getSellPrice() + 100;
    }

    public function getDamage()
    {
        return $this->getWrappedObj()->getDamage() + 20;
    }
}
