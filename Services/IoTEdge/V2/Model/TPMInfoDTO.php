<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TPMInfoDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TPMInfoDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manufactureId  厂商信息
    * specVersion  协议版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manufactureId' => 'string',
            'specVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manufactureId  厂商信息
    * specVersion  协议版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manufactureId' => null,
        'specVersion' => null
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
    * manufactureId  厂商信息
    * specVersion  协议版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manufactureId' => 'manufacture_id',
            'specVersion' => 'spec_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manufactureId  厂商信息
    * specVersion  协议版本
    *
    * @var string[]
    */
    protected static $setters = [
            'manufactureId' => 'setManufactureId',
            'specVersion' => 'setSpecVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manufactureId  厂商信息
    * specVersion  协议版本
    *
    * @var string[]
    */
    protected static $getters = [
            'manufactureId' => 'getManufactureId',
            'specVersion' => 'getSpecVersion'
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
        $this->container['manufactureId'] = isset($data['manufactureId']) ? $data['manufactureId'] : null;
        $this->container['specVersion'] = isset($data['specVersion']) ? $data['specVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['manufactureId']) && (mb_strlen($this->container['manufactureId']) > 64)) {
                $invalidProperties[] = "invalid value for 'manufactureId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['manufactureId']) && (mb_strlen($this->container['manufactureId']) < 0)) {
                $invalidProperties[] = "invalid value for 'manufactureId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['specVersion']) && (mb_strlen($this->container['specVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'specVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['specVersion']) && (mb_strlen($this->container['specVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'specVersion', the character length must be bigger than or equal to 0.";
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
    * Gets manufactureId
    *  厂商信息
    *
    * @return string|null
    */
    public function getManufactureId()
    {
        return $this->container['manufactureId'];
    }

    /**
    * Sets manufactureId
    *
    * @param string|null $manufactureId 厂商信息
    *
    * @return $this
    */
    public function setManufactureId($manufactureId)
    {
        $this->container['manufactureId'] = $manufactureId;
        return $this;
    }

    /**
    * Gets specVersion
    *  协议版本
    *
    * @return string|null
    */
    public function getSpecVersion()
    {
        return $this->container['specVersion'];
    }

    /**
    * Sets specVersion
    *
    * @param string|null $specVersion 协议版本
    *
    * @return $this
    */
    public function setSpecVersion($specVersion)
    {
        $this->container['specVersion'] = $specVersion;
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

