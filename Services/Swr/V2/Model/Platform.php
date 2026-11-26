<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Platform implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Platform';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * architecture  制品适用的CPU架构。
    * os  制品适用的操作系统。
    * osVersion  制品适用的操作系统版本。
    * osFeatures  制品适用的操作系统特性。
    * variant  同一系列 CPU 下的细分型号，例如 Intel i5-13400、i5-13600 属于同代不同 variant。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'architecture' => 'string',
            'os' => 'string',
            'osVersion' => 'string',
            'osFeatures' => 'string[]',
            'variant' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * architecture  制品适用的CPU架构。
    * os  制品适用的操作系统。
    * osVersion  制品适用的操作系统版本。
    * osFeatures  制品适用的操作系统特性。
    * variant  同一系列 CPU 下的细分型号，例如 Intel i5-13400、i5-13600 属于同代不同 variant。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'architecture' => null,
        'os' => null,
        'osVersion' => null,
        'osFeatures' => null,
        'variant' => null
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
    * architecture  制品适用的CPU架构。
    * os  制品适用的操作系统。
    * osVersion  制品适用的操作系统版本。
    * osFeatures  制品适用的操作系统特性。
    * variant  同一系列 CPU 下的细分型号，例如 Intel i5-13400、i5-13600 属于同代不同 variant。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'architecture' => 'architecture',
            'os' => 'os',
            'osVersion' => 'os.version',
            'osFeatures' => 'os.features',
            'variant' => 'variant'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * architecture  制品适用的CPU架构。
    * os  制品适用的操作系统。
    * osVersion  制品适用的操作系统版本。
    * osFeatures  制品适用的操作系统特性。
    * variant  同一系列 CPU 下的细分型号，例如 Intel i5-13400、i5-13600 属于同代不同 variant。
    *
    * @var string[]
    */
    protected static $setters = [
            'architecture' => 'setArchitecture',
            'os' => 'setOs',
            'osVersion' => 'setOsVersion',
            'osFeatures' => 'setOsFeatures',
            'variant' => 'setVariant'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * architecture  制品适用的CPU架构。
    * os  制品适用的操作系统。
    * osVersion  制品适用的操作系统版本。
    * osFeatures  制品适用的操作系统特性。
    * variant  同一系列 CPU 下的细分型号，例如 Intel i5-13400、i5-13600 属于同代不同 variant。
    *
    * @var string[]
    */
    protected static $getters = [
            'architecture' => 'getArchitecture',
            'os' => 'getOs',
            'osVersion' => 'getOsVersion',
            'osFeatures' => 'getOsFeatures',
            'variant' => 'getVariant'
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
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['osFeatures'] = isset($data['osFeatures']) ? $data['osFeatures'] : null;
        $this->container['variant'] = isset($data['variant']) ? $data['variant'] : null;
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
    * Gets architecture
    *  制品适用的CPU架构。
    *
    * @return string|null
    */
    public function getArchitecture()
    {
        return $this->container['architecture'];
    }

    /**
    * Sets architecture
    *
    * @param string|null $architecture 制品适用的CPU架构。
    *
    * @return $this
    */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;
        return $this;
    }

    /**
    * Gets os
    *  制品适用的操作系统。
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os 制品适用的操作系统。
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets osVersion
    *  制品适用的操作系统版本。
    *
    * @return string|null
    */
    public function getOsVersion()
    {
        return $this->container['osVersion'];
    }

    /**
    * Sets osVersion
    *
    * @param string|null $osVersion 制品适用的操作系统版本。
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets osFeatures
    *  制品适用的操作系统特性。
    *
    * @return string[]|null
    */
    public function getOsFeatures()
    {
        return $this->container['osFeatures'];
    }

    /**
    * Sets osFeatures
    *
    * @param string[]|null $osFeatures 制品适用的操作系统特性。
    *
    * @return $this
    */
    public function setOsFeatures($osFeatures)
    {
        $this->container['osFeatures'] = $osFeatures;
        return $this;
    }

    /**
    * Gets variant
    *  同一系列 CPU 下的细分型号，例如 Intel i5-13400、i5-13600 属于同代不同 variant。
    *
    * @return string|null
    */
    public function getVariant()
    {
        return $this->container['variant'];
    }

    /**
    * Sets variant
    *
    * @param string|null $variant 同一系列 CPU 下的细分型号，例如 Intel i5-13400、i5-13600 属于同代不同 variant。
    *
    * @return $this
    */
    public function setVariant($variant)
    {
        $this->container['variant'] = $variant;
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

