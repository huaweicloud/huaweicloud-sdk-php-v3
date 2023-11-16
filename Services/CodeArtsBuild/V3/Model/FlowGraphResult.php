<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowGraphResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowGraph_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edges  edges
    * vertices  record信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edges' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\FlowGraphResultEdges[]',
            'vertices' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Vertices[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edges  edges
    * vertices  record信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edges' => null,
        'vertices' => null
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
    * edges  edges
    * vertices  record信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edges' => 'edges',
            'vertices' => 'vertices'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edges  edges
    * vertices  record信息
    *
    * @var string[]
    */
    protected static $setters = [
            'edges' => 'setEdges',
            'vertices' => 'setVertices'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edges  edges
    * vertices  record信息
    *
    * @var string[]
    */
    protected static $getters = [
            'edges' => 'getEdges',
            'vertices' => 'getVertices'
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
        $this->container['edges'] = isset($data['edges']) ? $data['edges'] : null;
        $this->container['vertices'] = isset($data['vertices']) ? $data['vertices'] : null;
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
    * Gets edges
    *  edges
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\FlowGraphResultEdges[]|null
    */
    public function getEdges()
    {
        return $this->container['edges'];
    }

    /**
    * Sets edges
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\FlowGraphResultEdges[]|null $edges edges
    *
    * @return $this
    */
    public function setEdges($edges)
    {
        $this->container['edges'] = $edges;
        return $this;
    }

    /**
    * Gets vertices
    *  record信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Vertices[]|null
    */
    public function getVertices()
    {
        return $this->container['vertices'];
    }

    /**
    * Sets vertices
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Vertices[]|null $vertices record信息
    *
    * @return $this
    */
    public function setVertices($vertices)
    {
        $this->container['vertices'] = $vertices;
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

