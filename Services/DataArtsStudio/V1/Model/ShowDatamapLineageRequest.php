<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDatamapLineageRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDatamapLineageRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instance  实例id
    * guid  资产guid
    * direction  血缘查询方向，默认值:BOTH。枚举值[IN OUT BOTH]
    * relationshipTypes  关联关系类型列表，默认空
    * relationshipTypeCategories  关联关系类型类别，默认空。血缘查询使用DATA_FLOW
    * relatedEntityTypes  关联实体类型，默认空
    * extendProcessDataFlow  是否扩展数据，默认false
    * includeParentEntity  是否包含父类实体，默认false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instance' => 'string',
            'guid' => 'string',
            'direction' => 'string',
            'relationshipTypes' => 'string[]',
            'relationshipTypeCategories' => 'string[]',
            'relatedEntityTypes' => 'string[]',
            'extendProcessDataFlow' => 'bool',
            'includeParentEntity' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instance  实例id
    * guid  资产guid
    * direction  血缘查询方向，默认值:BOTH。枚举值[IN OUT BOTH]
    * relationshipTypes  关联关系类型列表，默认空
    * relationshipTypeCategories  关联关系类型类别，默认空。血缘查询使用DATA_FLOW
    * relatedEntityTypes  关联实体类型，默认空
    * extendProcessDataFlow  是否扩展数据，默认false
    * includeParentEntity  是否包含父类实体，默认false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instance' => null,
        'guid' => null,
        'direction' => null,
        'relationshipTypes' => null,
        'relationshipTypeCategories' => null,
        'relatedEntityTypes' => null,
        'extendProcessDataFlow' => null,
        'includeParentEntity' => null
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
    * instance  实例id
    * guid  资产guid
    * direction  血缘查询方向，默认值:BOTH。枚举值[IN OUT BOTH]
    * relationshipTypes  关联关系类型列表，默认空
    * relationshipTypeCategories  关联关系类型类别，默认空。血缘查询使用DATA_FLOW
    * relatedEntityTypes  关联实体类型，默认空
    * extendProcessDataFlow  是否扩展数据，默认false
    * includeParentEntity  是否包含父类实体，默认false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instance' => 'instance',
            'guid' => 'guid',
            'direction' => 'direction',
            'relationshipTypes' => 'relationship_types',
            'relationshipTypeCategories' => 'relationship_type_categories',
            'relatedEntityTypes' => 'related_entity_types',
            'extendProcessDataFlow' => 'extend_process_data_flow',
            'includeParentEntity' => 'include_parent_entity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instance  实例id
    * guid  资产guid
    * direction  血缘查询方向，默认值:BOTH。枚举值[IN OUT BOTH]
    * relationshipTypes  关联关系类型列表，默认空
    * relationshipTypeCategories  关联关系类型类别，默认空。血缘查询使用DATA_FLOW
    * relatedEntityTypes  关联实体类型，默认空
    * extendProcessDataFlow  是否扩展数据，默认false
    * includeParentEntity  是否包含父类实体，默认false
    *
    * @var string[]
    */
    protected static $setters = [
            'instance' => 'setInstance',
            'guid' => 'setGuid',
            'direction' => 'setDirection',
            'relationshipTypes' => 'setRelationshipTypes',
            'relationshipTypeCategories' => 'setRelationshipTypeCategories',
            'relatedEntityTypes' => 'setRelatedEntityTypes',
            'extendProcessDataFlow' => 'setExtendProcessDataFlow',
            'includeParentEntity' => 'setIncludeParentEntity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instance  实例id
    * guid  资产guid
    * direction  血缘查询方向，默认值:BOTH。枚举值[IN OUT BOTH]
    * relationshipTypes  关联关系类型列表，默认空
    * relationshipTypeCategories  关联关系类型类别，默认空。血缘查询使用DATA_FLOW
    * relatedEntityTypes  关联实体类型，默认空
    * extendProcessDataFlow  是否扩展数据，默认false
    * includeParentEntity  是否包含父类实体，默认false
    *
    * @var string[]
    */
    protected static $getters = [
            'instance' => 'getInstance',
            'guid' => 'getGuid',
            'direction' => 'getDirection',
            'relationshipTypes' => 'getRelationshipTypes',
            'relationshipTypeCategories' => 'getRelationshipTypeCategories',
            'relatedEntityTypes' => 'getRelatedEntityTypes',
            'extendProcessDataFlow' => 'getExtendProcessDataFlow',
            'includeParentEntity' => 'getIncludeParentEntity'
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
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['relationshipTypes'] = isset($data['relationshipTypes']) ? $data['relationshipTypes'] : null;
        $this->container['relationshipTypeCategories'] = isset($data['relationshipTypeCategories']) ? $data['relationshipTypeCategories'] : null;
        $this->container['relatedEntityTypes'] = isset($data['relatedEntityTypes']) ? $data['relatedEntityTypes'] : null;
        $this->container['extendProcessDataFlow'] = isset($data['extendProcessDataFlow']) ? $data['extendProcessDataFlow'] : null;
        $this->container['includeParentEntity'] = isset($data['includeParentEntity']) ? $data['includeParentEntity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instance'] === null) {
            $invalidProperties[] = "'instance' can't be null";
        }
            if ((mb_strlen($this->container['instance']) > 36)) {
                $invalidProperties[] = "invalid value for 'instance', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instance']) < 32)) {
                $invalidProperties[] = "invalid value for 'instance', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['guid'] === null) {
            $invalidProperties[] = "'guid' can't be null";
        }
            if ((mb_strlen($this->container['guid']) > 36)) {
                $invalidProperties[] = "invalid value for 'guid', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['guid']) < 32)) {
                $invalidProperties[] = "invalid value for 'guid', the character length must be bigger than or equal to 32.";
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
    * Gets instance
    *  实例id
    *
    * @return string
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param string $instance 实例id
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
        return $this;
    }

    /**
    * Gets guid
    *  资产guid
    *
    * @return string
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string $guid 资产guid
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets direction
    *  血缘查询方向，默认值:BOTH。枚举值[IN OUT BOTH]
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 血缘查询方向，默认值:BOTH。枚举值[IN OUT BOTH]
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets relationshipTypes
    *  关联关系类型列表，默认空
    *
    * @return string[]|null
    */
    public function getRelationshipTypes()
    {
        return $this->container['relationshipTypes'];
    }

    /**
    * Sets relationshipTypes
    *
    * @param string[]|null $relationshipTypes 关联关系类型列表，默认空
    *
    * @return $this
    */
    public function setRelationshipTypes($relationshipTypes)
    {
        $this->container['relationshipTypes'] = $relationshipTypes;
        return $this;
    }

    /**
    * Gets relationshipTypeCategories
    *  关联关系类型类别，默认空。血缘查询使用DATA_FLOW
    *
    * @return string[]|null
    */
    public function getRelationshipTypeCategories()
    {
        return $this->container['relationshipTypeCategories'];
    }

    /**
    * Sets relationshipTypeCategories
    *
    * @param string[]|null $relationshipTypeCategories 关联关系类型类别，默认空。血缘查询使用DATA_FLOW
    *
    * @return $this
    */
    public function setRelationshipTypeCategories($relationshipTypeCategories)
    {
        $this->container['relationshipTypeCategories'] = $relationshipTypeCategories;
        return $this;
    }

    /**
    * Gets relatedEntityTypes
    *  关联实体类型，默认空
    *
    * @return string[]|null
    */
    public function getRelatedEntityTypes()
    {
        return $this->container['relatedEntityTypes'];
    }

    /**
    * Sets relatedEntityTypes
    *
    * @param string[]|null $relatedEntityTypes 关联实体类型，默认空
    *
    * @return $this
    */
    public function setRelatedEntityTypes($relatedEntityTypes)
    {
        $this->container['relatedEntityTypes'] = $relatedEntityTypes;
        return $this;
    }

    /**
    * Gets extendProcessDataFlow
    *  是否扩展数据，默认false
    *
    * @return bool|null
    */
    public function getExtendProcessDataFlow()
    {
        return $this->container['extendProcessDataFlow'];
    }

    /**
    * Sets extendProcessDataFlow
    *
    * @param bool|null $extendProcessDataFlow 是否扩展数据，默认false
    *
    * @return $this
    */
    public function setExtendProcessDataFlow($extendProcessDataFlow)
    {
        $this->container['extendProcessDataFlow'] = $extendProcessDataFlow;
        return $this;
    }

    /**
    * Gets includeParentEntity
    *  是否包含父类实体，默认false
    *
    * @return bool|null
    */
    public function getIncludeParentEntity()
    {
        return $this->container['includeParentEntity'];
    }

    /**
    * Sets includeParentEntity
    *
    * @param bool|null $includeParentEntity 是否包含父类实体，默认false
    *
    * @return $this
    */
    public function setIncludeParentEntity($includeParentEntity)
    {
        $this->container['includeParentEntity'] = $includeParentEntity;
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

