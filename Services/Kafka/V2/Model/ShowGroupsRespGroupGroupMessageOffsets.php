<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGroupsRespGroupGroupMessageOffsets implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGroupsResp_group_group_message_offsets';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * partition  分区编号。
    * lag  剩余可消费消息数，即消息堆积数。
    * topic  topic名称。
    * messageCurrentOffset  当前消费进度。
    * messageLogEndOffset  最大消息位置（LEO）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'partition' => 'int',
            'lag' => 'int',
            'topic' => 'string',
            'messageCurrentOffset' => 'int',
            'messageLogEndOffset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * partition  分区编号。
    * lag  剩余可消费消息数，即消息堆积数。
    * topic  topic名称。
    * messageCurrentOffset  当前消费进度。
    * messageLogEndOffset  最大消息位置（LEO）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'partition' => null,
        'lag' => null,
        'topic' => null,
        'messageCurrentOffset' => null,
        'messageLogEndOffset' => null
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
    * partition  分区编号。
    * lag  剩余可消费消息数，即消息堆积数。
    * topic  topic名称。
    * messageCurrentOffset  当前消费进度。
    * messageLogEndOffset  最大消息位置（LEO）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'partition' => 'partition',
            'lag' => 'lag',
            'topic' => 'topic',
            'messageCurrentOffset' => 'message_current_offset',
            'messageLogEndOffset' => 'message_log_end_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * partition  分区编号。
    * lag  剩余可消费消息数，即消息堆积数。
    * topic  topic名称。
    * messageCurrentOffset  当前消费进度。
    * messageLogEndOffset  最大消息位置（LEO）。
    *
    * @var string[]
    */
    protected static $setters = [
            'partition' => 'setPartition',
            'lag' => 'setLag',
            'topic' => 'setTopic',
            'messageCurrentOffset' => 'setMessageCurrentOffset',
            'messageLogEndOffset' => 'setMessageLogEndOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * partition  分区编号。
    * lag  剩余可消费消息数，即消息堆积数。
    * topic  topic名称。
    * messageCurrentOffset  当前消费进度。
    * messageLogEndOffset  最大消息位置（LEO）。
    *
    * @var string[]
    */
    protected static $getters = [
            'partition' => 'getPartition',
            'lag' => 'getLag',
            'topic' => 'getTopic',
            'messageCurrentOffset' => 'getMessageCurrentOffset',
            'messageLogEndOffset' => 'getMessageLogEndOffset'
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
        $this->container['lag'] = isset($data['lag']) ? $data['lag'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['messageCurrentOffset'] = isset($data['messageCurrentOffset']) ? $data['messageCurrentOffset'] : null;
        $this->container['messageLogEndOffset'] = isset($data['messageLogEndOffset']) ? $data['messageLogEndOffset'] : null;
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
    *  分区编号。
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
    * @param int|null $partition 分区编号。
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets lag
    *  剩余可消费消息数，即消息堆积数。
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
    * @param int|null $lag 剩余可消费消息数，即消息堆积数。
    *
    * @return $this
    */
    public function setLag($lag)
    {
        $this->container['lag'] = $lag;
        return $this;
    }

    /**
    * Gets topic
    *  topic名称。
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
    * @param string|null $topic topic名称。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets messageCurrentOffset
    *  当前消费进度。
    *
    * @return int|null
    */
    public function getMessageCurrentOffset()
    {
        return $this->container['messageCurrentOffset'];
    }

    /**
    * Sets messageCurrentOffset
    *
    * @param int|null $messageCurrentOffset 当前消费进度。
    *
    * @return $this
    */
    public function setMessageCurrentOffset($messageCurrentOffset)
    {
        $this->container['messageCurrentOffset'] = $messageCurrentOffset;
        return $this;
    }

    /**
    * Gets messageLogEndOffset
    *  最大消息位置（LEO）。
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
    * @param int|null $messageLogEndOffset 最大消息位置（LEO）。
    *
    * @return $this
    */
    public function setMessageLogEndOffset($messageLogEndOffset)
    {
        $this->container['messageLogEndOffset'] = $messageLogEndOffset;
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

