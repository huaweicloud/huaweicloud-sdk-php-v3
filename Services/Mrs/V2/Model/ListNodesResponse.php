<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListNodesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListNodesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodes  节点列表。
    * nodeTotal  节点数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodes' => '\HuaweiCloud\SDK\Mrs\V2\Model\ClusterNode[]',
            'nodeTotal' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodes  节点列表。
    * nodeTotal  节点数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodes' => null,
        'nodeTotal' => 'int32'
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
    * nodes  节点列表。
    * nodeTotal  节点数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodes' => 'nodes',
            'nodeTotal' => 'node_total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodes  节点列表。
    * nodeTotal  节点数。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodes' => 'setNodes',
            'nodeTotal' => 'setNodeTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodes  节点列表。
    * nodeTotal  节点数。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodes' => 'getNodes',
            'nodeTotal' => 'getNodeTotal'
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
        $this->container['nodeTotal'] = isset($data['nodeTotal']) ? $data['nodeTotal'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nodeTotal']) && ($this->container['nodeTotal'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodeTotal', must be bigger than or equal to 0.";
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
    *  节点列表。
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\ClusterNode[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\ClusterNode[]|null $nodes 节点列表。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets nodeTotal
    *  节点数。
    *
    * @return int|null
    */
    public function getNodeTotal()
    {
        return $this->container['nodeTotal'];
    }

    /**
    * Sets nodeTotal
    *
    * @param int|null $nodeTotal 节点数。
    *
    * @return $this
    */
    public function setNodeTotal($nodeTotal)
    {
        $this->container['nodeTotal'] = $nodeTotal;
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

