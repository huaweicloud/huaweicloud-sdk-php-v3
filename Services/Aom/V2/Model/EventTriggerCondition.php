<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventTriggerCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventTriggerCondition';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventName  事件名称。
    * triggerType  触发方式： - “immediately”：立即触发 - “accumulative”：累计触发
    * aggregationWindow  监控周期。单位为秒，例如 1小时 填“3600”，当trigger_type为“immediately”时 该参数为空，当trigger_type为“accumulative”时 该参数必填。 监控周期范围： 5分钟，20分钟，1小时，4小时，24小时。
    * operator  判断条件：“>”,“<”,“=”,“>=”,“<=”，当trigger_type为“immediately”时 该参数为空。当trigger_type为“accumulative”时 该参数必填。
    * thresholds  键值对形式，键为告警级别，值为累计次数，当trigger_type为“immediately”时 累计次数为1。当当trigger_type为“accumulative”时 累计次数范围为1~100 （如果trigger_conditions参数不为空，该参数必填）
    * frequency  事件类告警频率。当trigger_type为“immediately”时 值为-1。 - “-1”：N/A - “0”：只告警一次 - “300”：每5分钟 - “600”：每10分钟： - “900”：每15分钟： - “1800”：每30分钟： - “3600”：每1小时： - “10800”：每3小时： - “21600”：每6小时： - “43200”：每12小时： - “86400”：每天：
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventName' => 'string',
            'triggerType' => 'string',
            'aggregationWindow' => 'int',
            'operator' => 'string',
            'thresholds' => 'map[string,int]',
            'frequency' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventName  事件名称。
    * triggerType  触发方式： - “immediately”：立即触发 - “accumulative”：累计触发
    * aggregationWindow  监控周期。单位为秒，例如 1小时 填“3600”，当trigger_type为“immediately”时 该参数为空，当trigger_type为“accumulative”时 该参数必填。 监控周期范围： 5分钟，20分钟，1小时，4小时，24小时。
    * operator  判断条件：“>”,“<”,“=”,“>=”,“<=”，当trigger_type为“immediately”时 该参数为空。当trigger_type为“accumulative”时 该参数必填。
    * thresholds  键值对形式，键为告警级别，值为累计次数，当trigger_type为“immediately”时 累计次数为1。当当trigger_type为“accumulative”时 累计次数范围为1~100 （如果trigger_conditions参数不为空，该参数必填）
    * frequency  事件类告警频率。当trigger_type为“immediately”时 值为-1。 - “-1”：N/A - “0”：只告警一次 - “300”：每5分钟 - “600”：每10分钟： - “900”：每15分钟： - “1800”：每30分钟： - “3600”：每1小时： - “10800”：每3小时： - “21600”：每6小时： - “43200”：每12小时： - “86400”：每天：
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventName' => null,
        'triggerType' => null,
        'aggregationWindow' => 'int64',
        'operator' => null,
        'thresholds' => 'int32',
        'frequency' => null
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
    * eventName  事件名称。
    * triggerType  触发方式： - “immediately”：立即触发 - “accumulative”：累计触发
    * aggregationWindow  监控周期。单位为秒，例如 1小时 填“3600”，当trigger_type为“immediately”时 该参数为空，当trigger_type为“accumulative”时 该参数必填。 监控周期范围： 5分钟，20分钟，1小时，4小时，24小时。
    * operator  判断条件：“>”,“<”,“=”,“>=”,“<=”，当trigger_type为“immediately”时 该参数为空。当trigger_type为“accumulative”时 该参数必填。
    * thresholds  键值对形式，键为告警级别，值为累计次数，当trigger_type为“immediately”时 累计次数为1。当当trigger_type为“accumulative”时 累计次数范围为1~100 （如果trigger_conditions参数不为空，该参数必填）
    * frequency  事件类告警频率。当trigger_type为“immediately”时 值为-1。 - “-1”：N/A - “0”：只告警一次 - “300”：每5分钟 - “600”：每10分钟： - “900”：每15分钟： - “1800”：每30分钟： - “3600”：每1小时： - “10800”：每3小时： - “21600”：每6小时： - “43200”：每12小时： - “86400”：每天：
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventName' => 'event_name',
            'triggerType' => 'trigger_type',
            'aggregationWindow' => 'aggregation_window',
            'operator' => 'operator',
            'thresholds' => 'thresholds',
            'frequency' => 'frequency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventName  事件名称。
    * triggerType  触发方式： - “immediately”：立即触发 - “accumulative”：累计触发
    * aggregationWindow  监控周期。单位为秒，例如 1小时 填“3600”，当trigger_type为“immediately”时 该参数为空，当trigger_type为“accumulative”时 该参数必填。 监控周期范围： 5分钟，20分钟，1小时，4小时，24小时。
    * operator  判断条件：“>”,“<”,“=”,“>=”,“<=”，当trigger_type为“immediately”时 该参数为空。当trigger_type为“accumulative”时 该参数必填。
    * thresholds  键值对形式，键为告警级别，值为累计次数，当trigger_type为“immediately”时 累计次数为1。当当trigger_type为“accumulative”时 累计次数范围为1~100 （如果trigger_conditions参数不为空，该参数必填）
    * frequency  事件类告警频率。当trigger_type为“immediately”时 值为-1。 - “-1”：N/A - “0”：只告警一次 - “300”：每5分钟 - “600”：每10分钟： - “900”：每15分钟： - “1800”：每30分钟： - “3600”：每1小时： - “10800”：每3小时： - “21600”：每6小时： - “43200”：每12小时： - “86400”：每天：
    *
    * @var string[]
    */
    protected static $setters = [
            'eventName' => 'setEventName',
            'triggerType' => 'setTriggerType',
            'aggregationWindow' => 'setAggregationWindow',
            'operator' => 'setOperator',
            'thresholds' => 'setThresholds',
            'frequency' => 'setFrequency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventName  事件名称。
    * triggerType  触发方式： - “immediately”：立即触发 - “accumulative”：累计触发
    * aggregationWindow  监控周期。单位为秒，例如 1小时 填“3600”，当trigger_type为“immediately”时 该参数为空，当trigger_type为“accumulative”时 该参数必填。 监控周期范围： 5分钟，20分钟，1小时，4小时，24小时。
    * operator  判断条件：“>”,“<”,“=”,“>=”,“<=”，当trigger_type为“immediately”时 该参数为空。当trigger_type为“accumulative”时 该参数必填。
    * thresholds  键值对形式，键为告警级别，值为累计次数，当trigger_type为“immediately”时 累计次数为1。当当trigger_type为“accumulative”时 累计次数范围为1~100 （如果trigger_conditions参数不为空，该参数必填）
    * frequency  事件类告警频率。当trigger_type为“immediately”时 值为-1。 - “-1”：N/A - “0”：只告警一次 - “300”：每5分钟 - “600”：每10分钟： - “900”：每15分钟： - “1800”：每30分钟： - “3600”：每1小时： - “10800”：每3小时： - “21600”：每6小时： - “43200”：每12小时： - “86400”：每天：
    *
    * @var string[]
    */
    protected static $getters = [
            'eventName' => 'getEventName',
            'triggerType' => 'getTriggerType',
            'aggregationWindow' => 'getAggregationWindow',
            'operator' => 'getOperator',
            'thresholds' => 'getThresholds',
            'frequency' => 'getFrequency'
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
    const TRIGGER_TYPE_IMMEDIATELY = 'immediately';
    const TRIGGER_TYPE_ACCUMULATIVE = 'accumulative';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTriggerTypeAllowableValues()
    {
        return [
            self::TRIGGER_TYPE_IMMEDIATELY,
            self::TRIGGER_TYPE_ACCUMULATIVE,
        ];
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
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['triggerType'] = isset($data['triggerType']) ? $data['triggerType'] : null;
        $this->container['aggregationWindow'] = isset($data['aggregationWindow']) ? $data['aggregationWindow'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['thresholds'] = isset($data['thresholds']) ? $data['thresholds'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTriggerTypeAllowableValues();
                if (!is_null($this->container['triggerType']) && !in_array($this->container['triggerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'triggerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets eventName
    *  事件名称。
    *
    * @return string|null
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string|null $eventName 事件名称。
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets triggerType
    *  触发方式： - “immediately”：立即触发 - “accumulative”：累计触发
    *
    * @return string|null
    */
    public function getTriggerType()
    {
        return $this->container['triggerType'];
    }

    /**
    * Sets triggerType
    *
    * @param string|null $triggerType 触发方式： - “immediately”：立即触发 - “accumulative”：累计触发
    *
    * @return $this
    */
    public function setTriggerType($triggerType)
    {
        $this->container['triggerType'] = $triggerType;
        return $this;
    }

    /**
    * Gets aggregationWindow
    *  监控周期。单位为秒，例如 1小时 填“3600”，当trigger_type为“immediately”时 该参数为空，当trigger_type为“accumulative”时 该参数必填。 监控周期范围： 5分钟，20分钟，1小时，4小时，24小时。
    *
    * @return int|null
    */
    public function getAggregationWindow()
    {
        return $this->container['aggregationWindow'];
    }

    /**
    * Sets aggregationWindow
    *
    * @param int|null $aggregationWindow 监控周期。单位为秒，例如 1小时 填“3600”，当trigger_type为“immediately”时 该参数为空，当trigger_type为“accumulative”时 该参数必填。 监控周期范围： 5分钟，20分钟，1小时，4小时，24小时。
    *
    * @return $this
    */
    public function setAggregationWindow($aggregationWindow)
    {
        $this->container['aggregationWindow'] = $aggregationWindow;
        return $this;
    }

    /**
    * Gets operator
    *  判断条件：“>”,“<”,“=”,“>=”,“<=”，当trigger_type为“immediately”时 该参数为空。当trigger_type为“accumulative”时 该参数必填。
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 判断条件：“>”,“<”,“=”,“>=”,“<=”，当trigger_type为“immediately”时 该参数为空。当trigger_type为“accumulative”时 该参数必填。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets thresholds
    *  键值对形式，键为告警级别，值为累计次数，当trigger_type为“immediately”时 累计次数为1。当当trigger_type为“accumulative”时 累计次数范围为1~100 （如果trigger_conditions参数不为空，该参数必填）
    *
    * @return map[string,int]|null
    */
    public function getThresholds()
    {
        return $this->container['thresholds'];
    }

    /**
    * Sets thresholds
    *
    * @param map[string,int]|null $thresholds 键值对形式，键为告警级别，值为累计次数，当trigger_type为“immediately”时 累计次数为1。当当trigger_type为“accumulative”时 累计次数范围为1~100 （如果trigger_conditions参数不为空，该参数必填）
    *
    * @return $this
    */
    public function setThresholds($thresholds)
    {
        $this->container['thresholds'] = $thresholds;
        return $this;
    }

    /**
    * Gets frequency
    *  事件类告警频率。当trigger_type为“immediately”时 值为-1。 - “-1”：N/A - “0”：只告警一次 - “300”：每5分钟 - “600”：每10分钟： - “900”：每15分钟： - “1800”：每30分钟： - “3600”：每1小时： - “10800”：每3小时： - “21600”：每6小时： - “43200”：每12小时： - “86400”：每天：
    *
    * @return string|null
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param string|null $frequency 事件类告警频率。当trigger_type为“immediately”时 值为-1。 - “-1”：N/A - “0”：只告警一次 - “300”：每5分钟 - “600”：每10分钟： - “900”：每15分钟： - “1800”：每30分钟： - “3600”：每1小时： - “10800”：每3小时： - “21600”：每6小时： - “43200”：每12小时： - “86400”：每天：
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
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

