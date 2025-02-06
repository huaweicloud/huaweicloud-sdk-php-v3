<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlternateIdentifierDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlternateIdentifierDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * externalId  externalId
    * uniqueAttribute  uniqueAttribute
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'externalId' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ExternalIdDto',
            'uniqueAttribute' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\UniqueAttributeDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * externalId  externalId
    * uniqueAttribute  uniqueAttribute
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'externalId' => null,
        'uniqueAttribute' => null
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
    * externalId  externalId
    * uniqueAttribute  uniqueAttribute
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'externalId' => 'external_id',
            'uniqueAttribute' => 'unique_attribute'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * externalId  externalId
    * uniqueAttribute  uniqueAttribute
    *
    * @var string[]
    */
    protected static $setters = [
            'externalId' => 'setExternalId',
            'uniqueAttribute' => 'setUniqueAttribute'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * externalId  externalId
    * uniqueAttribute  uniqueAttribute
    *
    * @var string[]
    */
    protected static $getters = [
            'externalId' => 'getExternalId',
            'uniqueAttribute' => 'getUniqueAttribute'
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
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['uniqueAttribute'] = isset($data['uniqueAttribute']) ? $data['uniqueAttribute'] : null;
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
    * Gets externalId
    *  externalId
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ExternalIdDto|null
    */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
    * Sets externalId
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\ExternalIdDto|null $externalId externalId
    *
    * @return $this
    */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;
        return $this;
    }

    /**
    * Gets uniqueAttribute
    *  uniqueAttribute
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\UniqueAttributeDto|null
    */
    public function getUniqueAttribute()
    {
        return $this->container['uniqueAttribute'];
    }

    /**
    * Sets uniqueAttribute
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\UniqueAttributeDto|null $uniqueAttribute uniqueAttribute
    *
    * @return $this
    */
    public function setUniqueAttribute($uniqueAttribute)
    {
        $this->container['uniqueAttribute'] = $uniqueAttribute;
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

