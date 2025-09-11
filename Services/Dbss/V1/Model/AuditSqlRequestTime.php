<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditSqlRequestTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditSqlRequest_time';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * timeRange  时间范围。和start_time，end_time不能同时使用，同时传该参数优先级更高。 - HALF_HOUR：半小时 - HOUR：1小时 - THREE_HOUR：3小时 - TWELVE_HOUR：12小时 - DAY：1天 - WEEK：一周 - MONTH：一个月
    * startTime  开始时间，必须和end_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    * endTime  结束时间，必须和start_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'timeRange' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * timeRange  时间范围。和start_time，end_time不能同时使用，同时传该参数优先级更高。 - HALF_HOUR：半小时 - HOUR：1小时 - THREE_HOUR：3小时 - TWELVE_HOUR：12小时 - DAY：1天 - WEEK：一周 - MONTH：一个月
    * startTime  开始时间，必须和end_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    * endTime  结束时间，必须和start_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'timeRange' => null,
        'startTime' => null,
        'endTime' => null
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
    * timeRange  时间范围。和start_time，end_time不能同时使用，同时传该参数优先级更高。 - HALF_HOUR：半小时 - HOUR：1小时 - THREE_HOUR：3小时 - TWELVE_HOUR：12小时 - DAY：1天 - WEEK：一周 - MONTH：一个月
    * startTime  开始时间，必须和end_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    * endTime  结束时间，必须和start_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'timeRange' => 'time_range',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * timeRange  时间范围。和start_time，end_time不能同时使用，同时传该参数优先级更高。 - HALF_HOUR：半小时 - HOUR：1小时 - THREE_HOUR：3小时 - TWELVE_HOUR：12小时 - DAY：1天 - WEEK：一周 - MONTH：一个月
    * startTime  开始时间，必须和end_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    * endTime  结束时间，必须和start_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    *
    * @var string[]
    */
    protected static $setters = [
            'timeRange' => 'setTimeRange',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * timeRange  时间范围。和start_time，end_time不能同时使用，同时传该参数优先级更高。 - HALF_HOUR：半小时 - HOUR：1小时 - THREE_HOUR：3小时 - TWELVE_HOUR：12小时 - DAY：1天 - WEEK：一周 - MONTH：一个月
    * startTime  开始时间，必须和end_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    * endTime  结束时间，必须和start_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    *
    * @var string[]
    */
    protected static $getters = [
            'timeRange' => 'getTimeRange',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['timeRange'] = isset($data['timeRange']) ? $data['timeRange'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    * Gets timeRange
    *  时间范围。和start_time，end_time不能同时使用，同时传该参数优先级更高。 - HALF_HOUR：半小时 - HOUR：1小时 - THREE_HOUR：3小时 - TWELVE_HOUR：12小时 - DAY：1天 - WEEK：一周 - MONTH：一个月
    *
    * @return string|null
    */
    public function getTimeRange()
    {
        return $this->container['timeRange'];
    }

    /**
    * Sets timeRange
    *
    * @param string|null $timeRange 时间范围。和start_time，end_time不能同时使用，同时传该参数优先级更高。 - HALF_HOUR：半小时 - HOUR：1小时 - THREE_HOUR：3小时 - TWELVE_HOUR：12小时 - DAY：1天 - WEEK：一周 - MONTH：一个月
    *
    * @return $this
    */
    public function setTimeRange($timeRange)
    {
        $this->container['timeRange'] = $timeRange;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，必须和end_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间，必须和end_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
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
    *  结束时间，必须和start_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间，必须和start_time成对出现。格式必须为yyyy-MM-dd HH:mm:ss。UTC时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

