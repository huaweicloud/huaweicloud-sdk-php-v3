<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UserQosReqInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UserQosReqInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pid  用户pid
    * accessMediaType  用户接入媒体类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pid' => 'string',
            'accessMediaType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pid  用户pid
    * accessMediaType  用户接入媒体类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pid' => null,
        'accessMediaType' => null
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
    * pid  用户pid
    * accessMediaType  用户接入媒体类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pid' => 'pid',
            'accessMediaType' => 'accessMediaType'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pid  用户pid
    * accessMediaType  用户接入媒体类型
    *
    * @var string[]
    */
    protected static $setters = [
            'pid' => 'setPid',
            'accessMediaType' => 'setAccessMediaType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pid  用户pid
    * accessMediaType  用户接入媒体类型
    *
    * @var string[]
    */
    protected static $getters = [
            'pid' => 'getPid',
            'accessMediaType' => 'getAccessMediaType'
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
        $this->container['pid'] = isset($data['pid']) ? $data['pid'] : null;
        $this->container['accessMediaType'] = isset($data['accessMediaType']) ? $data['accessMediaType'] : null;
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
    * Gets pid
    *  用户pid
    *
    * @return string|null
    */
    public function getPid()
    {
        return $this->container['pid'];
    }

    /**
    * Sets pid
    *
    * @param string|null $pid 用户pid
    *
    * @return $this
    */
    public function setPid($pid)
    {
        $this->container['pid'] = $pid;
        return $this;
    }

    /**
    * Gets accessMediaType
    *  用户接入媒体类型
    *
    * @return string|null
    */
    public function getAccessMediaType()
    {
        return $this->container['accessMediaType'];
    }

    /**
    * Sets accessMediaType
    *
    * @param string|null $accessMediaType 用户接入媒体类型
    *
    * @return $this
    */
    public function setAccessMediaType($accessMediaType)
    {
        $this->container['accessMediaType'] = $accessMediaType;
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

