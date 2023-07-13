<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResetMessageOffsetReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResetMessageOffsetReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topic  topic名称。
    * partition  分区编号，默认值为-1，若传入值为-1，则重置所有分区。
    * messageOffset  重置消费进度到指定偏移量。 - 如果传入offset小于当前最小的offset，则重置到最小的offset。 - 如果大于最大的offset，则重置到最大的offset。  **message_offset、timestamp二者必选其一。**
    * timestamp  重置消费进度到指定时间，格式为unix时间戳，单位为毫秒。 - 如果传入timestamp早于当前最早的timestamp，则重置到最早的timestamp。 - 如果晚于最晚的timestamp，则重置到最晚的timestamp。  **message_offset、timestamp二者必选其一。**
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topic' => 'string',
            'partition' => 'int',
            'messageOffset' => 'int',
            'timestamp' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topic  topic名称。
    * partition  分区编号，默认值为-1，若传入值为-1，则重置所有分区。
    * messageOffset  重置消费进度到指定偏移量。 - 如果传入offset小于当前最小的offset，则重置到最小的offset。 - 如果大于最大的offset，则重置到最大的offset。  **message_offset、timestamp二者必选其一。**
    * timestamp  重置消费进度到指定时间，格式为unix时间戳，单位为毫秒。 - 如果传入timestamp早于当前最早的timestamp，则重置到最早的timestamp。 - 如果晚于最晚的timestamp，则重置到最晚的timestamp。  **message_offset、timestamp二者必选其一。**
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topic' => null,
        'partition' => null,
        'messageOffset' => null,
        'timestamp' => null
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
    * topic  topic名称。
    * partition  分区编号，默认值为-1，若传入值为-1，则重置所有分区。
    * messageOffset  重置消费进度到指定偏移量。 - 如果传入offset小于当前最小的offset，则重置到最小的offset。 - 如果大于最大的offset，则重置到最大的offset。  **message_offset、timestamp二者必选其一。**
    * timestamp  重置消费进度到指定时间，格式为unix时间戳，单位为毫秒。 - 如果传入timestamp早于当前最早的timestamp，则重置到最早的timestamp。 - 如果晚于最晚的timestamp，则重置到最晚的timestamp。  **message_offset、timestamp二者必选其一。**
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topic' => 'topic',
            'partition' => 'partition',
            'messageOffset' => 'message_offset',
            'timestamp' => 'timestamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topic  topic名称。
    * partition  分区编号，默认值为-1，若传入值为-1，则重置所有分区。
    * messageOffset  重置消费进度到指定偏移量。 - 如果传入offset小于当前最小的offset，则重置到最小的offset。 - 如果大于最大的offset，则重置到最大的offset。  **message_offset、timestamp二者必选其一。**
    * timestamp  重置消费进度到指定时间，格式为unix时间戳，单位为毫秒。 - 如果传入timestamp早于当前最早的timestamp，则重置到最早的timestamp。 - 如果晚于最晚的timestamp，则重置到最晚的timestamp。  **message_offset、timestamp二者必选其一。**
    *
    * @var string[]
    */
    protected static $setters = [
            'topic' => 'setTopic',
            'partition' => 'setPartition',
            'messageOffset' => 'setMessageOffset',
            'timestamp' => 'setTimestamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topic  topic名称。
    * partition  分区编号，默认值为-1，若传入值为-1，则重置所有分区。
    * messageOffset  重置消费进度到指定偏移量。 - 如果传入offset小于当前最小的offset，则重置到最小的offset。 - 如果大于最大的offset，则重置到最大的offset。  **message_offset、timestamp二者必选其一。**
    * timestamp  重置消费进度到指定时间，格式为unix时间戳，单位为毫秒。 - 如果传入timestamp早于当前最早的timestamp，则重置到最早的timestamp。 - 如果晚于最晚的timestamp，则重置到最晚的timestamp。  **message_offset、timestamp二者必选其一。**
    *
    * @var string[]
    */
    protected static $getters = [
            'topic' => 'getTopic',
            'partition' => 'getPartition',
            'messageOffset' => 'getMessageOffset',
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
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
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
    * Gets topic
    *  topic名称。
    *
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic topic名称。
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
    *  分区编号，默认值为-1，若传入值为-1，则重置所有分区。
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
    * @param int|null $partition 分区编号，默认值为-1，若传入值为-1，则重置所有分区。
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
    *  重置消费进度到指定偏移量。 - 如果传入offset小于当前最小的offset，则重置到最小的offset。 - 如果大于最大的offset，则重置到最大的offset。  **message_offset、timestamp二者必选其一。**
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
    * @param int|null $messageOffset 重置消费进度到指定偏移量。 - 如果传入offset小于当前最小的offset，则重置到最小的offset。 - 如果大于最大的offset，则重置到最大的offset。  **message_offset、timestamp二者必选其一。**
    *
    * @return $this
    */
    public function setMessageOffset($messageOffset)
    {
        $this->container['messageOffset'] = $messageOffset;
        return $this;
    }

    /**
    * Gets timestamp
    *  重置消费进度到指定时间，格式为unix时间戳，单位为毫秒。 - 如果传入timestamp早于当前最早的timestamp，则重置到最早的timestamp。 - 如果晚于最晚的timestamp，则重置到最晚的timestamp。  **message_offset、timestamp二者必选其一。**
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
    * @param int|null $timestamp 重置消费进度到指定时间，格式为unix时间戳，单位为毫秒。 - 如果传入timestamp早于当前最早的timestamp，则重置到最早的timestamp。 - 如果晚于最晚的timestamp，则重置到最晚的timestamp。  **message_offset、timestamp二者必选其一。**
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

