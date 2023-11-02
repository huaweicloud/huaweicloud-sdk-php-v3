<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AtlasClassificationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AtlasClassificationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * entityGuid  guid
    * propagate  是否传播
    * validityPeriods  时间信息
    * typeName  类型名称
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'entityGuid' => 'string',
            'propagate' => 'bool',
            'validityPeriods' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TimeBoundary[]',
            'typeName' => 'string',
            'attributes' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * entityGuid  guid
    * propagate  是否传播
    * validityPeriods  时间信息
    * typeName  类型名称
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'entityGuid' => null,
        'propagate' => null,
        'validityPeriods' => null,
        'typeName' => null,
        'attributes' => null
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
    * entityGuid  guid
    * propagate  是否传播
    * validityPeriods  时间信息
    * typeName  类型名称
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'entityGuid' => 'entity_guid',
            'propagate' => 'propagate',
            'validityPeriods' => 'validity_periods',
            'typeName' => 'type_name',
            'attributes' => 'attributes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * entityGuid  guid
    * propagate  是否传播
    * validityPeriods  时间信息
    * typeName  类型名称
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $setters = [
            'entityGuid' => 'setEntityGuid',
            'propagate' => 'setPropagate',
            'validityPeriods' => 'setValidityPeriods',
            'typeName' => 'setTypeName',
            'attributes' => 'setAttributes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * entityGuid  guid
    * propagate  是否传播
    * validityPeriods  时间信息
    * typeName  类型名称
    * attributes  实体map Map<String, Object>
    *
    * @var string[]
    */
    protected static $getters = [
            'entityGuid' => 'getEntityGuid',
            'propagate' => 'getPropagate',
            'validityPeriods' => 'getValidityPeriods',
            'typeName' => 'getTypeName',
            'attributes' => 'getAttributes'
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
        $this->container['entityGuid'] = isset($data['entityGuid']) ? $data['entityGuid'] : null;
        $this->container['propagate'] = isset($data['propagate']) ? $data['propagate'] : null;
        $this->container['validityPeriods'] = isset($data['validityPeriods']) ? $data['validityPeriods'] : null;
        $this->container['typeName'] = isset($data['typeName']) ? $data['typeName'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
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
    * Gets entityGuid
    *  guid
    *
    * @return string|null
    */
    public function getEntityGuid()
    {
        return $this->container['entityGuid'];
    }

    /**
    * Sets entityGuid
    *
    * @param string|null $entityGuid guid
    *
    * @return $this
    */
    public function setEntityGuid($entityGuid)
    {
        $this->container['entityGuid'] = $entityGuid;
        return $this;
    }

    /**
    * Gets propagate
    *  是否传播
    *
    * @return bool|null
    */
    public function getPropagate()
    {
        return $this->container['propagate'];
    }

    /**
    * Sets propagate
    *
    * @param bool|null $propagate 是否传播
    *
    * @return $this
    */
    public function setPropagate($propagate)
    {
        $this->container['propagate'] = $propagate;
        return $this;
    }

    /**
    * Gets validityPeriods
    *  时间信息
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TimeBoundary[]|null
    */
    public function getValidityPeriods()
    {
        return $this->container['validityPeriods'];
    }

    /**
    * Sets validityPeriods
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TimeBoundary[]|null $validityPeriods 时间信息
    *
    * @return $this
    */
    public function setValidityPeriods($validityPeriods)
    {
        $this->container['validityPeriods'] = $validityPeriods;
        return $this;
    }

    /**
    * Gets typeName
    *  类型名称
    *
    * @return string|null
    */
    public function getTypeName()
    {
        return $this->container['typeName'];
    }

    /**
    * Sets typeName
    *
    * @param string|null $typeName 类型名称
    *
    * @return $this
    */
    public function setTypeName($typeName)
    {
        $this->container['typeName'] = $typeName;
        return $this;
    }

    /**
    * Gets attributes
    *  实体map Map<String, Object>
    *
    * @return object|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param object|null $attributes 实体map Map<String, Object>
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
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

