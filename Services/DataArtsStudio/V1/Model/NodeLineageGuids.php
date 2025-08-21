<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeLineageGuids implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeLineageGuids';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * node  节点guid。
    * columnLineages  schema名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'node' => 'string',
            'columnLineages' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * node  节点guid。
    * columnLineages  schema名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'node' => null,
        'columnLineages' => null
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
    * node  节点guid。
    * columnLineages  schema名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'node' => 'node',
            'columnLineages' => 'column_lineages'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * node  节点guid。
    * columnLineages  schema名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'node' => 'setNode',
            'columnLineages' => 'setColumnLineages'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * node  节点guid。
    * columnLineages  schema名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'node' => 'getNode',
            'columnLineages' => 'getColumnLineages'
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
        $this->container['node'] = isset($data['node']) ? $data['node'] : null;
        $this->container['columnLineages'] = isset($data['columnLineages']) ? $data['columnLineages'] : null;
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
    * Gets node
    *  节点guid。
    *
    * @return string|null
    */
    public function getNode()
    {
        return $this->container['node'];
    }

    /**
    * Sets node
    *
    * @param string|null $node 节点guid。
    *
    * @return $this
    */
    public function setNode($node)
    {
        $this->container['node'] = $node;
        return $this;
    }

    /**
    * Gets columnLineages
    *  schema名称。
    *
    * @return string[]|null
    */
    public function getColumnLineages()
    {
        return $this->container['columnLineages'];
    }

    /**
    * Sets columnLineages
    *
    * @param string[]|null $columnLineages schema名称。
    *
    * @return $this
    */
    public function setColumnLineages($columnLineages)
    {
        $this->container['columnLineages'] = $columnLineages;
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

