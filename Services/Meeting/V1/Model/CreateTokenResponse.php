<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTokenResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;

    const DISCRIMINATOR = null;

    protected static $openAPIModelName = 'CreateTokenResponse';

    protected static $openAPITypes = [
        'accessToken' => 'string',
        'tokenIp' => 'string',
        'validPeriod' => 'int',
        'expireTime' => 'int',
        'user' => 'HuaweiCloud\SDK\Meeting\V1\Model\UserInfo',
        'clientType' => 'int',
        'forceLoginInd' => 'int',
        'firstLogin' => 'boolean',
        'pwdExpired' => 'boolean',
        'daysPwdAvailable' => 'int',
    ];

    protected static $openAPIFormats = [
        'accessToken' => null,
        'tokenIp' => null,
        'validPeriod' => null,
        'expireTime' => null,
        'user' => null,
        'clientType' => null,
        'forceLoginInd' => null,
        'firstLogin' => null,
        'pwdExpired' => null,
        'daysPwdAvailable' => null,
    ];

    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    protected static $attributeMap = [
        'accessToken' => 'accessToken',
        'tokenIp' => 'tokenIp',
        'validPeriod' => 'validPeriod',
        'expireTime' => 'expireTime',
        'user' => 'user',
        'clientType' => 'clientType',
        'forceLoginInd' => 'forceLoginInd',
        'firstLogin' => 'firstLogin',
        'pwdExpired' => 'pwdExpired',
        'daysPwdAvailable' => 'daysPwdAvailable',
    ];

    protected static $setters = [
        'accessToken' => 'setAccessToken',
        'tokenIp' => 'setTokenIp',
        'validPeriod' => 'setValidPeriod',
        'expireTime' => 'setExpireTime',
        'user' => 'setUser',
        'clientType' => 'setClientType',
        'forceLoginInd' => 'setForceLoginInd',
        'firstLogin' => 'setFirstLogin',
        'pwdExpired' => 'setPwdExpired',
        'daysPwdAvailable' => 'setDaysPwdAvailable',
    ];

    protected static $getters = [
        'accessToken' => 'getAccessToken',
        'tokenIp' => 'getTokenIp',
        'validPeriod' => 'getValidPeriod',
        'expireTime' => 'getExpireTime',
        'user' => 'getUser',
        'clientType' => 'getClientType',
        'forceLoginInd' => 'getForceLoginInd',
        'firstLogin' => 'getFirstLogin',
        'pwdExpired' => 'getPwdExpired',
        'daysPwdAvailable' => 'getDaysPwdAvailable',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['tokenIp'] = isset($data['tokenIp']) ? $data['tokenIp'] : null;
        $this->container['validPeriod'] = isset($data['validPeriod']) ? $data['validPeriod'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['clientType'] = isset($data['clientType']) ? $data['clientType'] : null;
        $this->container['forceLoginInd'] = isset($data['forceLoginInd']) ? $data['forceLoginInd'] : null;
        $this->container['firstLogin'] = isset($data['firstLogin']) ? $data['firstLogin'] : null;
        $this->container['pwdExpired'] = isset($data['pwdExpired']) ? $data['pwdExpired'] : null;
        $this->container['daysPwdAvailable'] = isset($data['daysPwdAvailable']) ? $data['daysPwdAvailable'] : null;
    }

    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;
        return $this;
    }

    public function getTokenIp()
    {
        return $this->container['tokenIp'];
    }

    public function setTokenIp($tokenIp)
    {
        $this->container['tokenIp'] = $tokenIp;
        return $this;
    }

    public function getValidPeriod()
    {
        return $this->container['validPeriod'];
    }

    public function setValidPeriod($validPeriod)
    {
        $this->container['validPeriod'] = $validPeriod;
        return $this;
    }

    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    public function getUser()
    {
        return $this->container['user'];
    }

    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    public function getClientType()
    {
        return $this->container['clientType'];
    }

    public function setClientType($clientType)
    {
        $this->container['clientType'] = $clientType;
        return $this;
    }

    public function getForceLoginInd()
    {
        return $this->container['forceLoginInd'];
    }

    public function setForceLoginInd($forceLoginInd)
    {
        $this->container['forceLoginInd'] = $forceLoginInd;
        return $this;
    }

    public function getFirstLogin()
    {
        return $this->container['firstLogin'];
    }

    public function setFirstLogin($firstLogin)
    {
        $this->container['firstLogin'] = $firstLogin;
        return $this;
    }

    public function getPwdExpired()
    {
        return $this->container['pwdExpired'];
    }

    public function setPwdExpired($pwdExpired)
    {
        $this->container['pwdExpired'] = $pwdExpired;
        return $this;
    }

    public function getDaysPwdAvailable()
    {
        return $this->container['daysPwdAvailable'];
    }

    public function setDaysPwdAvailable($daysPwdAvailable)
    {
        $this->container['daysPwdAvailable'] = $daysPwdAvailable;
        return $this;
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

