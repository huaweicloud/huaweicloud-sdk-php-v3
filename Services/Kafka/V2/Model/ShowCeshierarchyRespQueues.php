<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCeshierarchyRespQueues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCeshierarchyResp_queues';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  Topic名称。
    * partitions  分区列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'partitions' => '\HuaweiCloud\SDK\Kafka\V2\Model\ShowCeshierarchyRespPartitions[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  Topic名称。
    * partitions  分区列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'partitions' => null
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
    * name  Topic名称。
    * partitions  分区列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'partitions' => 'partitions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  Topic名称。
    * partitions  分区列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'partitions' => 'setPartitions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  Topic名称。
    * partitions  分区列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'partitions' => 'getPartitions'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['partitions'] = isset($data['partitions']) ? $data['partitions'] : null;
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
    * Gets name
    *  Topic名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name Topic名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets partitions
    *  分区列表。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ShowCeshierarchyRespPartitions[]|null
    */
    public function getPartitions()
    {
        return $this->container['partitions'];
    }

    /**
    * Sets partitions
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ShowCeshierarchyRespPartitions[]|null $partitions 分区列表。
    *
    * @return $this
    */
    public function setPartitions($partitions)
    {
        $this->container['partitions'] = $partitions;
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

