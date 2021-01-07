<?php
class ShootableAdapter implements WeaponInterface
{
    /** @var ShootableInterface */
    private $adaptee;

    public function __construct(ShootableInterface $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function attack()
    {
        $this->adaptee->shoot();
    }
}
