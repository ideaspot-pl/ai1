<?php

class DuckSimpleFactory
{
    /**
     * @param string $type
     * @return AbstractDuck|DomesticDuck|MallardDuck|MarbledDuck
     * @throws Exception
     */
    public static function getDuck($type)
    {
        // ...
    }
}
