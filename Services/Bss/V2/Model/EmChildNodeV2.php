<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EmChildNodeV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EmChildNodeV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relationId  实体关系ID。
    * id  节点ID（即组织单元的Party ID）。
    * name  节点名称。
    * childNodes  子节点列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relationId' => 'string',
            'id' => 'string',
            'name' => 'string',
            'childNodes' => '\HuaweiCloud\SDK\Bss\V2\Model\EmChildNodeV2[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relationId  实体关系ID。
    * id  节点ID（即组织单元的Party ID）。
    * name  节点名称。
    * childNodes  子节点列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relationId' => null,
        'id' => null,
        'name' => null,
        'childNodes' => null
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
    * relationId  实体关系ID。
    * id  节点ID（即组织单元的Party ID）。
    * name  节点名称。
    * childNodes  子节点列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relationId' => 'relation_id',
            'id' => 'id',
            'name' => 'name',
            'childNodes' => 'child_nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relationId  实体关系ID。
    * id  节点ID（即组织单元的Party ID）。
    * name  节点名称。
    * childNodes  子节点列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'relationId' => 'setRelationId',
            'id' => 'setId',
            'name' => 'setName',
            'childNodes' => 'setChildNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relationId  实体关系ID。
    * id  节点ID（即组织单元的Party ID）。
    * name  节点名称。
    * childNodes  子节点列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'relationId' => 'getRelationId',
            'id' => 'getId',
            'name' => 'getName',
            'childNodes' => 'getChildNodes'
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
        $this->container['relationId'] = isset($data['relationId']) ? $data['relationId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['childNodes'] = isset($data['childNodes']) ? $data['childNodes'] : null;
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
    * Gets relationId
    *  实体关系ID。
    *
    * @return string|null
    */
    public function getRelationId()
    {
        return $this->container['relationId'];
    }

    /**
    * Sets relationId
    *
    * @param string|null $relationId 实体关系ID。
    *
    * @return $this
    */
    public function setRelationId($relationId)
    {
        $this->container['relationId'] = $relationId;
        return $this;
    }

    /**
    * Gets id
    *  节点ID（即组织单元的Party ID）。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 节点ID（即组织单元的Party ID）。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  节点名称。
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
    * @param string|null $name 节点名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets childNodes
    *  子节点列表。
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\EmChildNodeV2[]|null
    */
    public function getChildNodes()
    {
        return $this->container['childNodes'];
    }

    /**
    * Sets childNodes
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\EmChildNodeV2[]|null $childNodes 子节点列表。
    *
    * @return $this
    */
    public function setChildNodes($childNodes)
    {
        $this->container['childNodes'] = $childNodes;
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

