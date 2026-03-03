<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListClusterManagerAuthStateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListClusterManagerAuthStateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authType  查询指定集群界面授权类型，0为界面普通授权，当前仅开放普通授权
    * authorized  查询集群是否已开启界面授权
    * expirationTime  集群界面授权的过期时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authType' => 'float',
            'authorized' => 'bool',
            'expirationTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authType  查询指定集群界面授权类型，0为界面普通授权，当前仅开放普通授权
    * authorized  查询集群是否已开启界面授权
    * expirationTime  集群界面授权的过期时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authType' => null,
        'authorized' => null,
        'expirationTime' => null
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
    * authType  查询指定集群界面授权类型，0为界面普通授权，当前仅开放普通授权
    * authorized  查询集群是否已开启界面授权
    * expirationTime  集群界面授权的过期时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authType' => 'auth_type',
            'authorized' => 'authorized',
            'expirationTime' => 'expiration_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authType  查询指定集群界面授权类型，0为界面普通授权，当前仅开放普通授权
    * authorized  查询集群是否已开启界面授权
    * expirationTime  集群界面授权的过期时间
    *
    * @var string[]
    */
    protected static $setters = [
            'authType' => 'setAuthType',
            'authorized' => 'setAuthorized',
            'expirationTime' => 'setExpirationTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authType  查询指定集群界面授权类型，0为界面普通授权，当前仅开放普通授权
    * authorized  查询集群是否已开启界面授权
    * expirationTime  集群界面授权的过期时间
    *
    * @var string[]
    */
    protected static $getters = [
            'authType' => 'getAuthType',
            'authorized' => 'getAuthorized',
            'expirationTime' => 'getExpirationTime'
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
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['authorized'] = isset($data['authorized']) ? $data['authorized'] : null;
        $this->container['expirationTime'] = isset($data['expirationTime']) ? $data['expirationTime'] : null;
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
    * Gets authType
    *  查询指定集群界面授权类型，0为界面普通授权，当前仅开放普通授权
    *
    * @return float|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param float|null $authType 查询指定集群界面授权类型，0为界面普通授权，当前仅开放普通授权
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets authorized
    *  查询集群是否已开启界面授权
    *
    * @return bool|null
    */
    public function getAuthorized()
    {
        return $this->container['authorized'];
    }

    /**
    * Sets authorized
    *
    * @param bool|null $authorized 查询集群是否已开启界面授权
    *
    * @return $this
    */
    public function setAuthorized($authorized)
    {
        $this->container['authorized'] = $authorized;
        return $this;
    }

    /**
    * Gets expirationTime
    *  集群界面授权的过期时间
    *
    * @return string|null
    */
    public function getExpirationTime()
    {
        return $this->container['expirationTime'];
    }

    /**
    * Sets expirationTime
    *
    * @param string|null $expirationTime 集群界面授权的过期时间
    *
    * @return $this
    */
    public function setExpirationTime($expirationTime)
    {
        $this->container['expirationTime'] = $expirationTime;
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

