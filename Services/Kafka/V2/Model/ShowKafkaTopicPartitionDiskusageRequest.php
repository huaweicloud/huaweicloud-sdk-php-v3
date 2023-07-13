<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowKafkaTopicPartitionDiskusageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowKafkaTopicPartitionDiskusageRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID。
    * minSize  占用磁盘大小，默认值1G (1K ,1M , 1G)。
    * top  占用磁盘大小，查询top N。
    * percentage  占用磁盘大小，查询大于占比的分区。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'minSize' => 'string',
            'top' => 'string',
            'percentage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID。
    * minSize  占用磁盘大小，默认值1G (1K ,1M , 1G)。
    * top  占用磁盘大小，查询top N。
    * percentage  占用磁盘大小，查询大于占比的分区。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'minSize' => null,
        'top' => null,
        'percentage' => null
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
    * instanceId  实例ID。
    * minSize  占用磁盘大小，默认值1G (1K ,1M , 1G)。
    * top  占用磁盘大小，查询top N。
    * percentage  占用磁盘大小，查询大于占比的分区。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'minSize' => 'minSize',
            'top' => 'top',
            'percentage' => 'percentage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID。
    * minSize  占用磁盘大小，默认值1G (1K ,1M , 1G)。
    * top  占用磁盘大小，查询top N。
    * percentage  占用磁盘大小，查询大于占比的分区。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'minSize' => 'setMinSize',
            'top' => 'setTop',
            'percentage' => 'setPercentage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID。
    * minSize  占用磁盘大小，默认值1G (1K ,1M , 1G)。
    * top  占用磁盘大小，查询top N。
    * percentage  占用磁盘大小，查询大于占比的分区。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'minSize' => 'getMinSize',
            'top' => 'getTop',
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['minSize'] = isset($data['minSize']) ? $data['minSize'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
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
    * Gets instanceId
    *  实例ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets minSize
    *  占用磁盘大小，默认值1G (1K ,1M , 1G)。
    *
    * @return string|null
    */
    public function getMinSize()
    {
        return $this->container['minSize'];
    }

    /**
    * Sets minSize
    *
    * @param string|null $minSize 占用磁盘大小，默认值1G (1K ,1M , 1G)。
    *
    * @return $this
    */
    public function setMinSize($minSize)
    {
        $this->container['minSize'] = $minSize;
        return $this;
    }

    /**
    * Gets top
    *  占用磁盘大小，查询top N。
    *
    * @return string|null
    */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
    * Sets top
    *
    * @param string|null $top 占用磁盘大小，查询top N。
    *
    * @return $this
    */
    public function setTop($top)
    {
        $this->container['top'] = $top;
        return $this;
    }

    /**
    * Gets percentage
    *  占用磁盘大小，查询大于占比的分区。
    *
    * @return string|null
    */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
    * Sets percentage
    *
    * @param string|null $percentage 占用磁盘大小，查询大于占比的分区。
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

