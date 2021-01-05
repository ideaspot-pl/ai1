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
        switch ($type) {
            case 'mallard':
                return new MallardDuck();
            case 'domestic':
                return new DomesticDuck();
            case 'marbled':
                return new MarbledDuck();
            default:
                throw new \Exception("Invalid duck type.");
        }
    }
}
