<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AbuseThreshold implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AbuseThreshold';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeWindowSeconds  统计时间窗口（秒），最大86400（1天）
    * conditions  阈值条件列表，当前仅支持1个条件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeWindowSeconds' => 'int',
            'conditions' => '\HuaweiCloud\SDK\Waf\V1\Model\AbuseCondition[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeWindowSeconds  统计时间窗口（秒），最大86400（1天）
    * conditions  阈值条件列表，当前仅支持1个条件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeWindowSeconds' => 'int32',
        'conditions' => null
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
    * timeWindowSeconds  统计时间窗口（秒），最大86400（1天）
    * conditions  阈值条件列表，当前仅支持1个条件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeWindowSeconds' => 'time_window_seconds',
            'conditions' => 'conditions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeWindowSeconds  统计时间窗口（秒），最大86400（1天）
    * conditions  阈值条件列表，当前仅支持1个条件
    *
    * @var string[]
    */
    protected static $setters = [
            'timeWindowSeconds' => 'setTimeWindowSeconds',
            'conditions' => 'setConditions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeWindowSeconds  统计时间窗口（秒），最大86400（1天）
    * conditions  阈值条件列表，当前仅支持1个条件
    *
    * @var string[]
    */
    protected static $getters = [
            'timeWindowSeconds' => 'getTimeWindowSeconds',
            'conditions' => 'getConditions'
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
        $this->container['timeWindowSeconds'] = isset($data['timeWindowSeconds']) ? $data['timeWindowSeconds'] : null;
        $this->container['conditions'] = isset($data['conditions']) ? $data['conditions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['timeWindowSeconds']) && ($this->container['timeWindowSeconds'] > 86400)) {
                $invalidProperties[] = "invalid value for 'timeWindowSeconds', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['timeWindowSeconds']) && ($this->container['timeWindowSeconds'] < 1)) {
                $invalidProperties[] = "invalid value for 'timeWindowSeconds', must be bigger than or equal to 1.";
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
    * Gets timeWindowSeconds
    *  统计时间窗口（秒），最大86400（1天）
    *
    * @return int|null
    */
    public function getTimeWindowSeconds()
    {
        return $this->container['timeWindowSeconds'];
    }

    /**
    * Sets timeWindowSeconds
    *
    * @param int|null $timeWindowSeconds 统计时间窗口（秒），最大86400（1天）
    *
    * @return $this
    */
    public function setTimeWindowSeconds($timeWindowSeconds)
    {
        $this->container['timeWindowSeconds'] = $timeWindowSeconds;
        return $this;
    }

    /**
    * Gets conditions
    *  阈值条件列表，当前仅支持1个条件
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\AbuseCondition[]|null
    */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
    * Sets conditions
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\AbuseCondition[]|null $conditions 阈值条件列表，当前仅支持1个条件
    *
    * @return $this
    */
    public function setConditions($conditions)
    {
        $this->container['conditions'] = $conditions;
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

