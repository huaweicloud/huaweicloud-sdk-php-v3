<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LoadBalancerTopologyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LoadBalancerTopologyResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodes  nodes
    * edges  **参数解释**：拓扑边的信息
    * labels  labels
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodes' => '\HuaweiCloud\SDK\Elb\V3\Model\TopologyNodes',
            'edges' => '\HuaweiCloud\SDK\Elb\V3\Model\TopologyEdge[]',
            'labels' => '\HuaweiCloud\SDK\Elb\V3\Model\TopologyLabels'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodes  nodes
    * edges  **参数解释**：拓扑边的信息
    * labels  labels
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodes' => null,
        'edges' => null,
        'labels' => null
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
    * nodes  nodes
    * edges  **参数解释**：拓扑边的信息
    * labels  labels
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodes' => 'nodes',
            'edges' => 'edges',
            'labels' => 'labels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodes  nodes
    * edges  **参数解释**：拓扑边的信息
    * labels  labels
    *
    * @var string[]
    */
    protected static $setters = [
            'nodes' => 'setNodes',
            'edges' => 'setEdges',
            'labels' => 'setLabels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodes  nodes
    * edges  **参数解释**：拓扑边的信息
    * labels  labels
    *
    * @var string[]
    */
    protected static $getters = [
            'nodes' => 'getNodes',
            'edges' => 'getEdges',
            'labels' => 'getLabels'
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
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['edges'] = isset($data['edges']) ? $data['edges'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodes'] === null) {
            $invalidProperties[] = "'nodes' can't be null";
        }
        if ($this->container['edges'] === null) {
            $invalidProperties[] = "'edges' can't be null";
        }
        if ($this->container['labels'] === null) {
            $invalidProperties[] = "'labels' can't be null";
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
    * Gets nodes
    *  nodes
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\TopologyNodes
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\TopologyNodes $nodes nodes
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets edges
    *  **参数解释**：拓扑边的信息
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\TopologyEdge[]
    */
    public function getEdges()
    {
        return $this->container['edges'];
    }

    /**
    * Sets edges
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\TopologyEdge[] $edges **参数解释**：拓扑边的信息
    *
    * @return $this
    */
    public function setEdges($edges)
    {
        $this->container['edges'] = $edges;
        return $this;
    }

    /**
    * Gets labels
    *  labels
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\TopologyLabels
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\TopologyLabels $labels labels
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
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

