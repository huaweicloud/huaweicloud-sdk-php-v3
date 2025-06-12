<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMessagesRespMessages implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMessagesResp_messages';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  **参数解释**： Topic名称。 **取值范围**： 不涉及。
    * partition  **参数解释**： 分区编号。 **取值范围**： 不涉及。
    * messageOffset  **参数解释**： 消息编号。 **取值范围**： 不涉及。
    * size  **参数解释**： 消息大小，单位字节。 **取值范围**： 不涉及。
    * timestamp  **参数解释**： 生产消息的时间。 格式为Unix时间戳。单位为毫秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'partition' => 'int',
            'messageOffset' => 'int',
            'size' => 'int',
            'timestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  **参数解释**： Topic名称。 **取值范围**： 不涉及。
    * partition  **参数解释**： 分区编号。 **取值范围**： 不涉及。
    * messageOffset  **参数解释**： 消息编号。 **取值范围**： 不涉及。
    * size  **参数解释**： 消息大小，单位字节。 **取值范围**： 不涉及。
    * timestamp  **参数解释**： 生产消息的时间。 格式为Unix时间戳。单位为毫秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
        'partition' => null,
        'messageOffset' => 'int64',
        'size' => null,
        'timestamp' => 'int64'
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
    * topic  **参数解释**： Topic名称。 **取值范围**： 不涉及。
    * partition  **参数解释**： 分区编号。 **取值范围**： 不涉及。
    * messageOffset  **参数解释**： 消息编号。 **取值范围**： 不涉及。
    * size  **参数解释**： 消息大小，单位字节。 **取值范围**： 不涉及。
    * timestamp  **参数解释**： 生产消息的时间。 格式为Unix时间戳。单位为毫秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'partition' => 'partition',
            'messageOffset' => 'message_offset',
            'size' => 'size',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  **参数解释**： Topic名称。 **取值范围**： 不涉及。
    * partition  **参数解释**： 分区编号。 **取值范围**： 不涉及。
    * messageOffset  **参数解释**： 消息编号。 **取值范围**： 不涉及。
    * size  **参数解释**： 消息大小，单位字节。 **取值范围**： 不涉及。
    * timestamp  **参数解释**： 生产消息的时间。 格式为Unix时间戳。单位为毫秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'partition' => 'setPartition',
            'messageOffset' => 'setMessageOffset',
            'size' => 'setSize',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  **参数解释**： Topic名称。 **取值范围**： 不涉及。
    * partition  **参数解释**： 分区编号。 **取值范围**： 不涉及。
    * messageOffset  **参数解释**： 消息编号。 **取值范围**： 不涉及。
    * size  **参数解释**： 消息大小，单位字节。 **取值范围**： 不涉及。
    * timestamp  **参数解释**： 生产消息的时间。 格式为Unix时间戳。单位为毫秒。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
            'partition' => 'getPartition',
            'messageOffset' => 'getMessageOffset',
            'size' => 'getSize',
            'timestamp' => 'getTimestamp'
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
        $this->container['messageOffset'] = isset($data['messageOffset']) ? $data['messageOffset'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
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
    *  **参数解释**： Topic名称。 **取值范围**： 不涉及。
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
    * @param string|null $topic **参数解释**： Topic名称。 **取值范围**： 不涉及。
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
    *  **参数解释**： 分区编号。 **取值范围**： 不涉及。
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
    * @param int|null $partition **参数解释**： 分区编号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets messageOffset
    *  **参数解释**： 消息编号。 **取值范围**： 不涉及。
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
    * @param int|null $messageOffset **参数解释**： 消息编号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMessageOffset($messageOffset)
    {
        $this->container['messageOffset'] = $messageOffset;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**： 消息大小，单位字节。 **取值范围**： 不涉及。
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
    * @param int|null $size **参数解释**： 消息大小，单位字节。 **取值范围**： 不涉及。
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
    *  **参数解释**： 生产消息的时间。 格式为Unix时间戳。单位为毫秒。 **取值范围**： 不涉及。
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
    * @param int|null $timestamp **参数解释**： 生产消息的时间。 格式为Unix时间戳。单位为毫秒。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
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

