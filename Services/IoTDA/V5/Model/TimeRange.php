<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TimeRange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TimeRange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  规则条件触发的开始时间，格式：HH:mm。
    * endTime  规则条件触发的结束时间，格式：HH:mm。若结束时间与开始时间一致，则时间为全天。
    * daysOfWeek  星期列表，以逗号分隔。1代表周日，2代表周一，依次类推，默认为每天。星期列表中的日期为开始时间的日期。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'daysOfWeek' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  规则条件触发的开始时间，格式：HH:mm。
    * endTime  规则条件触发的结束时间，格式：HH:mm。若结束时间与开始时间一致，则时间为全天。
    * daysOfWeek  星期列表，以逗号分隔。1代表周日，2代表周一，依次类推，默认为每天。星期列表中的日期为开始时间的日期。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'daysOfWeek' => null
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
    * startTime  规则条件触发的开始时间，格式：HH:mm。
    * endTime  规则条件触发的结束时间，格式：HH:mm。若结束时间与开始时间一致，则时间为全天。
    * daysOfWeek  星期列表，以逗号分隔。1代表周日，2代表周一，依次类推，默认为每天。星期列表中的日期为开始时间的日期。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'daysOfWeek' => 'days_of_week'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  规则条件触发的开始时间，格式：HH:mm。
    * endTime  规则条件触发的结束时间，格式：HH:mm。若结束时间与开始时间一致，则时间为全天。
    * daysOfWeek  星期列表，以逗号分隔。1代表周日，2代表周一，依次类推，默认为每天。星期列表中的日期为开始时间的日期。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'daysOfWeek' => 'setDaysOfWeek'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  规则条件触发的开始时间，格式：HH:mm。
    * endTime  规则条件触发的结束时间，格式：HH:mm。若结束时间与开始时间一致，则时间为全天。
    * daysOfWeek  星期列表，以逗号分隔。1代表周日，2代表周一，依次类推，默认为每天。星期列表中的日期为开始时间的日期。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'daysOfWeek' => 'getDaysOfWeek'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['daysOfWeek'] = isset($data['daysOfWeek']) ? $data['daysOfWeek'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
            if (!preg_match("/^((1|0?)[0-9]|2[0-3]){1}:([0-5]{0,1}[0-9]){1}$/", $this->container['startTime'])) {
                $invalidProperties[] = "invalid value for 'startTime', must be conform to the pattern /^((1|0?)[0-9]|2[0-3]){1}:([0-5]{0,1}[0-9]){1}$/.";
            }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
            if (!preg_match("/^((1|0?)[0-9]|2[0-3]){1}:([0-5]{0,1}[0-9]){1}$/", $this->container['endTime'])) {
                $invalidProperties[] = "invalid value for 'endTime', must be conform to the pattern /^((1|0?)[0-9]|2[0-3]){1}:([0-5]{0,1}[0-9]){1}$/.";
            }
            if (!is_null($this->container['daysOfWeek']) && !preg_match("/^[1-7](,[1-7]){0,6}$/", $this->container['daysOfWeek'])) {
                $invalidProperties[] = "invalid value for 'daysOfWeek', must be conform to the pattern /^[1-7](,[1-7]){0,6}$/.";
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
    * Gets startTime
    *  规则条件触发的开始时间，格式：HH:mm。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 规则条件触发的开始时间，格式：HH:mm。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  规则条件触发的结束时间，格式：HH:mm。若结束时间与开始时间一致，则时间为全天。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 规则条件触发的结束时间，格式：HH:mm。若结束时间与开始时间一致，则时间为全天。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets daysOfWeek
    *  星期列表，以逗号分隔。1代表周日，2代表周一，依次类推，默认为每天。星期列表中的日期为开始时间的日期。
    *
    * @return string|null
    */
    public function getDaysOfWeek()
    {
        return $this->container['daysOfWeek'];
    }

    /**
    * Sets daysOfWeek
    *
    * @param string|null $daysOfWeek 星期列表，以逗号分隔。1代表周日，2代表周一，依次类推，默认为每天。星期列表中的日期为开始时间的日期。
    *
    * @return $this
    */
    public function setDaysOfWeek($daysOfWeek)
    {
        $this->container['daysOfWeek'] = $daysOfWeek;
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

