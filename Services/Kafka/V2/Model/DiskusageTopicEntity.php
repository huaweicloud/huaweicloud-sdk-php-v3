<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiskusageTopicEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiskusageTopicEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * size  磁盘使用量。
    * topicName  Topic名称。
    * topicPartition  分区。
    * percentage  磁盘使用量的占比。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'size' => 'string',
            'topicName' => 'string',
            'topicPartition' => 'string',
            'percentage' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * size  磁盘使用量。
    * topicName  Topic名称。
    * topicPartition  分区。
    * percentage  磁盘使用量的占比。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'size' => null,
        'topicName' => null,
        'topicPartition' => null,
        'percentage' => 'double'
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
    * size  磁盘使用量。
    * topicName  Topic名称。
    * topicPartition  分区。
    * percentage  磁盘使用量的占比。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'size' => 'size',
            'topicName' => 'topic_name',
            'topicPartition' => 'topic_partition',
            'percentage' => 'percentage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * size  磁盘使用量。
    * topicName  Topic名称。
    * topicPartition  分区。
    * percentage  磁盘使用量的占比。
    *
    * @var string[]
    */
    protected static $setters = [
            'size' => 'setSize',
            'topicName' => 'setTopicName',
            'topicPartition' => 'setTopicPartition',
            'percentage' => 'setPercentage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * size  磁盘使用量。
    * topicName  Topic名称。
    * topicPartition  分区。
    * percentage  磁盘使用量的占比。
    *
    * @var string[]
    */
    protected static $getters = [
            'size' => 'getSize',
            'topicName' => 'getTopicName',
            'topicPartition' => 'getTopicPartition',
            'percentage' => 'getPercentage'
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
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['topicName'] = isset($data['topicName']) ? $data['topicName'] : null;
        $this->container['topicPartition'] = isset($data['topicPartition']) ? $data['topicPartition'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
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
    * Gets size
    *  磁盘使用量。
    *
    * @return string|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string|null $size 磁盘使用量。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets topicName
    *  Topic名称。
    *
    * @return string|null
    */
    public function getTopicName()
    {
        return $this->container['topicName'];
    }

    /**
    * Sets topicName
    *
    * @param string|null $topicName Topic名称。
    *
    * @return $this
    */
    public function setTopicName($topicName)
    {
        $this->container['topicName'] = $topicName;
        return $this;
    }

    /**
    * Gets topicPartition
    *  分区。
    *
    * @return string|null
    */
    public function getTopicPartition()
    {
        return $this->container['topicPartition'];
    }

    /**
    * Sets topicPartition
    *
    * @param string|null $topicPartition 分区。
    *
    * @return $this
    */
    public function setTopicPartition($topicPartition)
    {
        $this->container['topicPartition'] = $topicPartition;
        return $this;
    }

    /**
    * Gets percentage
    *  磁盘使用量的占比。
    *
    * @return double|null
    */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
    * Sets percentage
    *
    * @param double|null $percentage 磁盘使用量的占比。
    *
    * @return $this
    */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;
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

