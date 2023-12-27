<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LineageRelation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LineageRelation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fromEntityId  血缘来源
    * relationshipId  关系id
    * toEntityId  血缘流向
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fromEntityId' => 'string',
            'relationshipId' => 'string',
            'toEntityId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fromEntityId  血缘来源
    * relationshipId  关系id
    * toEntityId  血缘流向
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fromEntityId' => null,
        'relationshipId' => null,
        'toEntityId' => null
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
    * fromEntityId  血缘来源
    * relationshipId  关系id
    * toEntityId  血缘流向
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fromEntityId' => 'from_entity_id',
            'relationshipId' => 'relationship_id',
            'toEntityId' => 'to_entity_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fromEntityId  血缘来源
    * relationshipId  关系id
    * toEntityId  血缘流向
    *
    * @var string[]
    */
    protected static $setters = [
            'fromEntityId' => 'setFromEntityId',
            'relationshipId' => 'setRelationshipId',
            'toEntityId' => 'setToEntityId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fromEntityId  血缘来源
    * relationshipId  关系id
    * toEntityId  血缘流向
    *
    * @var string[]
    */
    protected static $getters = [
            'fromEntityId' => 'getFromEntityId',
            'relationshipId' => 'getRelationshipId',
            'toEntityId' => 'getToEntityId'
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
        $this->container['fromEntityId'] = isset($data['fromEntityId']) ? $data['fromEntityId'] : null;
        $this->container['relationshipId'] = isset($data['relationshipId']) ? $data['relationshipId'] : null;
        $this->container['toEntityId'] = isset($data['toEntityId']) ? $data['toEntityId'] : null;
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
    * Gets fromEntityId
    *  血缘来源
    *
    * @return string|null
    */
    public function getFromEntityId()
    {
        return $this->container['fromEntityId'];
    }

    /**
    * Sets fromEntityId
    *
    * @param string|null $fromEntityId 血缘来源
    *
    * @return $this
    */
    public function setFromEntityId($fromEntityId)
    {
        $this->container['fromEntityId'] = $fromEntityId;
        return $this;
    }

    /**
    * Gets relationshipId
    *  关系id
    *
    * @return string|null
    */
    public function getRelationshipId()
    {
        return $this->container['relationshipId'];
    }

    /**
    * Sets relationshipId
    *
    * @param string|null $relationshipId 关系id
    *
    * @return $this
    */
    public function setRelationshipId($relationshipId)
    {
        $this->container['relationshipId'] = $relationshipId;
        return $this;
    }

    /**
    * Gets toEntityId
    *  血缘流向
    *
    * @return string|null
    */
    public function getToEntityId()
    {
        return $this->container['toEntityId'];
    }

    /**
    * Sets toEntityId
    *
    * @param string|null $toEntityId 血缘流向
    *
    * @return $this
    */
    public function setToEntityId($toEntityId)
    {
        $this->container['toEntityId'] = $toEntityId;
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

