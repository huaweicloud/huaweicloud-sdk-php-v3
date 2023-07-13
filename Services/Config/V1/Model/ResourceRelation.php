<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceRelation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceRelation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * relationType  关系类型
    * fromResourceType  源资源类型
    * toResourceType  目的资源类型
    * fromResourceId  源资源ID
    * toResourceId  目的资源ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'relationType' => 'string',
            'fromResourceType' => 'string',
            'toResourceType' => 'string',
            'fromResourceId' => 'string',
            'toResourceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * relationType  关系类型
    * fromResourceType  源资源类型
    * toResourceType  目的资源类型
    * fromResourceId  源资源ID
    * toResourceId  目的资源ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'relationType' => null,
        'fromResourceType' => null,
        'toResourceType' => null,
        'fromResourceId' => null,
        'toResourceId' => null
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
    * relationType  关系类型
    * fromResourceType  源资源类型
    * toResourceType  目的资源类型
    * fromResourceId  源资源ID
    * toResourceId  目的资源ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'relationType' => 'relation_type',
            'fromResourceType' => 'from_resource_type',
            'toResourceType' => 'to_resource_type',
            'fromResourceId' => 'from_resource_id',
            'toResourceId' => 'to_resource_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * relationType  关系类型
    * fromResourceType  源资源类型
    * toResourceType  目的资源类型
    * fromResourceId  源资源ID
    * toResourceId  目的资源ID
    *
    * @var string[]
    */
    protected static $setters = [
            'relationType' => 'setRelationType',
            'fromResourceType' => 'setFromResourceType',
            'toResourceType' => 'setToResourceType',
            'fromResourceId' => 'setFromResourceId',
            'toResourceId' => 'setToResourceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * relationType  关系类型
    * fromResourceType  源资源类型
    * toResourceType  目的资源类型
    * fromResourceId  源资源ID
    * toResourceId  目的资源ID
    *
    * @var string[]
    */
    protected static $getters = [
            'relationType' => 'getRelationType',
            'fromResourceType' => 'getFromResourceType',
            'toResourceType' => 'getToResourceType',
            'fromResourceId' => 'getFromResourceId',
            'toResourceId' => 'getToResourceId'
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
        $this->container['relationType'] = isset($data['relationType']) ? $data['relationType'] : null;
        $this->container['fromResourceType'] = isset($data['fromResourceType']) ? $data['fromResourceType'] : null;
        $this->container['toResourceType'] = isset($data['toResourceType']) ? $data['toResourceType'] : null;
        $this->container['fromResourceId'] = isset($data['fromResourceId']) ? $data['fromResourceId'] : null;
        $this->container['toResourceId'] = isset($data['toResourceId']) ? $data['toResourceId'] : null;
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
    * Gets relationType
    *  关系类型
    *
    * @return string|null
    */
    public function getRelationType()
    {
        return $this->container['relationType'];
    }

    /**
    * Sets relationType
    *
    * @param string|null $relationType 关系类型
    *
    * @return $this
    */
    public function setRelationType($relationType)
    {
        $this->container['relationType'] = $relationType;
        return $this;
    }

    /**
    * Gets fromResourceType
    *  源资源类型
    *
    * @return string|null
    */
    public function getFromResourceType()
    {
        return $this->container['fromResourceType'];
    }

    /**
    * Sets fromResourceType
    *
    * @param string|null $fromResourceType 源资源类型
    *
    * @return $this
    */
    public function setFromResourceType($fromResourceType)
    {
        $this->container['fromResourceType'] = $fromResourceType;
        return $this;
    }

    /**
    * Gets toResourceType
    *  目的资源类型
    *
    * @return string|null
    */
    public function getToResourceType()
    {
        return $this->container['toResourceType'];
    }

    /**
    * Sets toResourceType
    *
    * @param string|null $toResourceType 目的资源类型
    *
    * @return $this
    */
    public function setToResourceType($toResourceType)
    {
        $this->container['toResourceType'] = $toResourceType;
        return $this;
    }

    /**
    * Gets fromResourceId
    *  源资源ID
    *
    * @return string|null
    */
    public function getFromResourceId()
    {
        return $this->container['fromResourceId'];
    }

    /**
    * Sets fromResourceId
    *
    * @param string|null $fromResourceId 源资源ID
    *
    * @return $this
    */
    public function setFromResourceId($fromResourceId)
    {
        $this->container['fromResourceId'] = $fromResourceId;
        return $this;
    }

    /**
    * Gets toResourceId
    *  目的资源ID
    *
    * @return string|null
    */
    public function getToResourceId()
    {
        return $this->container['toResourceId'];
    }

    /**
    * Sets toResourceId
    *
    * @param string|null $toResourceId 目的资源ID
    *
    * @return $this
    */
    public function setToResourceId($toResourceId)
    {
        $this->container['toResourceId'] = $toResourceId;
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

