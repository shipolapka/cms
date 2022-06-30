<?php

namespace Engine\Helper;

class Cookie
{
    /**
     * @param $key
     * @param $value
     * @param $time
     * @return void
     */
    public static function set ($key, $value, $time = 31536000)
    {
        setcookie($key, $value, time() + $time, '/');
    }


    /**
     * @param $key
     * @return mixed|null
     */
    public static function get($key)
    {
        if(isset($_COOKIE[$key]))
        {
            return $_COOKIE[$key];
        }
        return null;
    }

    public static function delete($key)
    {
        if(isset($_COOKIE[$key]))
        {
            self::set($key, '', -3600);
            unset($_COOKIE[$key]);
        }
    }
}