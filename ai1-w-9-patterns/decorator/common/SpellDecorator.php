<?php
class SpellDecorator extends SwordDecorator
{
    public function getDamage()
    {
        return $this->getWrappedObj()->getDamage() + 10;
    }
}
