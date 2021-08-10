<?php


namespace HuaweiCloud\SDK\Core\Auth;


class AuthCache
{
    static private $authCache = [];

    static function getAuth($akWithName)
    {
        if(in_array($akWithName,self::$authCache)){
          return self::$authCache[$akWithName];
        }
        return null;
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
