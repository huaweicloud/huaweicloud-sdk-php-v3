<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GroupMessageOffsetsDetailEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GroupMessageOffsetsDetailEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * partition  分区
    * messageCurrentOffset  消息当前位点
    * topic  topic名称
    * messageLogStartOffset  消息开始位点
    * lag  剩余可消费消息数，即消息堆积数
    * messageLogEndOffset  消息结束位点
    * consumerId  消费者Id
    * host  host名称
    * clientId  客户端Id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'partition' => 'string',
            'messageCurrentOffset' => 'string',
            'topic' => 'string',
            'messageLogStartOffset' => 'int',
            'lag' => 'int',
            'messageLogEndOffset' => 'int',
            'consumerId' => 'string',
            'host' => 'string',
            'clientId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * partition  分区
    * messageCurrentOffset  消息当前位点
    * topic  topic名称
    * messageLogStartOffset  消息开始位点
    * lag  剩余可消费消息数，即消息堆积数
    * messageLogEndOffset  消息结束位点
    * consumerId  消费者Id
    * host  host名称
    * clientId  客户端Id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'partition' => null,
        'messageCurrentOffset' => null,
        'topic' => null,
        'messageLogStartOffset' => null,
        'lag' => null,
        'messageLogEndOffset' => null,
        'consumerId' => null,
        'host' => null,
        'clientId' => null
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
    * partition  分区
    * messageCurrentOffset  消息当前位点
    * topic  topic名称
    * messageLogStartOffset  消息开始位点
    * lag  剩余可消费消息数，即消息堆积数
    * messageLogEndOffset  消息结束位点
    * consumerId  消费者Id
    * host  host名称
    * clientId  客户端Id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'partition' => 'partition',
            'messageCurrentOffset' => 'message_current_offset',
            'topic' => 'topic',
            'messageLogStartOffset' => 'message_log_start_offset',
            'lag' => 'lag',
            'messageLogEndOffset' => 'message_log_end_offset',
            'consumerId' => 'consumer_id',
            'host' => 'host',
            'clientId' => 'client_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * partition  分区
    * messageCurrentOffset  消息当前位点
    * topic  topic名称
    * messageLogStartOffset  消息开始位点
    * lag  剩余可消费消息数，即消息堆积数
    * messageLogEndOffset  消息结束位点
    * consumerId  消费者Id
    * host  host名称
    * clientId  客户端Id
    *
    * @var string[]
    */
    protected static $setters = [
            'partition' => 'setPartition',
            'messageCurrentOffset' => 'setMessageCurrentOffset',
            'topic' => 'setTopic',
            'messageLogStartOffset' => 'setMessageLogStartOffset',
            'lag' => 'setLag',
            'messageLogEndOffset' => 'setMessageLogEndOffset',
            'consumerId' => 'setConsumerId',
            'host' => 'setHost',
            'clientId' => 'setClientId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * partition  分区
    * messageCurrentOffset  消息当前位点
    * topic  topic名称
    * messageLogStartOffset  消息开始位点
    * lag  剩余可消费消息数，即消息堆积数
    * messageLogEndOffset  消息结束位点
    * consumerId  消费者Id
    * host  host名称
    * clientId  客户端Id
    *
    * @var string[]
    */
    protected static $getters = [
            'partition' => 'getPartition',
            'messageCurrentOffset' => 'getMessageCurrentOffset',
            'topic' => 'getTopic',
            'messageLogStartOffset' => 'getMessageLogStartOffset',
            'lag' => 'getLag',
            'messageLogEndOffset' => 'getMessageLogEndOffset',
            'consumerId' => 'getConsumerId',
            'host' => 'getHost',
            'clientId' => 'getClientId'
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
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['messageCurrentOffset'] = isset($data['messageCurrentOffset']) ? $data['messageCurrentOffset'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['messageLogStartOffset'] = isset($data['messageLogStartOffset']) ? $data['messageLogStartOffset'] : null;
        $this->container['lag'] = isset($data['lag']) ? $data['lag'] : null;
        $this->container['messageLogEndOffset'] = isset($data['messageLogEndOffset']) ? $data['messageLogEndOffset'] : null;
        $this->container['consumerId'] = isset($data['consumerId']) ? $data['consumerId'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
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
    * Gets partition
    *  分区
    *
    * @return string|null
    */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
    * Sets partition
    *
    * @param string|null $partition 分区
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets messageCurrentOffset
    *  消息当前位点
    *
    * @return string|null
    */
    public function getMessageCurrentOffset()
    {
        return $this->container['messageCurrentOffset'];
    }

    /**
    * Sets messageCurrentOffset
    *
    * @param string|null $messageCurrentOffset 消息当前位点
    *
    * @return $this
    */
    public function setMessageCurrentOffset($messageCurrentOffset)
    {
        $this->container['messageCurrentOffset'] = $messageCurrentOffset;
        return $this;
    }

    /**
    * Gets topic
    *  topic名称
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
    * @param string|null $topic topic名称
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets messageLogStartOffset
    *  消息开始位点
    *
    * @return int|null
    */
    public function getMessageLogStartOffset()
    {
        return $this->container['messageLogStartOffset'];
    }

    /**
    * Sets messageLogStartOffset
    *
    * @param int|null $messageLogStartOffset 消息开始位点
    *
    * @return $this
    */
    public function setMessageLogStartOffset($messageLogStartOffset)
    {
        $this->container['messageLogStartOffset'] = $messageLogStartOffset;
        return $this;
    }

    /**
    * Gets lag
    *  剩余可消费消息数，即消息堆积数
    *
    * @return int|null
    */
    public function getLag()
    {
        return $this->container['lag'];
    }

    /**
    * Sets lag
    *
    * @param int|null $lag 剩余可消费消息数，即消息堆积数
    *
    * @return $this
    */
    public function setLag($lag)
    {
        $this->container['lag'] = $lag;
        return $this;
    }

    /**
    * Gets messageLogEndOffset
    *  消息结束位点
    *
    * @return int|null
    */
    public function getMessageLogEndOffset()
    {
        return $this->container['messageLogEndOffset'];
    }

    /**
    * Sets messageLogEndOffset
    *
    * @param int|null $messageLogEndOffset 消息结束位点
    *
    * @return $this
    */
    public function setMessageLogEndOffset($messageLogEndOffset)
    {
        $this->container['messageLogEndOffset'] = $messageLogEndOffset;
        return $this;
    }

    /**
    * Gets consumerId
    *  消费者Id
    *
    * @return string|null
    */
    public function getConsumerId()
    {
        return $this->container['consumerId'];
    }

    /**
    * Sets consumerId
    *
    * @param string|null $consumerId 消费者Id
    *
    * @return $this
    */
    public function setConsumerId($consumerId)
    {
        $this->container['consumerId'] = $consumerId;
        return $this;
    }

    /**
    * Gets host
    *  host名称
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host host名称
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets clientId
    *  客户端Id
    *
    * @return string|null
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string|null $clientId 客户端Id
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
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

