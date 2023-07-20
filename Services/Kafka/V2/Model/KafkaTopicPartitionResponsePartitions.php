<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KafkaTopicPartitionResponsePartitions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KafkaTopicPartitionResponse_partitions';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * partition  分区ID
    * startOffset  起始偏移量
    * lastOffset  最后偏移量
    * messageCount  分区消息数
    * lastUpdateTime  最近更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'partition' => 'int',
            'startOffset' => 'int',
            'lastOffset' => 'int',
            'messageCount' => 'int',
            'lastUpdateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * partition  分区ID
    * startOffset  起始偏移量
    * lastOffset  最后偏移量
    * messageCount  分区消息数
    * lastUpdateTime  最近更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'partition' => 'int32',
        'startOffset' => 'int64',
        'lastOffset' => 'int64',
        'messageCount' => 'int64',
        'lastUpdateTime' => 'int64'
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
    * partition  分区ID
    * startOffset  起始偏移量
    * lastOffset  最后偏移量
    * messageCount  分区消息数
    * lastUpdateTime  最近更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'partition' => 'partition',
            'startOffset' => 'start_offset',
            'lastOffset' => 'last_offset',
            'messageCount' => 'message_count',
            'lastUpdateTime' => 'last_update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * partition  分区ID
    * startOffset  起始偏移量
    * lastOffset  最后偏移量
    * messageCount  分区消息数
    * lastUpdateTime  最近更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'partition' => 'setPartition',
            'startOffset' => 'setStartOffset',
            'lastOffset' => 'setLastOffset',
            'messageCount' => 'setMessageCount',
            'lastUpdateTime' => 'setLastUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * partition  分区ID
    * startOffset  起始偏移量
    * lastOffset  最后偏移量
    * messageCount  分区消息数
    * lastUpdateTime  最近更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'partition' => 'getPartition',
            'startOffset' => 'getStartOffset',
            'lastOffset' => 'getLastOffset',
            'messageCount' => 'getMessageCount',
            'lastUpdateTime' => 'getLastUpdateTime'
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
        $this->container['startOffset'] = isset($data['startOffset']) ? $data['startOffset'] : null;
        $this->container['lastOffset'] = isset($data['lastOffset']) ? $data['lastOffset'] : null;
        $this->container['messageCount'] = isset($data['messageCount']) ? $data['messageCount'] : null;
        $this->container['lastUpdateTime'] = isset($data['lastUpdateTime']) ? $data['lastUpdateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['partition']) && ($this->container['partition'] > 100)) {
                $invalidProperties[] = "invalid value for 'partition', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['partition']) && ($this->container['partition'] < 0)) {
                $invalidProperties[] = "invalid value for 'partition', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startOffset']) && ($this->container['startOffset'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startOffset', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startOffset']) && ($this->container['startOffset'] < 0)) {
                $invalidProperties[] = "invalid value for 'startOffset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastOffset']) && ($this->container['lastOffset'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastOffset', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastOffset']) && ($this->container['lastOffset'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastOffset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['messageCount']) && ($this->container['messageCount'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'messageCount', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['messageCount']) && ($this->container['messageCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'messageCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastUpdateTime']) && ($this->container['lastUpdateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['lastUpdateTime']) && ($this->container['lastUpdateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'lastUpdateTime', must be bigger than or equal to 0.";
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
    * Gets partition
    *  分区ID
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
    * @param int|null $partition 分区ID
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets startOffset
    *  起始偏移量
    *
    * @return int|null
    */
    public function getStartOffset()
    {
        return $this->container['startOffset'];
    }

    /**
    * Sets startOffset
    *
    * @param int|null $startOffset 起始偏移量
    *
    * @return $this
    */
    public function setStartOffset($startOffset)
    {
        $this->container['startOffset'] = $startOffset;
        return $this;
    }

    /**
    * Gets lastOffset
    *  最后偏移量
    *
    * @return int|null
    */
    public function getLastOffset()
    {
        return $this->container['lastOffset'];
    }

    /**
    * Sets lastOffset
    *
    * @param int|null $lastOffset 最后偏移量
    *
    * @return $this
    */
    public function setLastOffset($lastOffset)
    {
        $this->container['lastOffset'] = $lastOffset;
        return $this;
    }

    /**
    * Gets messageCount
    *  分区消息数
    *
    * @return int|null
    */
    public function getMessageCount()
    {
        return $this->container['messageCount'];
    }

    /**
    * Sets messageCount
    *
    * @param int|null $messageCount 分区消息数
    *
    * @return $this
    */
    public function setMessageCount($messageCount)
    {
        $this->container['messageCount'] = $messageCount;
        return $this;
    }

    /**
    * Gets lastUpdateTime
    *  最近更新时间
    *
    * @return int|null
    */
    public function getLastUpdateTime()
    {
        return $this->container['lastUpdateTime'];
    }

    /**
    * Sets lastUpdateTime
    *
    * @param int|null $lastUpdateTime 最近更新时间
    *
    * @return $this
    */
    public function setLastUpdateTime($lastUpdateTime)
    {
        $this->container['lastUpdateTime'] = $lastUpdateTime;
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

