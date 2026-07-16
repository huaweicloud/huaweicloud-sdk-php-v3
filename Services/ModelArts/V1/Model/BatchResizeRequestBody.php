<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchResizeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchResizeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodes  **参数解释**：扩缩容的超节点批次信息。 **约束限制**：单次最多50个超节点。
    * source  source
    * target  target
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodes' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ResizeNodeInfo[]',
            'source' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeResizeParams',
            'target' => '\HuaweiCloud\SDK\ModelArts\V1\Model\NodeResizeParams'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodes  **参数解释**：扩缩容的超节点批次信息。 **约束限制**：单次最多50个超节点。
    * source  source
    * target  target
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodes' => null,
        'source' => null,
        'target' => null
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
    * nodes  **参数解释**：扩缩容的超节点批次信息。 **约束限制**：单次最多50个超节点。
    * source  source
    * target  target
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodes' => 'nodes',
            'source' => 'source',
            'target' => 'target'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodes  **参数解释**：扩缩容的超节点批次信息。 **约束限制**：单次最多50个超节点。
    * source  source
    * target  target
    *
    * @var string[]
    */
    protected static $setters = [
            'nodes' => 'setNodes',
            'source' => 'setSource',
            'target' => 'setTarget'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodes  **参数解释**：扩缩容的超节点批次信息。 **约束限制**：单次最多50个超节点。
    * source  source
    * target  target
    *
    * @var string[]
    */
    protected static $getters = [
            'nodes' => 'getNodes',
            'source' => 'getSource',
            'target' => 'getTarget'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['target'] = isset($data['target']) ? $data['target'] : null;
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
        if ($this->container['source'] === null) {
            $invalidProperties[] = "'source' can't be null";
        }
        if ($this->container['target'] === null) {
            $invalidProperties[] = "'target' can't be null";
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
    *  **参数解释**：扩缩容的超节点批次信息。 **约束限制**：单次最多50个超节点。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ResizeNodeInfo[]
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ResizeNodeInfo[] $nodes **参数解释**：扩缩容的超节点批次信息。 **约束限制**：单次最多50个超节点。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeResizeParams
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeResizeParams $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets target
    *  target
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\NodeResizeParams
    */
    public function getTarget()
    {
        return $this->container['target'];
    }

    /**
    * Sets target
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\NodeResizeParams $target target
    *
    * @return $this
    */
    public function setTarget($target)
    {
        $this->container['target'] = $target;
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

