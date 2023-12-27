<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLineageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLineageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baseEntityGuid  当前资产的guid
    * guidEntityMap  实体集合Map(String, OpenEntityHeader)
    * relations  血缘关系
    * referredEntities  相关实体集合Map(String, OpenEntity)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baseEntityGuid' => 'string',
            'guidEntityMap' => 'object',
            'relations' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\LineageRelation[]',
            'referredEntities' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baseEntityGuid  当前资产的guid
    * guidEntityMap  实体集合Map(String, OpenEntityHeader)
    * relations  血缘关系
    * referredEntities  相关实体集合Map(String, OpenEntity)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baseEntityGuid' => null,
        'guidEntityMap' => null,
        'relations' => null,
        'referredEntities' => null
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
    * baseEntityGuid  当前资产的guid
    * guidEntityMap  实体集合Map(String, OpenEntityHeader)
    * relations  血缘关系
    * referredEntities  相关实体集合Map(String, OpenEntity)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baseEntityGuid' => 'base_entity_guid',
            'guidEntityMap' => 'guid_entity_map',
            'relations' => 'relations',
            'referredEntities' => 'referred_entities'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baseEntityGuid  当前资产的guid
    * guidEntityMap  实体集合Map(String, OpenEntityHeader)
    * relations  血缘关系
    * referredEntities  相关实体集合Map(String, OpenEntity)
    *
    * @var string[]
    */
    protected static $setters = [
            'baseEntityGuid' => 'setBaseEntityGuid',
            'guidEntityMap' => 'setGuidEntityMap',
            'relations' => 'setRelations',
            'referredEntities' => 'setReferredEntities'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baseEntityGuid  当前资产的guid
    * guidEntityMap  实体集合Map(String, OpenEntityHeader)
    * relations  血缘关系
    * referredEntities  相关实体集合Map(String, OpenEntity)
    *
    * @var string[]
    */
    protected static $getters = [
            'baseEntityGuid' => 'getBaseEntityGuid',
            'guidEntityMap' => 'getGuidEntityMap',
            'relations' => 'getRelations',
            'referredEntities' => 'getReferredEntities'
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
        $this->container['baseEntityGuid'] = isset($data['baseEntityGuid']) ? $data['baseEntityGuid'] : null;
        $this->container['guidEntityMap'] = isset($data['guidEntityMap']) ? $data['guidEntityMap'] : null;
        $this->container['relations'] = isset($data['relations']) ? $data['relations'] : null;
        $this->container['referredEntities'] = isset($data['referredEntities']) ? $data['referredEntities'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['baseEntityGuid']) && (mb_strlen($this->container['baseEntityGuid']) > 36)) {
                $invalidProperties[] = "invalid value for 'baseEntityGuid', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['baseEntityGuid']) && (mb_strlen($this->container['baseEntityGuid']) < 32)) {
                $invalidProperties[] = "invalid value for 'baseEntityGuid', the character length must be bigger than or equal to 32.";
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
    * Gets baseEntityGuid
    *  当前资产的guid
    *
    * @return string|null
    */
    public function getBaseEntityGuid()
    {
        return $this->container['baseEntityGuid'];
    }

    /**
    * Sets baseEntityGuid
    *
    * @param string|null $baseEntityGuid 当前资产的guid
    *
    * @return $this
    */
    public function setBaseEntityGuid($baseEntityGuid)
    {
        $this->container['baseEntityGuid'] = $baseEntityGuid;
        return $this;
    }

    /**
    * Gets guidEntityMap
    *  实体集合Map(String, OpenEntityHeader)
    *
    * @return object|null
    */
    public function getGuidEntityMap()
    {
        return $this->container['guidEntityMap'];
    }

    /**
    * Sets guidEntityMap
    *
    * @param object|null $guidEntityMap 实体集合Map(String, OpenEntityHeader)
    *
    * @return $this
    */
    public function setGuidEntityMap($guidEntityMap)
    {
        $this->container['guidEntityMap'] = $guidEntityMap;
        return $this;
    }

    /**
    * Gets relations
    *  血缘关系
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\LineageRelation[]|null
    */
    public function getRelations()
    {
        return $this->container['relations'];
    }

    /**
    * Sets relations
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\LineageRelation[]|null $relations 血缘关系
    *
    * @return $this
    */
    public function setRelations($relations)
    {
        $this->container['relations'] = $relations;
        return $this;
    }

    /**
    * Gets referredEntities
    *  相关实体集合Map(String, OpenEntity)
    *
    * @return object|null
    */
    public function getReferredEntities()
    {
        return $this->container['referredEntities'];
    }

    /**
    * Sets referredEntities
    *
    * @param object|null $referredEntities 相关实体集合Map(String, OpenEntity)
    *
    * @return $this
    */
    public function setReferredEntities($referredEntities)
    {
        $this->container['referredEntities'] = $referredEntities;
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

