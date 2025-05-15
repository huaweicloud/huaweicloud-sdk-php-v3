<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AreaId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AreaId';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * areaId  areaId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'areaId' => '\HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * areaId  areaId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'areaId' => null
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
    * areaId  areaId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'areaId' => 'area_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * areaId  areaId
    *
    * @var string[]
    */
    protected static $setters = [
            'areaId' => 'setAreaId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * areaId  areaId
    *
    * @var string[]
    */
    protected static $getters = [
            'areaId' => 'getAreaId'
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
        $this->container['areaId'] = isset($data['areaId']) ? $data['areaId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['areaId'] === null) {
            $invalidProperties[] = "'areaId' can't be null";
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
    * Gets areaId
    *  areaId
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef
    */
    public function getAreaId()
    {
        return $this->container['areaId'];
    }

    /**
    * Sets areaId
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\AreaIdDef $areaId areaId
    *
    * @return $this
    */
    public function setAreaId($areaId)
    {
        $this->container['areaId'] = $areaId;
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

