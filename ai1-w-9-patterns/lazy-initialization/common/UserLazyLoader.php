<?php

class UserLazyLoader
{
    private static $instances = [];

    /**
     * @param $id
     * @return User
     */
    public static function getUser($id)
    {
        if (! isset(self::$instances[$id])) {
            self::$instances[$id] = new User($id);
        }

        return self::$instances[$id];
    }
}
