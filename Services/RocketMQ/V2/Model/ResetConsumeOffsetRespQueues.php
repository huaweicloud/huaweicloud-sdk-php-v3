<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetConsumeOffsetRespQueues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetConsumeOffsetResp_queues';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * brokerName  队列所在的broker。
    * queueId  队列ID。
    * timestampOffset  重置消费进度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'brokerName' => 'string',
            'queueId' => 'int',
            'timestampOffset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * brokerName  队列所在的broker。
    * queueId  队列ID。
    * timestampOffset  重置消费进度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'brokerName' => null,
        'queueId' => 'int32',
        'timestampOffset' => 'int64'
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
    * brokerName  队列所在的broker。
    * queueId  队列ID。
    * timestampOffset  重置消费进度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'brokerName' => 'broker_name',
            'queueId' => 'queue_id',
            'timestampOffset' => 'timestamp_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * brokerName  队列所在的broker。
    * queueId  队列ID。
    * timestampOffset  重置消费进度。
    *
    * @var string[]
    */
    protected static $setters = [
            'brokerName' => 'setBrokerName',
            'queueId' => 'setQueueId',
            'timestampOffset' => 'setTimestampOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * brokerName  队列所在的broker。
    * queueId  队列ID。
    * timestampOffset  重置消费进度。
    *
    * @var string[]
    */
    protected static $getters = [
            'brokerName' => 'getBrokerName',
            'queueId' => 'getQueueId',
            'timestampOffset' => 'getTimestampOffset'
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
        $this->container['brokerName'] = isset($data['brokerName']) ? $data['brokerName'] : null;
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['timestampOffset'] = isset($data['timestampOffset']) ? $data['timestampOffset'] : null;
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
    * Gets brokerName
    *  队列所在的broker。
    *
    * @return string|null
    */
    public function getBrokerName()
    {
        return $this->container['brokerName'];
    }

    /**
    * Sets brokerName
    *
    * @param string|null $brokerName 队列所在的broker。
    *
    * @return $this
    */
    public function setBrokerName($brokerName)
    {
        $this->container['brokerName'] = $brokerName;
        return $this;
    }

    /**
    * Gets queueId
    *  队列ID。
    *
    * @return int|null
    */
    public function getQueueId()
    {
        return $this->container['queueId'];
    }

    /**
    * Sets queueId
    *
    * @param int|null $queueId 队列ID。
    *
    * @return $this
    */
    public function setQueueId($queueId)
    {
        $this->container['queueId'] = $queueId;
        return $this;
    }

    /**
    * Gets timestampOffset
    *  重置消费进度。
    *
    * @return int|null
    */
    public function getTimestampOffset()
    {
        return $this->container['timestampOffset'];
    }

    /**
    * Sets timestampOffset
    *
    * @param int|null $timestampOffset 重置消费进度。
    *
    * @return $this
    */
    public function setTimestampOffset($timestampOffset)
    {
        $this->container['timestampOffset'] = $timestampOffset;
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

