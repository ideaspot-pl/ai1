<?php
class ThrowableAdapter implements WeaponInterface
{
    /** @var ThrowableInterface */
    private $adaptee;

    public function __construct(ThrowableInterface $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function attack()
    {
        $this->adaptee->doThrow();
    }
}
