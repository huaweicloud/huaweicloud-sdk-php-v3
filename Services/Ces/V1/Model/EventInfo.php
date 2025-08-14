<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventName  事件名称。
    * eventType  事件类型。
    * subEventType  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    * eventCount  选择查询的时间范围内，此事件发生的数量。
    * latestOccurTime  此事件最近一次发生的时间。
    * latestEventSource  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventName' => 'string',
            'eventType' => 'string',
            'subEventType' => 'string',
            'eventCount' => 'int',
            'latestOccurTime' => 'int',
            'latestEventSource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventName  事件名称。
    * eventType  事件类型。
    * subEventType  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    * eventCount  选择查询的时间范围内，此事件发生的数量。
    * latestOccurTime  此事件最近一次发生的时间。
    * latestEventSource  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventName' => null,
        'eventType' => null,
        'subEventType' => null,
        'eventCount' => 'int32',
        'latestOccurTime' => 'int64',
        'latestEventSource' => null
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
    * eventType  事件类型。
    * subEventType  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    * eventCount  选择查询的时间范围内，此事件发生的数量。
    * latestOccurTime  此事件最近一次发生的时间。
    * latestEventSource  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventName' => 'event_name',
            'eventType' => 'event_type',
            'subEventType' => 'sub_event_type',
            'eventCount' => 'event_count',
            'latestOccurTime' => 'latest_occur_time',
            'latestEventSource' => 'latest_event_source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventName  事件名称。
    * eventType  事件类型。
    * subEventType  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    * eventCount  选择查询的时间范围内，此事件发生的数量。
    * latestOccurTime  此事件最近一次发生的时间。
    * latestEventSource  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    *
    * @var string[]
    */
    protected static $setters = [
            'eventName' => 'setEventName',
            'eventType' => 'setEventType',
            'subEventType' => 'setSubEventType',
            'eventCount' => 'setEventCount',
            'latestOccurTime' => 'setLatestOccurTime',
            'latestEventSource' => 'setLatestEventSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventName  事件名称。
    * eventType  事件类型。
    * subEventType  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    * eventCount  选择查询的时间范围内，此事件发生的数量。
    * latestOccurTime  此事件最近一次发生的时间。
    * latestEventSource  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    *
    * @var string[]
    */
    protected static $getters = [
            'eventName' => 'getEventName',
            'eventType' => 'getEventType',
            'subEventType' => 'getSubEventType',
            'eventCount' => 'getEventCount',
            'latestOccurTime' => 'getLatestOccurTime',
            'latestEventSource' => 'getLatestEventSource'
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
    const SUB_EVENT_TYPE_SUB_EVENT_OPS = 'SUB_EVENT.OPS';
    const SUB_EVENT_TYPE_SUB_EVENT_PLAN = 'SUB_EVENT.PLAN';
    const SUB_EVENT_TYPE_SUB_EVENT_CUSTOM = 'SUB_EVENT.CUSTOM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubEventTypeAllowableValues()
    {
        return [
            self::SUB_EVENT_TYPE_SUB_EVENT_OPS,
            self::SUB_EVENT_TYPE_SUB_EVENT_PLAN,
            self::SUB_EVENT_TYPE_SUB_EVENT_CUSTOM,
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
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['subEventType'] = isset($data['subEventType']) ? $data['subEventType'] : null;
        $this->container['eventCount'] = isset($data['eventCount']) ? $data['eventCount'] : null;
        $this->container['latestOccurTime'] = isset($data['latestOccurTime']) ? $data['latestOccurTime'] : null;
        $this->container['latestEventSource'] = isset($data['latestEventSource']) ? $data['latestEventSource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSubEventTypeAllowableValues();
                if (!is_null($this->container['subEventType']) && !in_array($this->container['subEventType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subEventType', must be one of '%s'",
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
    * Gets eventType
    *  事件类型。
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType 事件类型。
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets subEventType
    *  事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    *
    * @return string|null
    */
    public function getSubEventType()
    {
        return $this->container['subEventType'];
    }

    /**
    * Sets subEventType
    *
    * @param string|null $subEventType 事件子类。 枚举类型：SUB_EVENT.OPS为运维事件，SUB_EVENT.PLAN为计划事件，SUB_EVENT.CUSTOM为自定义事件。
    *
    * @return $this
    */
    public function setSubEventType($subEventType)
    {
        $this->container['subEventType'] = $subEventType;
        return $this;
    }

    /**
    * Gets eventCount
    *  选择查询的时间范围内，此事件发生的数量。
    *
    * @return int|null
    */
    public function getEventCount()
    {
        return $this->container['eventCount'];
    }

    /**
    * Sets eventCount
    *
    * @param int|null $eventCount 选择查询的时间范围内，此事件发生的数量。
    *
    * @return $this
    */
    public function setEventCount($eventCount)
    {
        $this->container['eventCount'] = $eventCount;
        return $this;
    }

    /**
    * Gets latestOccurTime
    *  此事件最近一次发生的时间。
    *
    * @return int|null
    */
    public function getLatestOccurTime()
    {
        return $this->container['latestOccurTime'];
    }

    /**
    * Sets latestOccurTime
    *
    * @param int|null $latestOccurTime 此事件最近一次发生的时间。
    *
    * @return $this
    */
    public function setLatestOccurTime($latestOccurTime)
    {
        $this->container['latestOccurTime'] = $latestOccurTime;
        return $this;
    }

    /**
    * Gets latestEventSource
    *  事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    *
    * @return string|null
    */
    public function getLatestEventSource()
    {
        return $this->container['latestEventSource'];
    }

    /**
    * Sets latestEventSource
    *
    * @param string|null $latestEventSource 事件来源，如果是系统事件则值为各服务的命名空间，各服务的命名空间可查看：“[服务命名空间](https://support.huaweicloud.com/usermanual-ces/zh-cn_topic_0202622212.html)”；如果是自定义事件，则为用户自定义上报定义。
    *
    * @return $this
    */
    public function setLatestEventSource($latestEventSource)
    {
        $this->container['latestEventSource'] = $latestEventSource;
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

