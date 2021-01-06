<?php

abstract class AbstractDuckFactory
{
    /**
     * @param string $type
     * @return AbstractDuck
     */
    abstract public static function createDuck($type);
}
