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
    * msgId  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topic  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeTimestamp  **参数解释**： 存储消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bornTimestamp  **参数解释**： 产生消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * reconsumeTimes  **参数解释**： 重试次数。 **取值范围**： 不涉及。
    * body  **参数解释**： 消息体。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bodyCrc  **参数解释**： 消息体校验和。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeSize  **参数解释**： 存储大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * propertyList  **参数解释**： 消息属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bornHost  **参数解释**： 产生消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeHost  **参数解释**： 存储消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * queueId  **参数解释**： 队列ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * queueOffset  **参数解释**： 在队列中的偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * msgId  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topic  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeTimestamp  **参数解释**： 存储消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bornTimestamp  **参数解释**： 产生消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * reconsumeTimes  **参数解释**： 重试次数。 **取值范围**： 不涉及。
    * body  **参数解释**： 消息体。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bodyCrc  **参数解释**： 消息体校验和。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeSize  **参数解释**： 存储大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * propertyList  **参数解释**： 消息属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bornHost  **参数解释**： 产生消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeHost  **参数解释**： 存储消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * queueId  **参数解释**： 队列ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * queueOffset  **参数解释**： 在队列中的偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * msgId  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topic  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeTimestamp  **参数解释**： 存储消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bornTimestamp  **参数解释**： 产生消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * reconsumeTimes  **参数解释**： 重试次数。 **取值范围**： 不涉及。
    * body  **参数解释**： 消息体。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bodyCrc  **参数解释**： 消息体校验和。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeSize  **参数解释**： 存储大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * propertyList  **参数解释**： 消息属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bornHost  **参数解释**： 产生消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeHost  **参数解释**： 存储消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * queueId  **参数解释**： 队列ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * queueOffset  **参数解释**： 在队列中的偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * msgId  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topic  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeTimestamp  **参数解释**： 存储消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bornTimestamp  **参数解释**： 产生消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * reconsumeTimes  **参数解释**： 重试次数。 **取值范围**： 不涉及。
    * body  **参数解释**： 消息体。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bodyCrc  **参数解释**： 消息体校验和。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeSize  **参数解释**： 存储大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * propertyList  **参数解释**： 消息属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bornHost  **参数解释**： 产生消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeHost  **参数解释**： 存储消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * queueId  **参数解释**： 队列ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * queueOffset  **参数解释**： 在队列中的偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * msgId  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * instanceId  **参数解释**： 实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * topic  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeTimestamp  **参数解释**： 存储消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bornTimestamp  **参数解释**： 产生消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * reconsumeTimes  **参数解释**： 重试次数。 **取值范围**： 不涉及。
    * body  **参数解释**： 消息体。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bodyCrc  **参数解释**： 消息体校验和。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeSize  **参数解释**： 存储大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * propertyList  **参数解释**： 消息属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * bornHost  **参数解释**： 产生消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * storeHost  **参数解释**： 存储消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * queueId  **参数解释**： 队列ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * queueOffset  **参数解释**： 在队列中的偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $msgId **参数解释**： 消息ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $instanceId **参数解释**： 实例ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $topic **参数解释**： 主题名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 存储消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param float|null $storeTimestamp **参数解释**： 存储消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 产生消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param float|null $bornTimestamp **参数解释**： 产生消息的时间。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 重试次数。 **取值范围**： 不涉及。
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
    * @param int|null $reconsumeTimes **参数解释**： 重试次数。 **取值范围**： 不涉及。
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
    *  **参数解释**： 消息体。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $body **参数解释**： 消息体。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 消息体校验和。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param float|null $bodyCrc **参数解释**： 消息体校验和。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 存储大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param float|null $storeSize **参数解释**： 存储大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 消息属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\MessagePropertyList[]|null $propertyList **参数解释**： 消息属性列表。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 产生消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $bornHost **参数解释**： 产生消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 存储消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $storeHost **参数解释**： 存储消息的主机IP。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 队列ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param int|null $queueId **参数解释**： 队列ID。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    *  **参数解释**： 在队列中的偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param int|null $queueOffset **参数解释**： 在队列中的偏移量。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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

