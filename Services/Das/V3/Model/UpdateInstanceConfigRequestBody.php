<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateInstanceConfigRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateInstanceConfigRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configType  配置类型。取值范围：metaLockWaitThreshold, innodbLockWaitThreshold
    * configValue  配置的数值
    * engineType  数据库引擎类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configType' => 'string',
            'configValue' => 'string',
            'engineType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configType  配置类型。取值范围：metaLockWaitThreshold, innodbLockWaitThreshold
    * configValue  配置的数值
    * engineType  数据库引擎类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configType' => null,
        'configValue' => null,
        'engineType' => null
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
    * configType  配置类型。取值范围：metaLockWaitThreshold, innodbLockWaitThreshold
    * configValue  配置的数值
    * engineType  数据库引擎类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configType' => 'config_type',
            'configValue' => 'config_value',
            'engineType' => 'engine_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configType  配置类型。取值范围：metaLockWaitThreshold, innodbLockWaitThreshold
    * configValue  配置的数值
    * engineType  数据库引擎类型
    *
    * @var string[]
    */
    protected static $setters = [
            'configType' => 'setConfigType',
            'configValue' => 'setConfigValue',
            'engineType' => 'setEngineType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configType  配置类型。取值范围：metaLockWaitThreshold, innodbLockWaitThreshold
    * configValue  配置的数值
    * engineType  数据库引擎类型
    *
    * @var string[]
    */
    protected static $getters = [
            'configType' => 'getConfigType',
            'configValue' => 'getConfigValue',
            'engineType' => 'getEngineType'
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
        $this->container['configType'] = isset($data['configType']) ? $data['configType'] : null;
        $this->container['configValue'] = isset($data['configValue']) ? $data['configValue'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['configType'] === null) {
            $invalidProperties[] = "'configType' can't be null";
        }
        if ($this->container['configValue'] === null) {
            $invalidProperties[] = "'configValue' can't be null";
        }
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
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
    * Gets configType
    *  配置类型。取值范围：metaLockWaitThreshold, innodbLockWaitThreshold
    *
    * @return string
    */
    public function getConfigType()
    {
        return $this->container['configType'];
    }

    /**
    * Sets configType
    *
    * @param string $configType 配置类型。取值范围：metaLockWaitThreshold, innodbLockWaitThreshold
    *
    * @return $this
    */
    public function setConfigType($configType)
    {
        $this->container['configType'] = $configType;
        return $this;
    }

    /**
    * Gets configValue
    *  配置的数值
    *
    * @return string
    */
    public function getConfigValue()
    {
        return $this->container['configValue'];
    }

    /**
    * Sets configValue
    *
    * @param string $configValue 配置的数值
    *
    * @return $this
    */
    public function setConfigValue($configValue)
    {
        $this->container['configValue'] = $configValue;
        return $this;
    }

    /**
    * Gets engineType
    *  数据库引擎类型
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 数据库引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
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

