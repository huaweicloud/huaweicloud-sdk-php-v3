<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodePriority implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodePriority';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeSelector  nodeSelector
    * priority  该批次节点的优先级，默认值为0，优先级最低，数值越大优先级越高
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeSelector' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeSelector',
            'priority' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeSelector  nodeSelector
    * priority  该批次节点的优先级，默认值为0，优先级最低，数值越大优先级越高
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeSelector' => null,
        'priority' => null
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
    * nodeSelector  nodeSelector
    * priority  该批次节点的优先级，默认值为0，优先级最低，数值越大优先级越高
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeSelector' => 'nodeSelector',
            'priority' => 'priority'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeSelector  nodeSelector
    * priority  该批次节点的优先级，默认值为0，优先级最低，数值越大优先级越高
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeSelector' => 'setNodeSelector',
            'priority' => 'setPriority'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeSelector  nodeSelector
    * priority  该批次节点的优先级，默认值为0，优先级最低，数值越大优先级越高
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeSelector' => 'getNodeSelector',
            'priority' => 'getPriority'
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
        $this->container['nodeSelector'] = isset($data['nodeSelector']) ? $data['nodeSelector'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeSelector'] === null) {
            $invalidProperties[] = "'nodeSelector' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalidProperties[] = "'priority' can't be null";
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
    * Gets nodeSelector
    *  nodeSelector
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeSelector
    */
    public function getNodeSelector()
    {
        return $this->container['nodeSelector'];
    }

    /**
    * Sets nodeSelector
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeSelector $nodeSelector nodeSelector
    *
    * @return $this
    */
    public function setNodeSelector($nodeSelector)
    {
        $this->container['nodeSelector'] = $nodeSelector;
        return $this;
    }

    /**
    * Gets priority
    *  该批次节点的优先级，默认值为0，优先级最低，数值越大优先级越高
    *
    * @return int
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int $priority 该批次节点的优先级，默认值为0，优先级最低，数值越大优先级越高
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
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

