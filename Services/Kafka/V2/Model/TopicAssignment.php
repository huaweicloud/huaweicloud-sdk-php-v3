<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TopicAssignment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TopicAssignment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * partition  手动指定分配方案时的分区号。
    * partitionBrokers  手动指定某个分区将要分配的broker列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'partition' => 'int',
            'partitionBrokers' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * partition  手动指定分配方案时的分区号。
    * partitionBrokers  手动指定某个分区将要分配的broker列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'partition' => 'int32',
        'partitionBrokers' => 'int32'
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
    * partition  手动指定分配方案时的分区号。
    * partitionBrokers  手动指定某个分区将要分配的broker列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'partition' => 'partition',
            'partitionBrokers' => 'partition_brokers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * partition  手动指定分配方案时的分区号。
    * partitionBrokers  手动指定某个分区将要分配的broker列表
    *
    * @var string[]
    */
    protected static $setters = [
            'partition' => 'setPartition',
            'partitionBrokers' => 'setPartitionBrokers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * partition  手动指定分配方案时的分区号。
    * partitionBrokers  手动指定某个分区将要分配的broker列表
    *
    * @var string[]
    */
    protected static $getters = [
            'partition' => 'getPartition',
            'partitionBrokers' => 'getPartitionBrokers'
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
        $this->container['partitionBrokers'] = isset($data['partitionBrokers']) ? $data['partitionBrokers'] : null;
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
    *  手动指定分配方案时的分区号。
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
    * @param int|null $partition 手动指定分配方案时的分区号。
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets partitionBrokers
    *  手动指定某个分区将要分配的broker列表
    *
    * @return int[]|null
    */
    public function getPartitionBrokers()
    {
        return $this->container['partitionBrokers'];
    }

    /**
    * Sets partitionBrokers
    *
    * @param int[]|null $partitionBrokers 手动指定某个分区将要分配的broker列表
    *
    * @return $this
    */
    public function setPartitionBrokers($partitionBrokers)
    {
        $this->container['partitionBrokers'] = $partitionBrokers;
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

