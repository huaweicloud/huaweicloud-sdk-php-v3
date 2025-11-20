<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangeVulScanPolicyRequestInfoTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangeVulScanPolicyRequestInfo_time';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dayPart  **参数解释**: 扫描日期或者星期列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值31 **默认取值**: 不涉及
    * hourPart  **参数解释**: 扫描时间的小时部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值11 **默认取值**: 不涉及
    * minutePart  **参数解释**: 扫描时间的分钟部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值59 **默认取值**: 不涉及
    * nextScanTime  **参数解释**: 下一次扫描时间 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2^63-1 **默认取值**: 不涉及
    * timezoneOffset  **参数解释**: 距离标准时区的差值，如东八区（GMT+8）为-480 **约束限制**: 不涉及 **取值范围**: 最小值-840，最大值720 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dayPart' => 'int[]',
            'hourPart' => 'int',
            'minutePart' => 'int',
            'nextScanTime' => 'int',
            'timezoneOffset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dayPart  **参数解释**: 扫描日期或者星期列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值31 **默认取值**: 不涉及
    * hourPart  **参数解释**: 扫描时间的小时部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值11 **默认取值**: 不涉及
    * minutePart  **参数解释**: 扫描时间的分钟部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值59 **默认取值**: 不涉及
    * nextScanTime  **参数解释**: 下一次扫描时间 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2^63-1 **默认取值**: 不涉及
    * timezoneOffset  **参数解释**: 距离标准时区的差值，如东八区（GMT+8）为-480 **约束限制**: 不涉及 **取值范围**: 最小值-840，最大值720 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dayPart' => 'int32',
        'hourPart' => 'int32',
        'minutePart' => 'int32',
        'nextScanTime' => 'int64',
        'timezoneOffset' => 'int32'
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
    * dayPart  **参数解释**: 扫描日期或者星期列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值31 **默认取值**: 不涉及
    * hourPart  **参数解释**: 扫描时间的小时部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值11 **默认取值**: 不涉及
    * minutePart  **参数解释**: 扫描时间的分钟部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值59 **默认取值**: 不涉及
    * nextScanTime  **参数解释**: 下一次扫描时间 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2^63-1 **默认取值**: 不涉及
    * timezoneOffset  **参数解释**: 距离标准时区的差值，如东八区（GMT+8）为-480 **约束限制**: 不涉及 **取值范围**: 最小值-840，最大值720 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dayPart' => 'day_part',
            'hourPart' => 'hour_part',
            'minutePart' => 'minute_part',
            'nextScanTime' => 'next_scan_time',
            'timezoneOffset' => 'timezone_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dayPart  **参数解释**: 扫描日期或者星期列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值31 **默认取值**: 不涉及
    * hourPart  **参数解释**: 扫描时间的小时部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值11 **默认取值**: 不涉及
    * minutePart  **参数解释**: 扫描时间的分钟部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值59 **默认取值**: 不涉及
    * nextScanTime  **参数解释**: 下一次扫描时间 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2^63-1 **默认取值**: 不涉及
    * timezoneOffset  **参数解释**: 距离标准时区的差值，如东八区（GMT+8）为-480 **约束限制**: 不涉及 **取值范围**: 最小值-840，最大值720 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'dayPart' => 'setDayPart',
            'hourPart' => 'setHourPart',
            'minutePart' => 'setMinutePart',
            'nextScanTime' => 'setNextScanTime',
            'timezoneOffset' => 'setTimezoneOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dayPart  **参数解释**: 扫描日期或者星期列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值31 **默认取值**: 不涉及
    * hourPart  **参数解释**: 扫描时间的小时部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值11 **默认取值**: 不涉及
    * minutePart  **参数解释**: 扫描时间的分钟部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值59 **默认取值**: 不涉及
    * nextScanTime  **参数解释**: 下一次扫描时间 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2^63-1 **默认取值**: 不涉及
    * timezoneOffset  **参数解释**: 距离标准时区的差值，如东八区（GMT+8）为-480 **约束限制**: 不涉及 **取值范围**: 最小值-840，最大值720 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'dayPart' => 'getDayPart',
            'hourPart' => 'getHourPart',
            'minutePart' => 'getMinutePart',
            'nextScanTime' => 'getNextScanTime',
            'timezoneOffset' => 'getTimezoneOffset'
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
        $this->container['dayPart'] = isset($data['dayPart']) ? $data['dayPart'] : null;
        $this->container['hourPart'] = isset($data['hourPart']) ? $data['hourPart'] : null;
        $this->container['minutePart'] = isset($data['minutePart']) ? $data['minutePart'] : null;
        $this->container['nextScanTime'] = isset($data['nextScanTime']) ? $data['nextScanTime'] : null;
        $this->container['timezoneOffset'] = isset($data['timezoneOffset']) ? $data['timezoneOffset'] : null;
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
    * Gets dayPart
    *  **参数解释**: 扫描日期或者星期列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值31 **默认取值**: 不涉及
    *
    * @return int[]|null
    */
    public function getDayPart()
    {
        return $this->container['dayPart'];
    }

    /**
    * Sets dayPart
    *
    * @param int[]|null $dayPart **参数解释**: 扫描日期或者星期列表 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值31 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setDayPart($dayPart)
    {
        $this->container['dayPart'] = $dayPart;
        return $this;
    }

    /**
    * Gets hourPart
    *  **参数解释**: 扫描时间的小时部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值11 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getHourPart()
    {
        return $this->container['hourPart'];
    }

    /**
    * Sets hourPart
    *
    * @param int|null $hourPart **参数解释**: 扫描时间的小时部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值11 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHourPart($hourPart)
    {
        $this->container['hourPart'] = $hourPart;
        return $this;
    }

    /**
    * Gets minutePart
    *  **参数解释**: 扫描时间的分钟部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值59 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getMinutePart()
    {
        return $this->container['minutePart'];
    }

    /**
    * Sets minutePart
    *
    * @param int|null $minutePart **参数解释**: 扫描时间的分钟部分 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值59 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setMinutePart($minutePart)
    {
        $this->container['minutePart'] = $minutePart;
        return $this;
    }

    /**
    * Gets nextScanTime
    *  **参数解释**: 下一次扫描时间 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2^63-1 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getNextScanTime()
    {
        return $this->container['nextScanTime'];
    }

    /**
    * Sets nextScanTime
    *
    * @param int|null $nextScanTime **参数解释**: 下一次扫描时间 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2^63-1 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setNextScanTime($nextScanTime)
    {
        $this->container['nextScanTime'] = $nextScanTime;
        return $this;
    }

    /**
    * Gets timezoneOffset
    *  **参数解释**: 距离标准时区的差值，如东八区（GMT+8）为-480 **约束限制**: 不涉及 **取值范围**: 最小值-840，最大值720 **默认取值**: 不涉及
    *
    * @return int|null
    */
    public function getTimezoneOffset()
    {
        return $this->container['timezoneOffset'];
    }

    /**
    * Sets timezoneOffset
    *
    * @param int|null $timezoneOffset **参数解释**: 距离标准时区的差值，如东八区（GMT+8）为-480 **约束限制**: 不涉及 **取值范围**: 最小值-840，最大值720 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setTimezoneOffset($timezoneOffset)
    {
        $this->container['timezoneOffset'] = $timezoneOffset;
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

