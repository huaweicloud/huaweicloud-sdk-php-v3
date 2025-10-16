<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobScheduleDailyFrequencyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobScheduleDailyFrequencyInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * freqSubdayType  每日频率类型 once:每日一次, multiple:每日多次。
    * activeStartTime  每日第一次执行时间。每日频率类型为每日一次时，则只执行这一次。 HH:mm:ss
    * activeEndTime  最后一次执行时间。每日执行多次时该参数必传，每日执行一次时不生效。 HH:mm:ss
    * freqSubdayInterval  执行间隔。每日执行多次时该参数必传，每日执行一次时不生效。取值范围1至99
    * freqIntervalUnit  执行间隔的单位。每日执行多次时该参数必传，每日执行一次时不生效。 second:秒, minute:分, hour:时
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'freqSubdayType' => 'string',
            'activeStartTime' => 'string',
            'activeEndTime' => 'string',
            'freqSubdayInterval' => 'int',
            'freqIntervalUnit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * freqSubdayType  每日频率类型 once:每日一次, multiple:每日多次。
    * activeStartTime  每日第一次执行时间。每日频率类型为每日一次时，则只执行这一次。 HH:mm:ss
    * activeEndTime  最后一次执行时间。每日执行多次时该参数必传，每日执行一次时不生效。 HH:mm:ss
    * freqSubdayInterval  执行间隔。每日执行多次时该参数必传，每日执行一次时不生效。取值范围1至99
    * freqIntervalUnit  执行间隔的单位。每日执行多次时该参数必传，每日执行一次时不生效。 second:秒, minute:分, hour:时
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'freqSubdayType' => null,
        'activeStartTime' => null,
        'activeEndTime' => null,
        'freqSubdayInterval' => null,
        'freqIntervalUnit' => null
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
    * freqSubdayType  每日频率类型 once:每日一次, multiple:每日多次。
    * activeStartTime  每日第一次执行时间。每日频率类型为每日一次时，则只执行这一次。 HH:mm:ss
    * activeEndTime  最后一次执行时间。每日执行多次时该参数必传，每日执行一次时不生效。 HH:mm:ss
    * freqSubdayInterval  执行间隔。每日执行多次时该参数必传，每日执行一次时不生效。取值范围1至99
    * freqIntervalUnit  执行间隔的单位。每日执行多次时该参数必传，每日执行一次时不生效。 second:秒, minute:分, hour:时
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'freqSubdayType' => 'freq_subday_type',
            'activeStartTime' => 'active_start_time',
            'activeEndTime' => 'active_end_time',
            'freqSubdayInterval' => 'freq_subday_interval',
            'freqIntervalUnit' => 'freq_interval_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * freqSubdayType  每日频率类型 once:每日一次, multiple:每日多次。
    * activeStartTime  每日第一次执行时间。每日频率类型为每日一次时，则只执行这一次。 HH:mm:ss
    * activeEndTime  最后一次执行时间。每日执行多次时该参数必传，每日执行一次时不生效。 HH:mm:ss
    * freqSubdayInterval  执行间隔。每日执行多次时该参数必传，每日执行一次时不生效。取值范围1至99
    * freqIntervalUnit  执行间隔的单位。每日执行多次时该参数必传，每日执行一次时不生效。 second:秒, minute:分, hour:时
    *
    * @var string[]
    */
    protected static $setters = [
            'freqSubdayType' => 'setFreqSubdayType',
            'activeStartTime' => 'setActiveStartTime',
            'activeEndTime' => 'setActiveEndTime',
            'freqSubdayInterval' => 'setFreqSubdayInterval',
            'freqIntervalUnit' => 'setFreqIntervalUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * freqSubdayType  每日频率类型 once:每日一次, multiple:每日多次。
    * activeStartTime  每日第一次执行时间。每日频率类型为每日一次时，则只执行这一次。 HH:mm:ss
    * activeEndTime  最后一次执行时间。每日执行多次时该参数必传，每日执行一次时不生效。 HH:mm:ss
    * freqSubdayInterval  执行间隔。每日执行多次时该参数必传，每日执行一次时不生效。取值范围1至99
    * freqIntervalUnit  执行间隔的单位。每日执行多次时该参数必传，每日执行一次时不生效。 second:秒, minute:分, hour:时
    *
    * @var string[]
    */
    protected static $getters = [
            'freqSubdayType' => 'getFreqSubdayType',
            'activeStartTime' => 'getActiveStartTime',
            'activeEndTime' => 'getActiveEndTime',
            'freqSubdayInterval' => 'getFreqSubdayInterval',
            'freqIntervalUnit' => 'getFreqIntervalUnit'
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
        $this->container['freqSubdayType'] = isset($data['freqSubdayType']) ? $data['freqSubdayType'] : null;
        $this->container['activeStartTime'] = isset($data['activeStartTime']) ? $data['activeStartTime'] : null;
        $this->container['activeEndTime'] = isset($data['activeEndTime']) ? $data['activeEndTime'] : null;
        $this->container['freqSubdayInterval'] = isset($data['freqSubdayInterval']) ? $data['freqSubdayInterval'] : null;
        $this->container['freqIntervalUnit'] = isset($data['freqIntervalUnit']) ? $data['freqIntervalUnit'] : null;
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
    * Gets freqSubdayType
    *  每日频率类型 once:每日一次, multiple:每日多次。
    *
    * @return string|null
    */
    public function getFreqSubdayType()
    {
        return $this->container['freqSubdayType'];
    }

    /**
    * Sets freqSubdayType
    *
    * @param string|null $freqSubdayType 每日频率类型 once:每日一次, multiple:每日多次。
    *
    * @return $this
    */
    public function setFreqSubdayType($freqSubdayType)
    {
        $this->container['freqSubdayType'] = $freqSubdayType;
        return $this;
    }

    /**
    * Gets activeStartTime
    *  每日第一次执行时间。每日频率类型为每日一次时，则只执行这一次。 HH:mm:ss
    *
    * @return string|null
    */
    public function getActiveStartTime()
    {
        return $this->container['activeStartTime'];
    }

    /**
    * Sets activeStartTime
    *
    * @param string|null $activeStartTime 每日第一次执行时间。每日频率类型为每日一次时，则只执行这一次。 HH:mm:ss
    *
    * @return $this
    */
    public function setActiveStartTime($activeStartTime)
    {
        $this->container['activeStartTime'] = $activeStartTime;
        return $this;
    }

    /**
    * Gets activeEndTime
    *  最后一次执行时间。每日执行多次时该参数必传，每日执行一次时不生效。 HH:mm:ss
    *
    * @return string|null
    */
    public function getActiveEndTime()
    {
        return $this->container['activeEndTime'];
    }

    /**
    * Sets activeEndTime
    *
    * @param string|null $activeEndTime 最后一次执行时间。每日执行多次时该参数必传，每日执行一次时不生效。 HH:mm:ss
    *
    * @return $this
    */
    public function setActiveEndTime($activeEndTime)
    {
        $this->container['activeEndTime'] = $activeEndTime;
        return $this;
    }

    /**
    * Gets freqSubdayInterval
    *  执行间隔。每日执行多次时该参数必传，每日执行一次时不生效。取值范围1至99
    *
    * @return int|null
    */
    public function getFreqSubdayInterval()
    {
        return $this->container['freqSubdayInterval'];
    }

    /**
    * Sets freqSubdayInterval
    *
    * @param int|null $freqSubdayInterval 执行间隔。每日执行多次时该参数必传，每日执行一次时不生效。取值范围1至99
    *
    * @return $this
    */
    public function setFreqSubdayInterval($freqSubdayInterval)
    {
        $this->container['freqSubdayInterval'] = $freqSubdayInterval;
        return $this;
    }

    /**
    * Gets freqIntervalUnit
    *  执行间隔的单位。每日执行多次时该参数必传，每日执行一次时不生效。 second:秒, minute:分, hour:时
    *
    * @return string|null
    */
    public function getFreqIntervalUnit()
    {
        return $this->container['freqIntervalUnit'];
    }

    /**
    * Sets freqIntervalUnit
    *
    * @param string|null $freqIntervalUnit 执行间隔的单位。每日执行多次时该参数必传，每日执行一次时不生效。 second:秒, minute:分, hour:时
    *
    * @return $this
    */
    public function setFreqIntervalUnit($freqIntervalUnit)
    {
        $this->container['freqIntervalUnit'] = $freqIntervalUnit;
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

