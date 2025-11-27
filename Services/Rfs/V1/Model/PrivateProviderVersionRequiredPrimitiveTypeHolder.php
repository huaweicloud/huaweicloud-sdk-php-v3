<?php

namespace HuaweiCloud\SDK\Rfs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivateProviderVersionRequiredPrimitiveTypeHolder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivateProviderVersionRequiredPrimitiveTypeHolder';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'providerVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'providerVersion' => null
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
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'providerVersion' => 'provider_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @var string[]
    */
    protected static $setters = [
            'providerVersion' => 'setProviderVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * providerVersion  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @var string[]
    */
    protected static $getters = [
            'providerVersion' => 'getProviderVersion'
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
        $this->container['providerVersion'] = isset($data['providerVersion']) ? $data['providerVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['providerVersion'] === null) {
            $invalidProperties[] = "'providerVersion' can't be null";
        }
            if ((mb_strlen($this->container['providerVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'providerVersion', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['providerVersion']) < 5)) {
                $invalidProperties[] = "invalid value for 'providerVersion', the character length must be bigger than or equal to 5.";
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
    * Gets providerVersion
    *  provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @return string
    */
    public function getProviderVersion()
    {
        return $this->container['providerVersion'];
    }

    /**
    * Sets providerVersion
    *
    * @param string $providerVersion provider的版本号。版本号必须遵循语义化版本号（Semantic Version），为用户自定义
    *
    * @return $this
    */
    public function setProviderVersion($providerVersion)
    {
        $this->container['providerVersion'] = $providerVersion;
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

