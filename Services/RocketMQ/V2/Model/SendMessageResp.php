<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SendMessageResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SendMessageResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  **参数解释**： 主题名称。 **取值范围**： 不涉及。
    * body  **参数解释**： 消息内容。 **取值范围**： 不涉及。
    * propertyList  **参数解释**： 特性列表。 **取值范围**： 不涉及。
    * msgId  **参数解释**： 消息ID。 **取值范围**： 不涉及。
    * queueId  **参数解释**： 队列ID。 **取值范围**： 不涉及。
    * queueOffset  **参数解释**： 队列offset。 **取值范围**： 不涉及。
    * brokerName  **参数解释**： Broker名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'body' => 'string',
            'propertyList' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\SendMessageProperties[]',
            'msgId' => 'string',
            'queueId' => 'float',
            'queueOffset' => 'float',
            'brokerName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  **参数解释**： 主题名称。 **取值范围**： 不涉及。
    * body  **参数解释**： 消息内容。 **取值范围**： 不涉及。
    * propertyList  **参数解释**： 特性列表。 **取值范围**： 不涉及。
    * msgId  **参数解释**： 消息ID。 **取值范围**： 不涉及。
    * queueId  **参数解释**： 队列ID。 **取值范围**： 不涉及。
    * queueOffset  **参数解释**： 队列offset。 **取值范围**： 不涉及。
    * brokerName  **参数解释**： Broker名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
        'body' => null,
        'propertyList' => null,
        'msgId' => null,
        'queueId' => null,
        'queueOffset' => null,
        'brokerName' => null
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
    * topic  **参数解释**： 主题名称。 **取值范围**： 不涉及。
    * body  **参数解释**： 消息内容。 **取值范围**： 不涉及。
    * propertyList  **参数解释**： 特性列表。 **取值范围**： 不涉及。
    * msgId  **参数解释**： 消息ID。 **取值范围**： 不涉及。
    * queueId  **参数解释**： 队列ID。 **取值范围**： 不涉及。
    * queueOffset  **参数解释**： 队列offset。 **取值范围**： 不涉及。
    * brokerName  **参数解释**： Broker名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'body' => 'body',
            'propertyList' => 'property_list',
            'msgId' => 'msg_id',
            'queueId' => 'queue_id',
            'queueOffset' => 'queue_offset',
            'brokerName' => 'broker_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  **参数解释**： 主题名称。 **取值范围**： 不涉及。
    * body  **参数解释**： 消息内容。 **取值范围**： 不涉及。
    * propertyList  **参数解释**： 特性列表。 **取值范围**： 不涉及。
    * msgId  **参数解释**： 消息ID。 **取值范围**： 不涉及。
    * queueId  **参数解释**： 队列ID。 **取值范围**： 不涉及。
    * queueOffset  **参数解释**： 队列offset。 **取值范围**： 不涉及。
    * brokerName  **参数解释**： Broker名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'body' => 'setBody',
            'propertyList' => 'setPropertyList',
            'msgId' => 'setMsgId',
            'queueId' => 'setQueueId',
            'queueOffset' => 'setQueueOffset',
            'brokerName' => 'setBrokerName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  **参数解释**： 主题名称。 **取值范围**： 不涉及。
    * body  **参数解释**： 消息内容。 **取值范围**： 不涉及。
    * propertyList  **参数解释**： 特性列表。 **取值范围**： 不涉及。
    * msgId  **参数解释**： 消息ID。 **取值范围**： 不涉及。
    * queueId  **参数解释**： 队列ID。 **取值范围**： 不涉及。
    * queueOffset  **参数解释**： 队列offset。 **取值范围**： 不涉及。
    * brokerName  **参数解释**： Broker名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
            'body' => 'getBody',
            'propertyList' => 'getPropertyList',
            'msgId' => 'getMsgId',
            'queueId' => 'getQueueId',
            'queueOffset' => 'getQueueOffset',
            'brokerName' => 'getBrokerName'
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
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['propertyList'] = isset($data['propertyList']) ? $data['propertyList'] : null;
        $this->container['msgId'] = isset($data['msgId']) ? $data['msgId'] : null;
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['queueOffset'] = isset($data['queueOffset']) ? $data['queueOffset'] : null;
        $this->container['brokerName'] = isset($data['brokerName']) ? $data['brokerName'] : null;
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
    * Gets topic
    *  **参数解释**： 主题名称。 **取值范围**： 不涉及。
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
    * @param string|null $topic **参数解释**： 主题名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets body
    *  **参数解释**： 消息内容。 **取值范围**： 不涉及。
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
    * @param string|null $body **参数解释**： 消息内容。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets propertyList
    *  **参数解释**： 特性列表。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\SendMessageProperties[]|null
    */
    public function getPropertyList()
    {
        return $this->container['propertyList'];
    }

    /**
    * Sets propertyList
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\SendMessageProperties[]|null $propertyList **参数解释**： 特性列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPropertyList($propertyList)
    {
        $this->container['propertyList'] = $propertyList;
        return $this;
    }

    /**
    * Gets msgId
    *  **参数解释**： 消息ID。 **取值范围**： 不涉及。
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
    * @param string|null $msgId **参数解释**： 消息ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMsgId($msgId)
    {
        $this->container['msgId'] = $msgId;
        return $this;
    }

    /**
    * Gets queueId
    *  **参数解释**： 队列ID。 **取值范围**： 不涉及。
    *
    * @return float|null
    */
    public function getQueueId()
    {
        return $this->container['queueId'];
    }

    /**
    * Sets queueId
    *
    * @param float|null $queueId **参数解释**： 队列ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 队列offset。 **取值范围**： 不涉及。
    *
    * @return float|null
    */
    public function getQueueOffset()
    {
        return $this->container['queueOffset'];
    }

    /**
    * Sets queueOffset
    *
    * @param float|null $queueOffset **参数解释**： 队列offset。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setQueueOffset($queueOffset)
    {
        $this->container['queueOffset'] = $queueOffset;
        return $this;
    }

    /**
    * Gets brokerName
    *  **参数解释**： Broker名称。 **取值范围**： 不涉及。
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
    * @param string|null $brokerName **参数解释**： Broker名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setBrokerName($brokerName)
    {
        $this->container['brokerName'] = $brokerName;
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

