<?php


namespace HuaweiCloud\SDK\Core\Auth;


class AuthCache
{
    static private $authCache = [];

    static public function getAuth($akWithName)
    {
        return self::$authCache[$akWithName];
    }

    static function setAuth($akWithName, $id)
    {
        self::$authCache[$akWithName] = $id;
    }

    static function removeAuth($akWithName)
    {
        unset(self::$authCache[$akWithName]);
    }
}
