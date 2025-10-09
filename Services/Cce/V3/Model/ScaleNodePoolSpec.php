<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScaleNodePoolSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScaleNodePoolSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * desiredNodeCount  节点池期望节点数
    * scaleGroups  **参数解释**： 要扩缩容的节点池中的伸缩组名称[，通过[获取指定的节点池](cce_02_0355.xml)接口获取伸缩组名称](tag:hws) **约束限制**： 如果要伸缩默认伸缩组填\"default\" **取值范围**： 不涉及 **默认取值**： 不涉及
    * options  options
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'desiredNodeCount' => 'int',
            'scaleGroups' => 'string[]',
            'options' => '\HuaweiCloud\SDK\Cce\V3\Model\ScaleNodePoolOptions'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * desiredNodeCount  节点池期望节点数
    * scaleGroups  **参数解释**： 要扩缩容的节点池中的伸缩组名称[，通过[获取指定的节点池](cce_02_0355.xml)接口获取伸缩组名称](tag:hws) **约束限制**： 如果要伸缩默认伸缩组填\"default\" **取值范围**： 不涉及 **默认取值**： 不涉及
    * options  options
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'desiredNodeCount' => null,
        'scaleGroups' => null,
        'options' => null
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
    * desiredNodeCount  节点池期望节点数
    * scaleGroups  **参数解释**： 要扩缩容的节点池中的伸缩组名称[，通过[获取指定的节点池](cce_02_0355.xml)接口获取伸缩组名称](tag:hws) **约束限制**： 如果要伸缩默认伸缩组填\"default\" **取值范围**： 不涉及 **默认取值**： 不涉及
    * options  options
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'desiredNodeCount' => 'desiredNodeCount',
            'scaleGroups' => 'scaleGroups',
            'options' => 'options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * desiredNodeCount  节点池期望节点数
    * scaleGroups  **参数解释**： 要扩缩容的节点池中的伸缩组名称[，通过[获取指定的节点池](cce_02_0355.xml)接口获取伸缩组名称](tag:hws) **约束限制**： 如果要伸缩默认伸缩组填\"default\" **取值范围**： 不涉及 **默认取值**： 不涉及
    * options  options
    *
    * @var string[]
    */
    protected static $setters = [
            'desiredNodeCount' => 'setDesiredNodeCount',
            'scaleGroups' => 'setScaleGroups',
            'options' => 'setOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * desiredNodeCount  节点池期望节点数
    * scaleGroups  **参数解释**： 要扩缩容的节点池中的伸缩组名称[，通过[获取指定的节点池](cce_02_0355.xml)接口获取伸缩组名称](tag:hws) **约束限制**： 如果要伸缩默认伸缩组填\"default\" **取值范围**： 不涉及 **默认取值**： 不涉及
    * options  options
    *
    * @var string[]
    */
    protected static $getters = [
            'desiredNodeCount' => 'getDesiredNodeCount',
            'scaleGroups' => 'getScaleGroups',
            'options' => 'getOptions'
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
        $this->container['desiredNodeCount'] = isset($data['desiredNodeCount']) ? $data['desiredNodeCount'] : null;
        $this->container['scaleGroups'] = isset($data['scaleGroups']) ? $data['scaleGroups'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['desiredNodeCount'] === null) {
            $invalidProperties[] = "'desiredNodeCount' can't be null";
        }
        if ($this->container['scaleGroups'] === null) {
            $invalidProperties[] = "'scaleGroups' can't be null";
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
    * Gets desiredNodeCount
    *  节点池期望节点数
    *
    * @return int
    */
    public function getDesiredNodeCount()
    {
        return $this->container['desiredNodeCount'];
    }

    /**
    * Sets desiredNodeCount
    *
    * @param int $desiredNodeCount 节点池期望节点数
    *
    * @return $this
    */
    public function setDesiredNodeCount($desiredNodeCount)
    {
        $this->container['desiredNodeCount'] = $desiredNodeCount;
        return $this;
    }

    /**
    * Gets scaleGroups
    *  **参数解释**： 要扩缩容的节点池中的伸缩组名称[，通过[获取指定的节点池](cce_02_0355.xml)接口获取伸缩组名称](tag:hws) **约束限制**： 如果要伸缩默认伸缩组填\"default\" **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string[]
    */
    public function getScaleGroups()
    {
        return $this->container['scaleGroups'];
    }

    /**
    * Sets scaleGroups
    *
    * @param string[] $scaleGroups **参数解释**： 要扩缩容的节点池中的伸缩组名称[，通过[获取指定的节点池](cce_02_0355.xml)接口获取伸缩组名称](tag:hws) **约束限制**： 如果要伸缩默认伸缩组填\"default\" **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setScaleGroups($scaleGroups)
    {
        $this->container['scaleGroups'] = $scaleGroups;
        return $this;
    }

    /**
    * Gets options
    *  options
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ScaleNodePoolOptions|null
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ScaleNodePoolOptions|null $options options
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
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

