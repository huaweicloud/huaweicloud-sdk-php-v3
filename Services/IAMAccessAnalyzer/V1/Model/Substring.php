<?php

namespace HuaweiCloud\SDK\IAMAccessAnalyzer\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Substring implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Substring';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * start  子字符串的起始索引，从0开始。0表示第一个字符。
    * length  子字符串的长度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'start' => 'int',
            'length' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * start  子字符串的起始索引，从0开始。0表示第一个字符。
    * length  子字符串的长度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'start' => 'int32',
        'length' => 'int32'
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
    * start  子字符串的起始索引，从0开始。0表示第一个字符。
    * length  子字符串的长度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'start' => 'start',
            'length' => 'length'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * start  子字符串的起始索引，从0开始。0表示第一个字符。
    * length  子字符串的长度。
    *
    * @var string[]
    */
    protected static $setters = [
            'start' => 'setStart',
            'length' => 'setLength'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * start  子字符串的起始索引，从0开始。0表示第一个字符。
    * length  子字符串的长度。
    *
    * @var string[]
    */
    protected static $getters = [
            'start' => 'getStart',
            'length' => 'getLength'
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
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['length'] === null) {
            $invalidProperties[] = "'length' can't be null";
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
    * Gets start
    *  子字符串的起始索引，从0开始。0表示第一个字符。
    *
    * @return int
    */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
    * Sets start
    *
    * @param int $start 子字符串的起始索引，从0开始。0表示第一个字符。
    *
    * @return $this
    */
    public function setStart($start)
    {
        $this->container['start'] = $start;
        return $this;
    }

    /**
    * Gets length
    *  子字符串的长度。
    *
    * @return int
    */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
    * Sets length
    *
    * @param int $length 子字符串的长度。
    *
    * @return $this
    */
    public function setLength($length)
    {
        $this->container['length'] = $length;
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

