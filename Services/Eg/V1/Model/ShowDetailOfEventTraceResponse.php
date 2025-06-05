<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDetailOfEventTraceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDetailOfEventTraceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventId  事件ID
    * eventSource  事件源
    * eventType  事件类型
    * receiveTime  接收时间
    * channelId  通道ID
    * channelName  通道名称
    * deliverList  事件投递列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventId' => 'string',
            'eventSource' => 'string',
            'eventType' => 'string',
            'receiveTime' => 'string',
            'channelId' => 'string',
            'channelName' => 'string',
            'deliverList' => '\HuaweiCloud\SDK\Eg\V1\Model\DeliverItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventId  事件ID
    * eventSource  事件源
    * eventType  事件类型
    * receiveTime  接收时间
    * channelId  通道ID
    * channelName  通道名称
    * deliverList  事件投递列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventId' => null,
        'eventSource' => null,
        'eventType' => null,
        'receiveTime' => null,
        'channelId' => null,
        'channelName' => null,
        'deliverList' => null
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
    * eventId  事件ID
    * eventSource  事件源
    * eventType  事件类型
    * receiveTime  接收时间
    * channelId  通道ID
    * channelName  通道名称
    * deliverList  事件投递列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventId' => 'eventId',
            'eventSource' => 'eventSource',
            'eventType' => 'eventType',
            'receiveTime' => 'receiveTime',
            'channelId' => 'channelId',
            'channelName' => 'channelName',
            'deliverList' => 'deliverList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventId  事件ID
    * eventSource  事件源
    * eventType  事件类型
    * receiveTime  接收时间
    * channelId  通道ID
    * channelName  通道名称
    * deliverList  事件投递列表
    *
    * @var string[]
    */
    protected static $setters = [
            'eventId' => 'setEventId',
            'eventSource' => 'setEventSource',
            'eventType' => 'setEventType',
            'receiveTime' => 'setReceiveTime',
            'channelId' => 'setChannelId',
            'channelName' => 'setChannelName',
            'deliverList' => 'setDeliverList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventId  事件ID
    * eventSource  事件源
    * eventType  事件类型
    * receiveTime  接收时间
    * channelId  通道ID
    * channelName  通道名称
    * deliverList  事件投递列表
    *
    * @var string[]
    */
    protected static $getters = [
            'eventId' => 'getEventId',
            'eventSource' => 'getEventSource',
            'eventType' => 'getEventType',
            'receiveTime' => 'getReceiveTime',
            'channelId' => 'getChannelId',
            'channelName' => 'getChannelName',
            'deliverList' => 'getDeliverList'
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
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['eventSource'] = isset($data['eventSource']) ? $data['eventSource'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['receiveTime'] = isset($data['receiveTime']) ? $data['receiveTime'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['channelName'] = isset($data['channelName']) ? $data['channelName'] : null;
        $this->container['deliverList'] = isset($data['deliverList']) ? $data['deliverList'] : null;
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
    * Gets eventId
    *  事件ID
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
    * @param string|null $eventId 事件ID
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets eventSource
    *  事件源
    *
    * @return string|null
    */
    public function getEventSource()
    {
        return $this->container['eventSource'];
    }

    /**
    * Sets eventSource
    *
    * @param string|null $eventSource 事件源
    *
    * @return $this
    */
    public function setEventSource($eventSource)
    {
        $this->container['eventSource'] = $eventSource;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型
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
    * @param string|null $eventType 事件类型
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets receiveTime
    *  接收时间
    *
    * @return string|null
    */
    public function getReceiveTime()
    {
        return $this->container['receiveTime'];
    }

    /**
    * Sets receiveTime
    *
    * @param string|null $receiveTime 接收时间
    *
    * @return $this
    */
    public function setReceiveTime($receiveTime)
    {
        $this->container['receiveTime'] = $receiveTime;
        return $this;
    }

    /**
    * Gets channelId
    *  通道ID
    *
    * @return string|null
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string|null $channelId 通道ID
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
        return $this;
    }

    /**
    * Gets channelName
    *  通道名称
    *
    * @return string|null
    */
    public function getChannelName()
    {
        return $this->container['channelName'];
    }

    /**
    * Sets channelName
    *
    * @param string|null $channelName 通道名称
    *
    * @return $this
    */
    public function setChannelName($channelName)
    {
        $this->container['channelName'] = $channelName;
        return $this;
    }

    /**
    * Gets deliverList
    *  事件投递列表
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\DeliverItem[]|null
    */
    public function getDeliverList()
    {
        return $this->container['deliverList'];
    }

    /**
    * Sets deliverList
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\DeliverItem[]|null $deliverList 事件投递列表
    *
    * @return $this
    */
    public function setDeliverList($deliverList)
    {
        $this->container['deliverList'] = $deliverList;
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

