<?php
class CuttableAdapter implements WeaponInterface
{
    /** @var CuttableInterface */
    private $adaptee;

    public function __construct(CuttableInterface $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function attack()
    {
        $this->adaptee->cut();
    }
}
