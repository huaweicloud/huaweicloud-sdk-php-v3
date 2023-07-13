<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceTopicsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceTopicsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  topic总数。
    * size  分页查询的大小。
    * remainPartitions  剩余分区数。
    * maxPartitions  分区总数。
    * topics  topic列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'int',
            'size' => 'int',
            'remainPartitions' => 'int',
            'maxPartitions' => 'int',
            'topics' => '\HuaweiCloud\SDK\Kafka\V2\Model\TopicEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  topic总数。
    * size  分页查询的大小。
    * remainPartitions  剩余分区数。
    * maxPartitions  分区总数。
    * topics  topic列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => null,
        'size' => null,
        'remainPartitions' => null,
        'maxPartitions' => null,
        'topics' => null
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
    * total  topic总数。
    * size  分页查询的大小。
    * remainPartitions  剩余分区数。
    * maxPartitions  分区总数。
    * topics  topic列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'size' => 'size',
            'remainPartitions' => 'remain_partitions',
            'maxPartitions' => 'max_partitions',
            'topics' => 'topics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  topic总数。
    * size  分页查询的大小。
    * remainPartitions  剩余分区数。
    * maxPartitions  分区总数。
    * topics  topic列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'size' => 'setSize',
            'remainPartitions' => 'setRemainPartitions',
            'maxPartitions' => 'setMaxPartitions',
            'topics' => 'setTopics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  topic总数。
    * size  分页查询的大小。
    * remainPartitions  剩余分区数。
    * maxPartitions  分区总数。
    * topics  topic列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'size' => 'getSize',
            'remainPartitions' => 'getRemainPartitions',
            'maxPartitions' => 'getMaxPartitions',
            'topics' => 'getTopics'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['remainPartitions'] = isset($data['remainPartitions']) ? $data['remainPartitions'] : null;
        $this->container['maxPartitions'] = isset($data['maxPartitions']) ? $data['maxPartitions'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
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
    * Gets total
    *  topic总数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total topic总数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets size
    *  分页查询的大小。
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
    * @param int|null $size 分页查询的大小。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets remainPartitions
    *  剩余分区数。
    *
    * @return int|null
    */
    public function getRemainPartitions()
    {
        return $this->container['remainPartitions'];
    }

    /**
    * Sets remainPartitions
    *
    * @param int|null $remainPartitions 剩余分区数。
    *
    * @return $this
    */
    public function setRemainPartitions($remainPartitions)
    {
        $this->container['remainPartitions'] = $remainPartitions;
        return $this;
    }

    /**
    * Gets maxPartitions
    *  分区总数。
    *
    * @return int|null
    */
    public function getMaxPartitions()
    {
        return $this->container['maxPartitions'];
    }

    /**
    * Sets maxPartitions
    *
    * @param int|null $maxPartitions 分区总数。
    *
    * @return $this
    */
    public function setMaxPartitions($maxPartitions)
    {
        $this->container['maxPartitions'] = $maxPartitions;
        return $this;
    }

    /**
    * Gets topics
    *  topic列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\TopicEntity[]|null
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\TopicEntity[]|null $topics topic列表。
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
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

