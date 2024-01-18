<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDatamapLineageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDatamapLineageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * total  查询命中总条数
    * relationships  关系列表
    * relationshipTypes  关系类型
    * entities  资产信息
    * entityTypes  实体类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'total' => 'float',
            'relationships' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Lineage[]',
            'relationshipTypes' => 'object',
            'entities' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity[]',
            'entityTypes' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * total  查询命中总条数
    * relationships  关系列表
    * relationshipTypes  关系类型
    * entities  资产信息
    * entityTypes  实体类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'total' => null,
        'relationships' => null,
        'relationshipTypes' => null,
        'entities' => null,
        'entityTypes' => null
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
    * total  查询命中总条数
    * relationships  关系列表
    * relationshipTypes  关系类型
    * entities  资产信息
    * entityTypes  实体类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'total' => 'total',
            'relationships' => 'relationships',
            'relationshipTypes' => 'relationship_types',
            'entities' => 'entities',
            'entityTypes' => 'entity_types'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * total  查询命中总条数
    * relationships  关系列表
    * relationshipTypes  关系类型
    * entities  资产信息
    * entityTypes  实体类型
    *
    * @var string[]
    */
    protected static $setters = [
            'total' => 'setTotal',
            'relationships' => 'setRelationships',
            'relationshipTypes' => 'setRelationshipTypes',
            'entities' => 'setEntities',
            'entityTypes' => 'setEntityTypes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * total  查询命中总条数
    * relationships  关系列表
    * relationshipTypes  关系类型
    * entities  资产信息
    * entityTypes  实体类型
    *
    * @var string[]
    */
    protected static $getters = [
            'total' => 'getTotal',
            'relationships' => 'getRelationships',
            'relationshipTypes' => 'getRelationshipTypes',
            'entities' => 'getEntities',
            'entityTypes' => 'getEntityTypes'
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
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['relationships'] = isset($data['relationships']) ? $data['relationships'] : null;
        $this->container['relationshipTypes'] = isset($data['relationshipTypes']) ? $data['relationshipTypes'] : null;
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
        $this->container['entityTypes'] = isset($data['entityTypes']) ? $data['entityTypes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['total']) && ($this->container['total'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
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
    * Gets total
    *  查询命中总条数
    *
    * @return float|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param float|null $total 查询命中总条数
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets relationships
    *  关系列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Lineage[]|null
    */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
    * Sets relationships
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Lineage[]|null $relationships 关系列表
    *
    * @return $this
    */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;
        return $this;
    }

    /**
    * Gets relationshipTypes
    *  关系类型
    *
    * @return object|null
    */
    public function getRelationshipTypes()
    {
        return $this->container['relationshipTypes'];
    }

    /**
    * Sets relationshipTypes
    *
    * @param object|null $relationshipTypes 关系类型
    *
    * @return $this
    */
    public function setRelationshipTypes($relationshipTypes)
    {
        $this->container['relationshipTypes'] = $relationshipTypes;
        return $this;
    }

    /**
    * Gets entities
    *  资产信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity[]|null
    */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
    * Sets entities
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity[]|null $entities 资产信息
    *
    * @return $this
    */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;
        return $this;
    }

    /**
    * Gets entityTypes
    *  实体类型
    *
    * @return object|null
    */
    public function getEntityTypes()
    {
        return $this->container['entityTypes'];
    }

    /**
    * Sets entityTypes
    *
    * @param object|null $entityTypes 实体类型
    *
    * @return $this
    */
    public function setEntityTypes($entityTypes)
    {
        $this->container['entityTypes'] = $entityTypes;
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

