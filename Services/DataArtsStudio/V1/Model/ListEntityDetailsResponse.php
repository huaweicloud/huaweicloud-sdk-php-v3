<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListEntityDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListEntityDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * entities  资产信息列表。
    * referredEntities  关联资产信息，结构体Map<String, Entity>。key：资产guid，value：资产信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'entities' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity[]',
            'referredEntities' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * entities  资产信息列表。
    * referredEntities  关联资产信息，结构体Map<String, Entity>。key：资产guid，value：资产信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'entities' => null,
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
    * entities  资产信息列表。
    * referredEntities  关联资产信息，结构体Map<String, Entity>。key：资产guid，value：资产信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'entities' => 'entities',
            'referredEntities' => 'referred_entities'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * entities  资产信息列表。
    * referredEntities  关联资产信息，结构体Map<String, Entity>。key：资产guid，value：资产信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'entities' => 'setEntities',
            'referredEntities' => 'setReferredEntities'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * entities  资产信息列表。
    * referredEntities  关联资产信息，结构体Map<String, Entity>。key：资产guid，value：资产信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'entities' => 'getEntities',
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
        $this->container['entities'] = isset($data['entities']) ? $data['entities'] : null;
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
    * Gets entities
    *  资产信息列表。
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
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Entity[]|null $entities 资产信息列表。
    *
    * @return $this
    */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;
        return $this;
    }

    /**
    * Gets referredEntities
    *  关联资产信息，结构体Map<String, Entity>。key：资产guid，value：资产信息。
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
    * @param object|null $referredEntities 关联资产信息，结构体Map<String, Entity>。key：资产guid，value：资产信息。
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

