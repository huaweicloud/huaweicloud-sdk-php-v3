<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MessagesEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MessagesEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  Topic名称。
    * partition  消息所在的分区。
    * key  消息key。
    * value  消息内容。
    * size  消息大小。
    * timestamp  生产消息的时间。 格式为Unix时间戳。单位为毫秒。
    * hugeMessage  大数据标识。
    * messageOffset  消息偏移量。
    * messageId  消息ID。
    * appId  应用ID。
    * tag  消息标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'partition' => 'int',
            'key' => 'string',
            'value' => 'string',
            'size' => 'int',
            'timestamp' => 'int',
            'hugeMessage' => 'bool',
            'messageOffset' => 'int',
            'messageId' => 'string',
            'appId' => 'string',
            'tag' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  Topic名称。
    * partition  消息所在的分区。
    * key  消息key。
    * value  消息内容。
    * size  消息大小。
    * timestamp  生产消息的时间。 格式为Unix时间戳。单位为毫秒。
    * hugeMessage  大数据标识。
    * messageOffset  消息偏移量。
    * messageId  消息ID。
    * appId  应用ID。
    * tag  消息标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
        'partition' => null,
        'key' => null,
        'value' => null,
        'size' => null,
        'timestamp' => 'int64',
        'hugeMessage' => null,
        'messageOffset' => 'int64',
        'messageId' => null,
        'appId' => null,
        'tag' => null
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
    * topic  Topic名称。
    * partition  消息所在的分区。
    * key  消息key。
    * value  消息内容。
    * size  消息大小。
    * timestamp  生产消息的时间。 格式为Unix时间戳。单位为毫秒。
    * hugeMessage  大数据标识。
    * messageOffset  消息偏移量。
    * messageId  消息ID。
    * appId  应用ID。
    * tag  消息标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'partition' => 'partition',
            'key' => 'key',
            'value' => 'value',
            'size' => 'size',
            'timestamp' => 'timestamp',
            'hugeMessage' => 'huge_message',
            'messageOffset' => 'message_offset',
            'messageId' => 'message_id',
            'appId' => 'app_id',
            'tag' => 'tag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  Topic名称。
    * partition  消息所在的分区。
    * key  消息key。
    * value  消息内容。
    * size  消息大小。
    * timestamp  生产消息的时间。 格式为Unix时间戳。单位为毫秒。
    * hugeMessage  大数据标识。
    * messageOffset  消息偏移量。
    * messageId  消息ID。
    * appId  应用ID。
    * tag  消息标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'partition' => 'setPartition',
            'key' => 'setKey',
            'value' => 'setValue',
            'size' => 'setSize',
            'timestamp' => 'setTimestamp',
            'hugeMessage' => 'setHugeMessage',
            'messageOffset' => 'setMessageOffset',
            'messageId' => 'setMessageId',
            'appId' => 'setAppId',
            'tag' => 'setTag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  Topic名称。
    * partition  消息所在的分区。
    * key  消息key。
    * value  消息内容。
    * size  消息大小。
    * timestamp  生产消息的时间。 格式为Unix时间戳。单位为毫秒。
    * hugeMessage  大数据标识。
    * messageOffset  消息偏移量。
    * messageId  消息ID。
    * appId  应用ID。
    * tag  消息标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
            'partition' => 'getPartition',
            'key' => 'getKey',
            'value' => 'getValue',
            'size' => 'getSize',
            'timestamp' => 'getTimestamp',
            'hugeMessage' => 'getHugeMessage',
            'messageOffset' => 'getMessageOffset',
            'messageId' => 'getMessageId',
            'appId' => 'getAppId',
            'tag' => 'getTag'
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
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['hugeMessage'] = isset($data['hugeMessage']) ? $data['hugeMessage'] : null;
        $this->container['messageOffset'] = isset($data['messageOffset']) ? $data['messageOffset'] : null;
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
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
    *  Topic名称。
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
    * @param string|null $topic Topic名称。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets partition
    *  消息所在的分区。
    *
    * @return int|null
    */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
    * Sets partition
    *
    * @param int|null $partition 消息所在的分区。
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets key
    *  消息key。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 消息key。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  消息内容。
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 消息内容。
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets size
    *  消息大小。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 消息大小。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets timestamp
    *  生产消息的时间。 格式为Unix时间戳。单位为毫秒。
    *
    * @return int|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int|null $timestamp 生产消息的时间。 格式为Unix时间戳。单位为毫秒。
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets hugeMessage
    *  大数据标识。
    *
    * @return bool|null
    */
    public function getHugeMessage()
    {
        return $this->container['hugeMessage'];
    }

    /**
    * Sets hugeMessage
    *
    * @param bool|null $hugeMessage 大数据标识。
    *
    * @return $this
    */
    public function setHugeMessage($hugeMessage)
    {
        $this->container['hugeMessage'] = $hugeMessage;
        return $this;
    }

    /**
    * Gets messageOffset
    *  消息偏移量。
    *
    * @return int|null
    */
    public function getMessageOffset()
    {
        return $this->container['messageOffset'];
    }

    /**
    * Sets messageOffset
    *
    * @param int|null $messageOffset 消息偏移量。
    *
    * @return $this
    */
    public function setMessageOffset($messageOffset)
    {
        $this->container['messageOffset'] = $messageOffset;
        return $this;
    }

    /**
    * Gets messageId
    *  消息ID。
    *
    * @return string|null
    */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
    * Sets messageId
    *
    * @param string|null $messageId 消息ID。
    *
    * @return $this
    */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;
        return $this;
    }

    /**
    * Gets appId
    *  应用ID。
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用ID。
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets tag
    *  消息标签。
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 消息标签。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
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

