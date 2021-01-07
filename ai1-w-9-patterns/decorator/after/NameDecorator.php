<?php
class NameDecorator extends SwordDecorator
{
    private $name;

    public function __construct(Sword $wrappedObj, $name)
    {
        parent::__construct($wrappedObj);
        $this->name = $name;
    }

    public function display()
    {
        echo $this->name . ' -- ';
        $this->getWrappedObj()->display();
    }
}
