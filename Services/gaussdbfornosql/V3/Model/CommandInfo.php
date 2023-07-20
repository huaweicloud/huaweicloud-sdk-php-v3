<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommandInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommandInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * originName  原高危命令，当前支持的有：keys、flushdb、flushall、hgetall、hkeys、hvals、smembers
    * name  当前生效的命令名称，当为空时表示命令禁用，允许修改为30个字符以内数字、字母和下划线的组合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'originName' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * originName  原高危命令，当前支持的有：keys、flushdb、flushall、hgetall、hkeys、hvals、smembers
    * name  当前生效的命令名称，当为空时表示命令禁用，允许修改为30个字符以内数字、字母和下划线的组合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'originName' => null,
        'name' => null
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
    * originName  原高危命令，当前支持的有：keys、flushdb、flushall、hgetall、hkeys、hvals、smembers
    * name  当前生效的命令名称，当为空时表示命令禁用，允许修改为30个字符以内数字、字母和下划线的组合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'originName' => 'origin_name',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * originName  原高危命令，当前支持的有：keys、flushdb、flushall、hgetall、hkeys、hvals、smembers
    * name  当前生效的命令名称，当为空时表示命令禁用，允许修改为30个字符以内数字、字母和下划线的组合
    *
    * @var string[]
    */
    protected static $setters = [
            'originName' => 'setOriginName',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * originName  原高危命令，当前支持的有：keys、flushdb、flushall、hgetall、hkeys、hvals、smembers
    * name  当前生效的命令名称，当为空时表示命令禁用，允许修改为30个字符以内数字、字母和下划线的组合
    *
    * @var string[]
    */
    protected static $getters = [
            'originName' => 'getOriginName',
            'name' => 'getName'
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
        $this->container['originName'] = isset($data['originName']) ? $data['originName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['originName'] === null) {
            $invalidProperties[] = "'originName' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 30)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 30.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
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
    * Gets originName
    *  原高危命令，当前支持的有：keys、flushdb、flushall、hgetall、hkeys、hvals、smembers
    *
    * @return string
    */
    public function getOriginName()
    {
        return $this->container['originName'];
    }

    /**
    * Sets originName
    *
    * @param string $originName 原高危命令，当前支持的有：keys、flushdb、flushall、hgetall、hkeys、hvals、smembers
    *
    * @return $this
    */
    public function setOriginName($originName)
    {
        $this->container['originName'] = $originName;
        return $this;
    }

    /**
    * Gets name
    *  当前生效的命令名称，当为空时表示命令禁用，允许修改为30个字符以内数字、字母和下划线的组合
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 当前生效的命令名称，当为空时表示命令禁用，允许修改为30个字符以内数字、字母和下划线的组合
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

