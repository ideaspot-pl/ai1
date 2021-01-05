<?php

abstract class AbstractDuck
{
    abstract public function display();

    /**
     * @param string $type
     * @return AbstractDuck
     */
    abstract public static function createDuck($type);
}
