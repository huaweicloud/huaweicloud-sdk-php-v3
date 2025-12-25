<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataPointInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataPointInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  **参数解释**： 计算出该条告警记录的资源监控数据上报的UTC时间。 **取值范围**： 字符串长度在 1 到 64 之间。
    * value  **参数解释**： 计算出该条告警记录的资源监控数据在该时间点的监控数值，如：7.019 **取值范围**： 整数，最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'string',
            'value' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  **参数解释**： 计算出该条告警记录的资源监控数据上报的UTC时间。 **取值范围**： 字符串长度在 1 到 64 之间。
    * value  **参数解释**： 计算出该条告警记录的资源监控数据在该时间点的监控数值，如：7.019 **取值范围**： 整数，最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => null,
        'value' => 'double'
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
    * time  **参数解释**： 计算出该条告警记录的资源监控数据上报的UTC时间。 **取值范围**： 字符串长度在 1 到 64 之间。
    * value  **参数解释**： 计算出该条告警记录的资源监控数据在该时间点的监控数值，如：7.019 **取值范围**： 整数，最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  **参数解释**： 计算出该条告警记录的资源监控数据上报的UTC时间。 **取值范围**： 字符串长度在 1 到 64 之间。
    * value  **参数解释**： 计算出该条告警记录的资源监控数据在该时间点的监控数值，如：7.019 **取值范围**： 整数，最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  **参数解释**： 计算出该条告警记录的资源监控数据上报的UTC时间。 **取值范围**： 字符串长度在 1 到 64 之间。
    * value  **参数解释**： 计算出该条告警记录的资源监控数据在该时间点的监控数值，如：7.019 **取值范围**： 整数，最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'value' => 'getValue'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) > 64)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) < 1)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['value']) && ($this->container['value'] > 1.7976931348623157E+308)) {
                $invalidProperties[] = "invalid value for 'value', must be smaller than or equal to 1.7976931348623157E+308.";
            }
            if (!is_null($this->container['value']) && ($this->container['value'] < -1.7976931348623156E+108)) {
                $invalidProperties[] = "invalid value for 'value', must be bigger than or equal to -1.7976931348623156E+108.";
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
    * Gets time
    *  **参数解释**： 计算出该条告警记录的资源监控数据上报的UTC时间。 **取值范围**： 字符串长度在 1 到 64 之间。
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time **参数解释**： 计算出该条告警记录的资源监控数据上报的UTC时间。 **取值范围**： 字符串长度在 1 到 64 之间。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets value
    *  **参数解释**： 计算出该条告警记录的资源监控数据在该时间点的监控数值，如：7.019 **取值范围**： 整数，最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108
    *
    * @return double|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param double|null $value **参数解释**： 计算出该条告警记录的资源监控数据在该时间点的监控数值，如：7.019 **取值范围**： 整数，最小值为-1.7976931348623157e+108，最大值为1.7976931348623157e+108
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

