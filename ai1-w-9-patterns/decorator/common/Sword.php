<?php
abstract class Sword
{
   abstract public function getPurchasePrice();
   abstract public function getSellPrice();
   abstract public function getDamage();

   public function display()
   {
       echo "Purchase price: {$this->getPurchasePrice()} | Sell price: {$this->getSellPrice()} | Damage: {$this->getDamage()}\n";
   }
}
