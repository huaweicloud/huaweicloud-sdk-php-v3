<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeviceIoTDBPushInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeviceIoTDBPushInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * storageGroup  数据存储的存储组
    * format  数据格式转换类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'storageGroup' => 'string',
            'format' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * storageGroup  数据存储的存储组
    * format  数据格式转换类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'storageGroup' => null,
        'format' => null
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
    * storageGroup  数据存储的存储组
    * format  数据格式转换类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'storageGroup' => 'storage_group',
            'format' => 'format'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * storageGroup  数据存储的存储组
    * format  数据格式转换类型
    *
    * @var string[]
    */
    protected static $setters = [
            'storageGroup' => 'setStorageGroup',
            'format' => 'setFormat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * storageGroup  数据存储的存储组
    * format  数据格式转换类型
    *
    * @var string[]
    */
    protected static $getters = [
            'storageGroup' => 'getStorageGroup',
            'format' => 'getFormat'
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
        $this->container['storageGroup'] = isset($data['storageGroup']) ? $data['storageGroup'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['storageGroup'] === null) {
            $invalidProperties[] = "'storageGroup' can't be null";
        }
            if ((mb_strlen($this->container['storageGroup']) > 32)) {
                $invalidProperties[] = "invalid value for 'storageGroup', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['storageGroup']) < 1)) {
                $invalidProperties[] = "invalid value for 'storageGroup', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_.-]*$/", $this->container['storageGroup'])) {
                $invalidProperties[] = "invalid value for 'storageGroup', must be conform to the pattern /^[a-zA-Z0-9_.-]*$/.";
            }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
            if ((mb_strlen($this->container['format']) > 32)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['format']) < 1)) {
                $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/(iotda_1.0)/", $this->container['format'])) {
                $invalidProperties[] = "invalid value for 'format', must be conform to the pattern /(iotda_1.0)/.";
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
    * Gets storageGroup
    *  数据存储的存储组
    *
    * @return string
    */
    public function getStorageGroup()
    {
        return $this->container['storageGroup'];
    }

    /**
    * Sets storageGroup
    *
    * @param string $storageGroup 数据存储的存储组
    *
    * @return $this
    */
    public function setStorageGroup($storageGroup)
    {
        $this->container['storageGroup'] = $storageGroup;
        return $this;
    }

    /**
    * Gets format
    *  数据格式转换类型
    *
    * @return string
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string $format 数据格式转换类型
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
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

