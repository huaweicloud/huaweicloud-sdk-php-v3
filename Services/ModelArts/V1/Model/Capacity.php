<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Capacity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Capacity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * value  value
    * maxValue  maxValue
    * timestamp  UTC时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'。
    * window  统计间隔，1s表示1秒，1m表示1分钟，1h为1小时。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'value' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Value',
            'maxValue' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Value',
            'timestamp' => 'string',
            'window' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * value  value
    * maxValue  maxValue
    * timestamp  UTC时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'。
    * window  统计间隔，1s表示1秒，1m表示1分钟，1h为1小时。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'value' => null,
        'maxValue' => null,
        'timestamp' => null,
        'window' => null
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
    * value  value
    * maxValue  maxValue
    * timestamp  UTC时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'。
    * window  统计间隔，1s表示1秒，1m表示1分钟，1h为1小时。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'value' => 'value',
            'maxValue' => 'maxValue',
            'timestamp' => 'timestamp',
            'window' => 'window'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * value  value
    * maxValue  maxValue
    * timestamp  UTC时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'。
    * window  统计间隔，1s表示1秒，1m表示1分钟，1h为1小时。
    *
    * @var string[]
    */
    protected static $setters = [
            'value' => 'setValue',
            'maxValue' => 'setMaxValue',
            'timestamp' => 'setTimestamp',
            'window' => 'setWindow'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * value  value
    * maxValue  maxValue
    * timestamp  UTC时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'。
    * window  统计间隔，1s表示1秒，1m表示1分钟，1h为1小时。
    *
    * @var string[]
    */
    protected static $getters = [
            'value' => 'getValue',
            'maxValue' => 'getMaxValue',
            'timestamp' => 'getTimestamp',
            'window' => 'getWindow'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['maxValue'] = isset($data['maxValue']) ? $data['maxValue'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['window'] = isset($data['window']) ? $data['window'] : null;
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
    * Gets value
    *  value
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Value|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Value|null $value value
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets maxValue
    *  maxValue
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Value|null
    */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
    * Sets maxValue
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Value|null $maxValue maxValue
    *
    * @return $this
    */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;
        return $this;
    }

    /**
    * Gets timestamp
    *  UTC时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'。
    *
    * @return string|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param string|null $timestamp UTC时间，格式yyyy-MM-dd'T'HH:mm:ss'Z'。
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets window
    *  统计间隔，1s表示1秒，1m表示1分钟，1h为1小时。
    *
    * @return string|null
    */
    public function getWindow()
    {
        return $this->container['window'];
    }

    /**
    * Sets window
    *
    * @param string|null $window 统计间隔，1s表示1秒，1m表示1分钟，1h为1小时。
    *
    * @return $this
    */
    public function setWindow($window)
    {
        $this->container['window'] = $window;
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

