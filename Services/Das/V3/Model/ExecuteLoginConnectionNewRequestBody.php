<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecuteLoginConnectionNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecuteLoginConnectionNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * login  login
    * logout  logout
    * retryLogin  retryLogin
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'login' => '\HuaweiCloud\SDK\Das\V3\Model\LoginInfo',
            'logout' => '\HuaweiCloud\SDK\Das\V3\Model\LogoutInfo',
            'retryLogin' => '\HuaweiCloud\SDK\Das\V3\Model\RetryLoginInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * login  login
    * logout  logout
    * retryLogin  retryLogin
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'login' => null,
        'logout' => null,
        'retryLogin' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * login  login
    * logout  logout
    * retryLogin  retryLogin
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'login' => 'login',
            'logout' => 'logout',
            'retryLogin' => 'retry_login'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * login  login
    * logout  logout
    * retryLogin  retryLogin
    *
    * @var string[]
    */
    protected static $setters = [
            'login' => 'setLogin',
            'logout' => 'setLogout',
            'retryLogin' => 'setRetryLogin'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * login  login
    * logout  logout
    * retryLogin  retryLogin
    *
    * @var string[]
    */
    protected static $getters = [
            'login' => 'getLogin',
            'logout' => 'getLogout',
            'retryLogin' => 'getRetryLogin'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['logout'] = isset($data['logout']) ? $data['logout'] : null;
        $this->container['retryLogin'] = isset($data['retryLogin']) ? $data['retryLogin'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets login
    *  login
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\LoginInfo|null
    */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
    * Sets login
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\LoginInfo|null $login login
    *
    * @return $this
    */
    public function setLogin($login)
    {
        $this->container['login'] = $login;
        return $this;
    }

    /**
    * Gets logout
    *  logout
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\LogoutInfo|null
    */
    public function getLogout()
    {
        return $this->container['logout'];
    }

    /**
    * Sets logout
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\LogoutInfo|null $logout logout
    *
    * @return $this
    */
    public function setLogout($logout)
    {
        $this->container['logout'] = $logout;
        return $this;
    }

    /**
    * Gets retryLogin
    *  retryLogin
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\RetryLoginInfo|null
    */
    public function getRetryLogin()
    {
        return $this->container['retryLogin'];
    }

    /**
    * Sets retryLogin
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\RetryLoginInfo|null $retryLogin retryLogin
    *
    * @return $this
    */
    public function setRetryLogin($retryLogin)
    {
        $this->container['retryLogin'] = $retryLogin;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

