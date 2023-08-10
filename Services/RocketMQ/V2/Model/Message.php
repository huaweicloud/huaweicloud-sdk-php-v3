<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Message implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Message';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * msgId  消息ID。
    * instanceId  实例ID。
    * topic  主题名称。
    * storeTimestamp  存储消息的时间。
    * bornTimestamp  产生消息的时间。
    * reconsumeTimes  重试次数。
    * body  消息体。
    * bodyCrc  消息体校验和。
    * storeSize  存储大小。
    * propertyList  消息属性列表。
    * bornHost  产生消息的主机IP。
    * storeHost  存储消息的主机IP。
    * queueId  队列ID。
    * queueOffset  在队列中的偏移量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'msgId' => 'string',
            'instanceId' => 'string',
            'topic' => 'string',
            'storeTimestamp' => 'float',
            'bornTimestamp' => 'float',
            'reconsumeTimes' => 'int',
            'body' => 'string',
            'bodyCrc' => 'float',
            'storeSize' => 'float',
            'propertyList' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\MessagePropertyList[]',
            'bornHost' => 'string',
            'storeHost' => 'string',
            'queueId' => 'int',
            'queueOffset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * msgId  消息ID。
    * instanceId  实例ID。
    * topic  主题名称。
    * storeTimestamp  存储消息的时间。
    * bornTimestamp  产生消息的时间。
    * reconsumeTimes  重试次数。
    * body  消息体。
    * bodyCrc  消息体校验和。
    * storeSize  存储大小。
    * propertyList  消息属性列表。
    * bornHost  产生消息的主机IP。
    * storeHost  存储消息的主机IP。
    * queueId  队列ID。
    * queueOffset  在队列中的偏移量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'msgId' => null,
        'instanceId' => null,
        'topic' => null,
        'storeTimestamp' => null,
        'bornTimestamp' => null,
        'reconsumeTimes' => null,
        'body' => null,
        'bodyCrc' => null,
        'storeSize' => null,
        'propertyList' => null,
        'bornHost' => null,
        'storeHost' => null,
        'queueId' => null,
        'queueOffset' => null
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
    * msgId  消息ID。
    * instanceId  实例ID。
    * topic  主题名称。
    * storeTimestamp  存储消息的时间。
    * bornTimestamp  产生消息的时间。
    * reconsumeTimes  重试次数。
    * body  消息体。
    * bodyCrc  消息体校验和。
    * storeSize  存储大小。
    * propertyList  消息属性列表。
    * bornHost  产生消息的主机IP。
    * storeHost  存储消息的主机IP。
    * queueId  队列ID。
    * queueOffset  在队列中的偏移量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'msgId' => 'msg_id',
            'instanceId' => 'instance_id',
            'topic' => 'topic',
            'storeTimestamp' => 'store_timestamp',
            'bornTimestamp' => 'born_timestamp',
            'reconsumeTimes' => 'reconsume_times',
            'body' => 'body',
            'bodyCrc' => 'body_crc',
            'storeSize' => 'store_size',
            'propertyList' => 'property_list',
            'bornHost' => 'born_host',
            'storeHost' => 'store_host',
            'queueId' => 'queue_id',
            'queueOffset' => 'queue_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * msgId  消息ID。
    * instanceId  实例ID。
    * topic  主题名称。
    * storeTimestamp  存储消息的时间。
    * bornTimestamp  产生消息的时间。
    * reconsumeTimes  重试次数。
    * body  消息体。
    * bodyCrc  消息体校验和。
    * storeSize  存储大小。
    * propertyList  消息属性列表。
    * bornHost  产生消息的主机IP。
    * storeHost  存储消息的主机IP。
    * queueId  队列ID。
    * queueOffset  在队列中的偏移量。
    *
    * @var string[]
    */
    protected static $setters = [
            'msgId' => 'setMsgId',
            'instanceId' => 'setInstanceId',
            'topic' => 'setTopic',
            'storeTimestamp' => 'setStoreTimestamp',
            'bornTimestamp' => 'setBornTimestamp',
            'reconsumeTimes' => 'setReconsumeTimes',
            'body' => 'setBody',
            'bodyCrc' => 'setBodyCrc',
            'storeSize' => 'setStoreSize',
            'propertyList' => 'setPropertyList',
            'bornHost' => 'setBornHost',
            'storeHost' => 'setStoreHost',
            'queueId' => 'setQueueId',
            'queueOffset' => 'setQueueOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * msgId  消息ID。
    * instanceId  实例ID。
    * topic  主题名称。
    * storeTimestamp  存储消息的时间。
    * bornTimestamp  产生消息的时间。
    * reconsumeTimes  重试次数。
    * body  消息体。
    * bodyCrc  消息体校验和。
    * storeSize  存储大小。
    * propertyList  消息属性列表。
    * bornHost  产生消息的主机IP。
    * storeHost  存储消息的主机IP。
    * queueId  队列ID。
    * queueOffset  在队列中的偏移量。
    *
    * @var string[]
    */
    protected static $getters = [
            'msgId' => 'getMsgId',
            'instanceId' => 'getInstanceId',
            'topic' => 'getTopic',
            'storeTimestamp' => 'getStoreTimestamp',
            'bornTimestamp' => 'getBornTimestamp',
            'reconsumeTimes' => 'getReconsumeTimes',
            'body' => 'getBody',
            'bodyCrc' => 'getBodyCrc',
            'storeSize' => 'getStoreSize',
            'propertyList' => 'getPropertyList',
            'bornHost' => 'getBornHost',
            'storeHost' => 'getStoreHost',
            'queueId' => 'getQueueId',
            'queueOffset' => 'getQueueOffset'
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
        $this->container['msgId'] = isset($data['msgId']) ? $data['msgId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['storeTimestamp'] = isset($data['storeTimestamp']) ? $data['storeTimestamp'] : null;
        $this->container['bornTimestamp'] = isset($data['bornTimestamp']) ? $data['bornTimestamp'] : null;
        $this->container['reconsumeTimes'] = isset($data['reconsumeTimes']) ? $data['reconsumeTimes'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['bodyCrc'] = isset($data['bodyCrc']) ? $data['bodyCrc'] : null;
        $this->container['storeSize'] = isset($data['storeSize']) ? $data['storeSize'] : null;
        $this->container['propertyList'] = isset($data['propertyList']) ? $data['propertyList'] : null;
        $this->container['bornHost'] = isset($data['bornHost']) ? $data['bornHost'] : null;
        $this->container['storeHost'] = isset($data['storeHost']) ? $data['storeHost'] : null;
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['queueOffset'] = isset($data['queueOffset']) ? $data['queueOffset'] : null;
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
    * Gets msgId
    *  消息ID。
    *
    * @return string|null
    */
    public function getMsgId()
    {
        return $this->container['msgId'];
    }

    /**
    * Sets msgId
    *
    * @param string|null $msgId 消息ID。
    *
    * @return $this
    */
    public function setMsgId($msgId)
    {
        $this->container['msgId'] = $msgId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets topic
    *  主题名称。
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic 主题名称。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets storeTimestamp
    *  存储消息的时间。
    *
    * @return float|null
    */
    public function getStoreTimestamp()
    {
        return $this->container['storeTimestamp'];
    }

    /**
    * Sets storeTimestamp
    *
    * @param float|null $storeTimestamp 存储消息的时间。
    *
    * @return $this
    */
    public function setStoreTimestamp($storeTimestamp)
    {
        $this->container['storeTimestamp'] = $storeTimestamp;
        return $this;
    }

    /**
    * Gets bornTimestamp
    *  产生消息的时间。
    *
    * @return float|null
    */
    public function getBornTimestamp()
    {
        return $this->container['bornTimestamp'];
    }

    /**
    * Sets bornTimestamp
    *
    * @param float|null $bornTimestamp 产生消息的时间。
    *
    * @return $this
    */
    public function setBornTimestamp($bornTimestamp)
    {
        $this->container['bornTimestamp'] = $bornTimestamp;
        return $this;
    }

    /**
    * Gets reconsumeTimes
    *  重试次数。
    *
    * @return int|null
    */
    public function getReconsumeTimes()
    {
        return $this->container['reconsumeTimes'];
    }

    /**
    * Sets reconsumeTimes
    *
    * @param int|null $reconsumeTimes 重试次数。
    *
    * @return $this
    */
    public function setReconsumeTimes($reconsumeTimes)
    {
        $this->container['reconsumeTimes'] = $reconsumeTimes;
        return $this;
    }

    /**
    * Gets body
    *  消息体。
    *
    * @return string|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param string|null $body 消息体。
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets bodyCrc
    *  消息体校验和。
    *
    * @return float|null
    */
    public function getBodyCrc()
    {
        return $this->container['bodyCrc'];
    }

    /**
    * Sets bodyCrc
    *
    * @param float|null $bodyCrc 消息体校验和。
    *
    * @return $this
    */
    public function setBodyCrc($bodyCrc)
    {
        $this->container['bodyCrc'] = $bodyCrc;
        return $this;
    }

    /**
    * Gets storeSize
    *  存储大小。
    *
    * @return float|null
    */
    public function getStoreSize()
    {
        return $this->container['storeSize'];
    }

    /**
    * Sets storeSize
    *
    * @param float|null $storeSize 存储大小。
    *
    * @return $this
    */
    public function setStoreSize($storeSize)
    {
        $this->container['storeSize'] = $storeSize;
        return $this;
    }

    /**
    * Gets propertyList
    *  消息属性列表。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\MessagePropertyList[]|null
    */
    public function getPropertyList()
    {
        return $this->container['propertyList'];
    }

    /**
    * Sets propertyList
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\MessagePropertyList[]|null $propertyList 消息属性列表。
    *
    * @return $this
    */
    public function setPropertyList($propertyList)
    {
        $this->container['propertyList'] = $propertyList;
        return $this;
    }

    /**
    * Gets bornHost
    *  产生消息的主机IP。
    *
    * @return string|null
    */
    public function getBornHost()
    {
        return $this->container['bornHost'];
    }

    /**
    * Sets bornHost
    *
    * @param string|null $bornHost 产生消息的主机IP。
    *
    * @return $this
    */
    public function setBornHost($bornHost)
    {
        $this->container['bornHost'] = $bornHost;
        return $this;
    }

    /**
    * Gets storeHost
    *  存储消息的主机IP。
    *
    * @return string|null
    */
    public function getStoreHost()
    {
        return $this->container['storeHost'];
    }

    /**
    * Sets storeHost
    *
    * @param string|null $storeHost 存储消息的主机IP。
    *
    * @return $this
    */
    public function setStoreHost($storeHost)
    {
        $this->container['storeHost'] = $storeHost;
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
    * Gets queueOffset
    *  在队列中的偏移量。
    *
    * @return int|null
    */
    public function getQueueOffset()
    {
        return $this->container['queueOffset'];
    }

    /**
    * Sets queueOffset
    *
    * @param int|null $queueOffset 在队列中的偏移量。
    *
    * @return $this
    */
    public function setQueueOffset($queueOffset)
    {
        $this->container['queueOffset'] = $queueOffset;
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

