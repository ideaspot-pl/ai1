<?php
class SteelSword extends Sword
{
    public function getPurchasePrice()
    {
        return 300;
    }

    public function getSellPrice()
    {
        return 100;
    }

    public function getDamage()
    {
        return 50;
    }
}
