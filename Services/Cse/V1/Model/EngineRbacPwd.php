<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EngineRbacPwd implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EngineRbacPwd';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pwd  开启安全认证的微服务引擎专享版默认root帐号的密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pwd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pwd  开启安全认证的微服务引擎专享版默认root帐号的密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pwd' => null
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
    * pwd  开启安全认证的微服务引擎专享版默认root帐号的密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pwd' => 'pwd'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pwd  开启安全认证的微服务引擎专享版默认root帐号的密码
    *
    * @var string[]
    */
    protected static $setters = [
            'pwd' => 'setPwd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pwd  开启安全认证的微服务引擎专享版默认root帐号的密码
    *
    * @var string[]
    */
    protected static $getters = [
            'pwd' => 'getPwd'
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
        $this->container['pwd'] = isset($data['pwd']) ? $data['pwd'] : null;
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
    * Gets pwd
    *  开启安全认证的微服务引擎专享版默认root帐号的密码
    *
    * @return string|null
    */
    public function getPwd()
    {
        return $this->container['pwd'];
    }

    /**
    * Sets pwd
    *
    * @param string|null $pwd 开启安全认证的微服务引擎专享版默认root帐号的密码
    *
    * @return $this
    */
    public function setPwd($pwd)
    {
        $this->container['pwd'] = $pwd;
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

