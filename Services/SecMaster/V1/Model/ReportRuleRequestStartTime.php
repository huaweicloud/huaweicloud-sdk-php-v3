<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportRuleRequestStartTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportRuleRequest_start_time';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * day  报告统计周期的日期，前一天为-1，当天为0
    * week  报告统计周期的日期，前一周为-1，本周为0
    * month  报告统计周期的日期，上一月为-1，本月为0
    * time  报告统计周期的开始，具体时间，时分秒格式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'day' => 'int',
            'week' => 'int',
            'month' => 'int',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * day  报告统计周期的日期，前一天为-1，当天为0
    * week  报告统计周期的日期，前一周为-1，本周为0
    * month  报告统计周期的日期，上一月为-1，本月为0
    * time  报告统计周期的开始，具体时间，时分秒格式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'day' => null,
        'week' => null,
        'month' => null,
        'time' => null
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
    * day  报告统计周期的日期，前一天为-1，当天为0
    * week  报告统计周期的日期，前一周为-1，本周为0
    * month  报告统计周期的日期，上一月为-1，本月为0
    * time  报告统计周期的开始，具体时间，时分秒格式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'day' => 'day',
            'week' => 'week',
            'month' => 'month',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * day  报告统计周期的日期，前一天为-1，当天为0
    * week  报告统计周期的日期，前一周为-1，本周为0
    * month  报告统计周期的日期，上一月为-1，本月为0
    * time  报告统计周期的开始，具体时间，时分秒格式
    *
    * @var string[]
    */
    protected static $setters = [
            'day' => 'setDay',
            'week' => 'setWeek',
            'month' => 'setMonth',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * day  报告统计周期的日期，前一天为-1，当天为0
    * week  报告统计周期的日期，前一周为-1，本周为0
    * month  报告统计周期的日期，上一月为-1，本月为0
    * time  报告统计周期的开始，具体时间，时分秒格式
    *
    * @var string[]
    */
    protected static $getters = [
            'day' => 'getDay',
            'week' => 'getWeek',
            'month' => 'getMonth',
            'time' => 'getTime'
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
        $this->container['day'] = isset($data['day']) ? $data['day'] : null;
        $this->container['week'] = isset($data['week']) ? $data['week'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['day']) && ($this->container['day'] > 32)) {
                $invalidProperties[] = "invalid value for 'day', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['day']) && ($this->container['day'] < -1)) {
                $invalidProperties[] = "invalid value for 'day', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['week']) && ($this->container['week'] > 32)) {
                $invalidProperties[] = "invalid value for 'week', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['week']) && ($this->container['week'] < -1)) {
                $invalidProperties[] = "invalid value for 'week', must be bigger than or equal to -1.";
            }
            if (!is_null($this->container['month']) && ($this->container['month'] > 32)) {
                $invalidProperties[] = "invalid value for 'month', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['month']) && ($this->container['month'] < -6)) {
                $invalidProperties[] = "invalid value for 'month', must be bigger than or equal to -6.";
            }
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) > 256)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['time']) && (mb_strlen($this->container['time']) < 1)) {
                $invalidProperties[] = "invalid value for 'time', the character length must be bigger than or equal to 1.";
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
    * Gets day
    *  报告统计周期的日期，前一天为-1，当天为0
    *
    * @return int|null
    */
    public function getDay()
    {
        return $this->container['day'];
    }

    /**
    * Sets day
    *
    * @param int|null $day 报告统计周期的日期，前一天为-1，当天为0
    *
    * @return $this
    */
    public function setDay($day)
    {
        $this->container['day'] = $day;
        return $this;
    }

    /**
    * Gets week
    *  报告统计周期的日期，前一周为-1，本周为0
    *
    * @return int|null
    */
    public function getWeek()
    {
        return $this->container['week'];
    }

    /**
    * Sets week
    *
    * @param int|null $week 报告统计周期的日期，前一周为-1，本周为0
    *
    * @return $this
    */
    public function setWeek($week)
    {
        $this->container['week'] = $week;
        return $this;
    }

    /**
    * Gets month
    *  报告统计周期的日期，上一月为-1，本月为0
    *
    * @return int|null
    */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
    * Sets month
    *
    * @param int|null $month 报告统计周期的日期，上一月为-1，本月为0
    *
    * @return $this
    */
    public function setMonth($month)
    {
        $this->container['month'] = $month;
        return $this;
    }

    /**
    * Gets time
    *  报告统计周期的开始，具体时间，时分秒格式
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
    * @param string|null $time 报告统计周期的开始，具体时间，时分秒格式
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

