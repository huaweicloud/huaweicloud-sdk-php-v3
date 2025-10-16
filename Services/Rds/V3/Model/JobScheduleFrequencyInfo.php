<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobScheduleFrequencyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobScheduleFrequencyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * freqType  策略频率类型 daily:按天, weekly:按周, monthly_day:按月、每月按天, monthly_week:按月、每月按周。
    * freqInterval  执行间隔。取值范围1至99。
    * freqIntervalWeekly  频率类型为按周时该参数必传，不为按周时不生效。 每周执行哪几天。参数值：Monday，Tuesday … Sunday
    * freqIntervalDayMonthly  频率类型为按月、每月按天时该参数必传，不为按月、每月按天时时不生效。 每月执行的日期。取值范围1-31。
    * freqIntervalMonthly  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每周执行哪几天。 Sunday, Monday,Tuesday ... Saturday, day, weekday, weekend
    * freqRelativeIntervalMonthly  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每月在哪周执行。 first, second, third, fourth, last
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'freqType' => 'string',
            'freqInterval' => 'int',
            'freqIntervalWeekly' => 'string[]',
            'freqIntervalDayMonthly' => 'int',
            'freqIntervalMonthly' => 'string',
            'freqRelativeIntervalMonthly' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * freqType  策略频率类型 daily:按天, weekly:按周, monthly_day:按月、每月按天, monthly_week:按月、每月按周。
    * freqInterval  执行间隔。取值范围1至99。
    * freqIntervalWeekly  频率类型为按周时该参数必传，不为按周时不生效。 每周执行哪几天。参数值：Monday，Tuesday … Sunday
    * freqIntervalDayMonthly  频率类型为按月、每月按天时该参数必传，不为按月、每月按天时时不生效。 每月执行的日期。取值范围1-31。
    * freqIntervalMonthly  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每周执行哪几天。 Sunday, Monday,Tuesday ... Saturday, day, weekday, weekend
    * freqRelativeIntervalMonthly  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每月在哪周执行。 first, second, third, fourth, last
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'freqType' => null,
        'freqInterval' => null,
        'freqIntervalWeekly' => null,
        'freqIntervalDayMonthly' => null,
        'freqIntervalMonthly' => null,
        'freqRelativeIntervalMonthly' => null
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
    * freqType  策略频率类型 daily:按天, weekly:按周, monthly_day:按月、每月按天, monthly_week:按月、每月按周。
    * freqInterval  执行间隔。取值范围1至99。
    * freqIntervalWeekly  频率类型为按周时该参数必传，不为按周时不生效。 每周执行哪几天。参数值：Monday，Tuesday … Sunday
    * freqIntervalDayMonthly  频率类型为按月、每月按天时该参数必传，不为按月、每月按天时时不生效。 每月执行的日期。取值范围1-31。
    * freqIntervalMonthly  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每周执行哪几天。 Sunday, Monday,Tuesday ... Saturday, day, weekday, weekend
    * freqRelativeIntervalMonthly  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每月在哪周执行。 first, second, third, fourth, last
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'freqType' => 'freq_type',
            'freqInterval' => 'freq_interval',
            'freqIntervalWeekly' => 'freq_interval_weekly',
            'freqIntervalDayMonthly' => 'freq_interval_day_monthly',
            'freqIntervalMonthly' => 'freq_interval_monthly',
            'freqRelativeIntervalMonthly' => 'freq_relative_interval_monthly'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * freqType  策略频率类型 daily:按天, weekly:按周, monthly_day:按月、每月按天, monthly_week:按月、每月按周。
    * freqInterval  执行间隔。取值范围1至99。
    * freqIntervalWeekly  频率类型为按周时该参数必传，不为按周时不生效。 每周执行哪几天。参数值：Monday，Tuesday … Sunday
    * freqIntervalDayMonthly  频率类型为按月、每月按天时该参数必传，不为按月、每月按天时时不生效。 每月执行的日期。取值范围1-31。
    * freqIntervalMonthly  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每周执行哪几天。 Sunday, Monday,Tuesday ... Saturday, day, weekday, weekend
    * freqRelativeIntervalMonthly  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每月在哪周执行。 first, second, third, fourth, last
    *
    * @var string[]
    */
    protected static $setters = [
            'freqType' => 'setFreqType',
            'freqInterval' => 'setFreqInterval',
            'freqIntervalWeekly' => 'setFreqIntervalWeekly',
            'freqIntervalDayMonthly' => 'setFreqIntervalDayMonthly',
            'freqIntervalMonthly' => 'setFreqIntervalMonthly',
            'freqRelativeIntervalMonthly' => 'setFreqRelativeIntervalMonthly'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * freqType  策略频率类型 daily:按天, weekly:按周, monthly_day:按月、每月按天, monthly_week:按月、每月按周。
    * freqInterval  执行间隔。取值范围1至99。
    * freqIntervalWeekly  频率类型为按周时该参数必传，不为按周时不生效。 每周执行哪几天。参数值：Monday，Tuesday … Sunday
    * freqIntervalDayMonthly  频率类型为按月、每月按天时该参数必传，不为按月、每月按天时时不生效。 每月执行的日期。取值范围1-31。
    * freqIntervalMonthly  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每周执行哪几天。 Sunday, Monday,Tuesday ... Saturday, day, weekday, weekend
    * freqRelativeIntervalMonthly  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每月在哪周执行。 first, second, third, fourth, last
    *
    * @var string[]
    */
    protected static $getters = [
            'freqType' => 'getFreqType',
            'freqInterval' => 'getFreqInterval',
            'freqIntervalWeekly' => 'getFreqIntervalWeekly',
            'freqIntervalDayMonthly' => 'getFreqIntervalDayMonthly',
            'freqIntervalMonthly' => 'getFreqIntervalMonthly',
            'freqRelativeIntervalMonthly' => 'getFreqRelativeIntervalMonthly'
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
        $this->container['freqType'] = isset($data['freqType']) ? $data['freqType'] : null;
        $this->container['freqInterval'] = isset($data['freqInterval']) ? $data['freqInterval'] : null;
        $this->container['freqIntervalWeekly'] = isset($data['freqIntervalWeekly']) ? $data['freqIntervalWeekly'] : null;
        $this->container['freqIntervalDayMonthly'] = isset($data['freqIntervalDayMonthly']) ? $data['freqIntervalDayMonthly'] : null;
        $this->container['freqIntervalMonthly'] = isset($data['freqIntervalMonthly']) ? $data['freqIntervalMonthly'] : null;
        $this->container['freqRelativeIntervalMonthly'] = isset($data['freqRelativeIntervalMonthly']) ? $data['freqRelativeIntervalMonthly'] : null;
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
    * Gets freqType
    *  策略频率类型 daily:按天, weekly:按周, monthly_day:按月、每月按天, monthly_week:按月、每月按周。
    *
    * @return string|null
    */
    public function getFreqType()
    {
        return $this->container['freqType'];
    }

    /**
    * Sets freqType
    *
    * @param string|null $freqType 策略频率类型 daily:按天, weekly:按周, monthly_day:按月、每月按天, monthly_week:按月、每月按周。
    *
    * @return $this
    */
    public function setFreqType($freqType)
    {
        $this->container['freqType'] = $freqType;
        return $this;
    }

    /**
    * Gets freqInterval
    *  执行间隔。取值范围1至99。
    *
    * @return int|null
    */
    public function getFreqInterval()
    {
        return $this->container['freqInterval'];
    }

    /**
    * Sets freqInterval
    *
    * @param int|null $freqInterval 执行间隔。取值范围1至99。
    *
    * @return $this
    */
    public function setFreqInterval($freqInterval)
    {
        $this->container['freqInterval'] = $freqInterval;
        return $this;
    }

    /**
    * Gets freqIntervalWeekly
    *  频率类型为按周时该参数必传，不为按周时不生效。 每周执行哪几天。参数值：Monday，Tuesday … Sunday
    *
    * @return string[]|null
    */
    public function getFreqIntervalWeekly()
    {
        return $this->container['freqIntervalWeekly'];
    }

    /**
    * Sets freqIntervalWeekly
    *
    * @param string[]|null $freqIntervalWeekly 频率类型为按周时该参数必传，不为按周时不生效。 每周执行哪几天。参数值：Monday，Tuesday … Sunday
    *
    * @return $this
    */
    public function setFreqIntervalWeekly($freqIntervalWeekly)
    {
        $this->container['freqIntervalWeekly'] = $freqIntervalWeekly;
        return $this;
    }

    /**
    * Gets freqIntervalDayMonthly
    *  频率类型为按月、每月按天时该参数必传，不为按月、每月按天时时不生效。 每月执行的日期。取值范围1-31。
    *
    * @return int|null
    */
    public function getFreqIntervalDayMonthly()
    {
        return $this->container['freqIntervalDayMonthly'];
    }

    /**
    * Sets freqIntervalDayMonthly
    *
    * @param int|null $freqIntervalDayMonthly 频率类型为按月、每月按天时该参数必传，不为按月、每月按天时时不生效。 每月执行的日期。取值范围1-31。
    *
    * @return $this
    */
    public function setFreqIntervalDayMonthly($freqIntervalDayMonthly)
    {
        $this->container['freqIntervalDayMonthly'] = $freqIntervalDayMonthly;
        return $this;
    }

    /**
    * Gets freqIntervalMonthly
    *  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每周执行哪几天。 Sunday, Monday,Tuesday ... Saturday, day, weekday, weekend
    *
    * @return string|null
    */
    public function getFreqIntervalMonthly()
    {
        return $this->container['freqIntervalMonthly'];
    }

    /**
    * Sets freqIntervalMonthly
    *
    * @param string|null $freqIntervalMonthly 频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每周执行哪几天。 Sunday, Monday,Tuesday ... Saturday, day, weekday, weekend
    *
    * @return $this
    */
    public function setFreqIntervalMonthly($freqIntervalMonthly)
    {
        $this->container['freqIntervalMonthly'] = $freqIntervalMonthly;
        return $this;
    }

    /**
    * Gets freqRelativeIntervalMonthly
    *  频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每月在哪周执行。 first, second, third, fourth, last
    *
    * @return string|null
    */
    public function getFreqRelativeIntervalMonthly()
    {
        return $this->container['freqRelativeIntervalMonthly'];
    }

    /**
    * Sets freqRelativeIntervalMonthly
    *
    * @param string|null $freqRelativeIntervalMonthly 频率类型为按月、每月按周时该参数必传，不为按月、每月按周时时不生效。 每月在哪周执行。 first, second, third, fourth, last
    *
    * @return $this
    */
    public function setFreqRelativeIntervalMonthly($freqRelativeIntervalMonthly)
    {
        $this->container['freqRelativeIntervalMonthly'] = $freqRelativeIntervalMonthly;
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

