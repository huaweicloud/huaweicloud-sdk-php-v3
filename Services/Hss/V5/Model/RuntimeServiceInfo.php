<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuntimeServiceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuntimeServiceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * runtimeType  **参数解释** 运行时类型 **取值范围** - docker：docker运行时。 - containerd：containerd运行时。 - podman：podman运行时。 - isulad：isulad运行时。 - crio：crio运行时。 - unknown：未知运行时。
    * runtimeVersion  **参数解释** 运行时版本 **取值范围** 字符长度0-128
    * storageDriver  **参数解释** 运行时存储驱动数组 **取值范围** 数组范围0-20
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'runtimeType' => 'string',
            'runtimeVersion' => 'string',
            'storageDriver' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * runtimeType  **参数解释** 运行时类型 **取值范围** - docker：docker运行时。 - containerd：containerd运行时。 - podman：podman运行时。 - isulad：isulad运行时。 - crio：crio运行时。 - unknown：未知运行时。
    * runtimeVersion  **参数解释** 运行时版本 **取值范围** 字符长度0-128
    * storageDriver  **参数解释** 运行时存储驱动数组 **取值范围** 数组范围0-20
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'runtimeType' => null,
        'runtimeVersion' => null,
        'storageDriver' => null
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
    * runtimeType  **参数解释** 运行时类型 **取值范围** - docker：docker运行时。 - containerd：containerd运行时。 - podman：podman运行时。 - isulad：isulad运行时。 - crio：crio运行时。 - unknown：未知运行时。
    * runtimeVersion  **参数解释** 运行时版本 **取值范围** 字符长度0-128
    * storageDriver  **参数解释** 运行时存储驱动数组 **取值范围** 数组范围0-20
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'runtimeType' => 'runtime_type',
            'runtimeVersion' => 'runtime_version',
            'storageDriver' => 'storage_driver'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * runtimeType  **参数解释** 运行时类型 **取值范围** - docker：docker运行时。 - containerd：containerd运行时。 - podman：podman运行时。 - isulad：isulad运行时。 - crio：crio运行时。 - unknown：未知运行时。
    * runtimeVersion  **参数解释** 运行时版本 **取值范围** 字符长度0-128
    * storageDriver  **参数解释** 运行时存储驱动数组 **取值范围** 数组范围0-20
    *
    * @var string[]
    */
    protected static $setters = [
            'runtimeType' => 'setRuntimeType',
            'runtimeVersion' => 'setRuntimeVersion',
            'storageDriver' => 'setStorageDriver'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * runtimeType  **参数解释** 运行时类型 **取值范围** - docker：docker运行时。 - containerd：containerd运行时。 - podman：podman运行时。 - isulad：isulad运行时。 - crio：crio运行时。 - unknown：未知运行时。
    * runtimeVersion  **参数解释** 运行时版本 **取值范围** 字符长度0-128
    * storageDriver  **参数解释** 运行时存储驱动数组 **取值范围** 数组范围0-20
    *
    * @var string[]
    */
    protected static $getters = [
            'runtimeType' => 'getRuntimeType',
            'runtimeVersion' => 'getRuntimeVersion',
            'storageDriver' => 'getStorageDriver'
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
        $this->container['runtimeType'] = isset($data['runtimeType']) ? $data['runtimeType'] : null;
        $this->container['runtimeVersion'] = isset($data['runtimeVersion']) ? $data['runtimeVersion'] : null;
        $this->container['storageDriver'] = isset($data['storageDriver']) ? $data['storageDriver'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['runtimeType']) && (mb_strlen($this->container['runtimeType']) > 128)) {
                $invalidProperties[] = "invalid value for 'runtimeType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['runtimeType']) && (mb_strlen($this->container['runtimeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'runtimeType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['runtimeVersion']) && (mb_strlen($this->container['runtimeVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'runtimeVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['runtimeVersion']) && (mb_strlen($this->container['runtimeVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'runtimeVersion', the character length must be bigger than or equal to 0.";
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
    * Gets runtimeType
    *  **参数解释** 运行时类型 **取值范围** - docker：docker运行时。 - containerd：containerd运行时。 - podman：podman运行时。 - isulad：isulad运行时。 - crio：crio运行时。 - unknown：未知运行时。
    *
    * @return string|null
    */
    public function getRuntimeType()
    {
        return $this->container['runtimeType'];
    }

    /**
    * Sets runtimeType
    *
    * @param string|null $runtimeType **参数解释** 运行时类型 **取值范围** - docker：docker运行时。 - containerd：containerd运行时。 - podman：podman运行时。 - isulad：isulad运行时。 - crio：crio运行时。 - unknown：未知运行时。
    *
    * @return $this
    */
    public function setRuntimeType($runtimeType)
    {
        $this->container['runtimeType'] = $runtimeType;
        return $this;
    }

    /**
    * Gets runtimeVersion
    *  **参数解释** 运行时版本 **取值范围** 字符长度0-128
    *
    * @return string|null
    */
    public function getRuntimeVersion()
    {
        return $this->container['runtimeVersion'];
    }

    /**
    * Sets runtimeVersion
    *
    * @param string|null $runtimeVersion **参数解释** 运行时版本 **取值范围** 字符长度0-128
    *
    * @return $this
    */
    public function setRuntimeVersion($runtimeVersion)
    {
        $this->container['runtimeVersion'] = $runtimeVersion;
        return $this;
    }

    /**
    * Gets storageDriver
    *  **参数解释** 运行时存储驱动数组 **取值范围** 数组范围0-20
    *
    * @return string[]|null
    */
    public function getStorageDriver()
    {
        return $this->container['storageDriver'];
    }

    /**
    * Sets storageDriver
    *
    * @param string[]|null $storageDriver **参数解释** 运行时存储驱动数组 **取值范围** 数组范围0-20
    *
    * @return $this
    */
    public function setStorageDriver($storageDriver)
    {
        $this->container['storageDriver'] = $storageDriver;
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

