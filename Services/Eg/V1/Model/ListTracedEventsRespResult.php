<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTracedEventsRespResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTracedEventsResp_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscriptionName  subscriptionName
    * sourceName  sourceName
    * sourceProvider  sourceProvider
    * eventType  eventType
    * eventId  eventId
    * eventReceivedTime  eventReceivedTime
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscriptionName' => 'string',
            'sourceName' => 'string',
            'sourceProvider' => 'string',
            'eventType' => 'string',
            'eventId' => 'string',
            'eventReceivedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscriptionName  subscriptionName
    * sourceName  sourceName
    * sourceProvider  sourceProvider
    * eventType  eventType
    * eventId  eventId
    * eventReceivedTime  eventReceivedTime
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscriptionName' => null,
        'sourceName' => null,
        'sourceProvider' => null,
        'eventType' => null,
        'eventId' => null,
        'eventReceivedTime' => 'int32'
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
    * subscriptionName  subscriptionName
    * sourceName  sourceName
    * sourceProvider  sourceProvider
    * eventType  eventType
    * eventId  eventId
    * eventReceivedTime  eventReceivedTime
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscriptionName' => 'subscription_name',
            'sourceName' => 'source_name',
            'sourceProvider' => 'source_provider',
            'eventType' => 'event_type',
            'eventId' => 'event_id',
            'eventReceivedTime' => 'event_received_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscriptionName  subscriptionName
    * sourceName  sourceName
    * sourceProvider  sourceProvider
    * eventType  eventType
    * eventId  eventId
    * eventReceivedTime  eventReceivedTime
    *
    * @var string[]
    */
    protected static $setters = [
            'subscriptionName' => 'setSubscriptionName',
            'sourceName' => 'setSourceName',
            'sourceProvider' => 'setSourceProvider',
            'eventType' => 'setEventType',
            'eventId' => 'setEventId',
            'eventReceivedTime' => 'setEventReceivedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscriptionName  subscriptionName
    * sourceName  sourceName
    * sourceProvider  sourceProvider
    * eventType  eventType
    * eventId  eventId
    * eventReceivedTime  eventReceivedTime
    *
    * @var string[]
    */
    protected static $getters = [
            'subscriptionName' => 'getSubscriptionName',
            'sourceName' => 'getSourceName',
            'sourceProvider' => 'getSourceProvider',
            'eventType' => 'getEventType',
            'eventId' => 'getEventId',
            'eventReceivedTime' => 'getEventReceivedTime'
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
        $this->container['subscriptionName'] = isset($data['subscriptionName']) ? $data['subscriptionName'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['sourceProvider'] = isset($data['sourceProvider']) ? $data['sourceProvider'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['eventId'] = isset($data['eventId']) ? $data['eventId'] : null;
        $this->container['eventReceivedTime'] = isset($data['eventReceivedTime']) ? $data['eventReceivedTime'] : null;
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
    * Gets subscriptionName
    *  subscriptionName
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
    * @param string|null $subscriptionName subscriptionName
    *
    * @return $this
    */
    public function setSubscriptionName($subscriptionName)
    {
        $this->container['subscriptionName'] = $subscriptionName;
        return $this;
    }

    /**
    * Gets sourceName
    *  sourceName
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
    * @param string|null $sourceName sourceName
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
        return $this;
    }

    /**
    * Gets sourceProvider
    *  sourceProvider
    *
    * @return string|null
    */
    public function getSourceProvider()
    {
        return $this->container['sourceProvider'];
    }

    /**
    * Sets sourceProvider
    *
    * @param string|null $sourceProvider sourceProvider
    *
    * @return $this
    */
    public function setSourceProvider($sourceProvider)
    {
        $this->container['sourceProvider'] = $sourceProvider;
        return $this;
    }

    /**
    * Gets eventType
    *  eventType
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
    * @param string|null $eventType eventType
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets eventId
    *  eventId
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
    * @param string|null $eventId eventId
    *
    * @return $this
    */
    public function setEventId($eventId)
    {
        $this->container['eventId'] = $eventId;
        return $this;
    }

    /**
    * Gets eventReceivedTime
    *  eventReceivedTime
    *
    * @return int|null
    */
    public function getEventReceivedTime()
    {
        return $this->container['eventReceivedTime'];
    }

    /**
    * Sets eventReceivedTime
    *
    * @param int|null $eventReceivedTime eventReceivedTime
    *
    * @return $this
    */
    public function setEventReceivedTime($eventReceivedTime)
    {
        $this->container['eventReceivedTime'] = $eventReceivedTime;
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

