<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTracedEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTracedEventsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  查询数据起始时间
    * endTime  查询数据结束时间
    * eventId  指定查询事件的Id
    * sourceName  事件源名称
    * eventType  指定查询的事件类型，精准匹配
    * subscriptionName  事件订阅名称
    * limit  每页显示的条目数量，不能小于0
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * channelId  通道ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'int',
            'endTime' => 'int',
            'eventId' => 'string',
            'sourceName' => 'string',
            'eventType' => 'string',
            'subscriptionName' => 'string',
            'limit' => 'string',
            'offset' => 'int',
            'channelId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  查询数据起始时间
    * endTime  查询数据结束时间
    * eventId  指定查询事件的Id
    * sourceName  事件源名称
    * eventType  指定查询的事件类型，精准匹配
    * subscriptionName  事件订阅名称
    * limit  每页显示的条目数量，不能小于0
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * channelId  通道ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => 'int64',
        'endTime' => 'int64',
        'eventId' => null,
        'sourceName' => null,
        'eventType' => null,
        'subscriptionName' => null,
        'limit' => null,
        'offset' => 'int32',
        'channelId' => null
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
    * startTime  查询数据起始时间
    * endTime  查询数据结束时间
    * eventId  指定查询事件的Id
    * sourceName  事件源名称
    * eventType  指定查询的事件类型，精准匹配
    * subscriptionName  事件订阅名称
    * limit  每页显示的条目数量，不能小于0
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * channelId  通道ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'eventId' => 'event_id',
            'sourceName' => 'source_name',
            'eventType' => 'event_type',
            'subscriptionName' => 'subscription_name',
            'limit' => 'limit',
            'offset' => 'offset',
            'channelId' => 'channel_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  查询数据起始时间
    * endTime  查询数据结束时间
    * eventId  指定查询事件的Id
    * sourceName  事件源名称
    * eventType  指定查询的事件类型，精准匹配
    * subscriptionName  事件订阅名称
    * limit  每页显示的条目数量，不能小于0
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * channelId  通道ID
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'eventId' => 'setEventId',
            'sourceName' => 'setSourceName',
            'eventType' => 'setEventType',
            'subscriptionName' => 'setSubscriptionName',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'channelId' => 'setChannelId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  查询数据起始时间
    * endTime  查询数据结束时间
    * eventId  指定查询事件的Id
    * sourceName  事件源名称
    * eventType  指定查询的事件类型，精准匹配
    * subscriptionName  事件订阅名称
    * limit  每页显示的条目数量，不能小于0
    * offset  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    * channelId  通道ID
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'eventId' => 'getEventId',
            'sourceName' => 'getSourceName',
            'eventType' => 'getEventType',
            'subscriptionName' => 'getSubscriptionName',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'channelId' => 'getChannelId'
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
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['subscriptionName'] = isset($data['subscriptionName']) ? $data['subscriptionName'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
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
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['channelId'] === null) {
            $invalidProperties[] = "'channelId' can't be null";
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
    *  查询数据起始时间
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 查询数据起始时间
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
    *  查询数据结束时间
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 查询数据结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets eventId
    *  指定查询事件的Id
    *
    * @return string|null
    */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
    * Sets eventId
    *
    * @param string|null $eventId 指定查询事件的Id
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets sourceName
    *  事件源名称
    *
    * @return string|null
    */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
    * Sets sourceName
    *
    * @param string|null $sourceName 事件源名称
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
        return $this;
    }

    /**
    * Gets eventType
    *  指定查询的事件类型，精准匹配
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
    * @param string|null $eventType 指定查询的事件类型，精准匹配
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets subscriptionName
    *  事件订阅名称
    *
    * @return string|null
    */
    public function getSubscriptionName()
    {
        return $this->container['subscriptionName'];
    }

    /**
    * Sets subscriptionName
    *
    * @param string|null $subscriptionName 事件订阅名称
    *
    * @return $this
    */
    public function setSubscriptionName($subscriptionName)
    {
        $this->container['subscriptionName'] = $subscriptionName;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，不能小于0
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 每页显示的条目数量，不能小于0
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询，偏移量不能小于0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，表示从此偏移量开始查询，偏移量不能小于0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets channelId
    *  通道ID
    *
    * @return string
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string $channelId 通道ID
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
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

