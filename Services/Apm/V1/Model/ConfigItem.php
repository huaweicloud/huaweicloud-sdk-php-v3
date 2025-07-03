<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configName  配置项名称。
    * configValue  配置项值。
    * shouldOverride  是否重写。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configName' => 'string',
            'configValue' => 'string',
            'shouldOverride' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configName  配置项名称。
    * configValue  配置项值。
    * shouldOverride  是否重写。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configName' => null,
        'configValue' => null,
        'shouldOverride' => null
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
    * configName  配置项名称。
    * configValue  配置项值。
    * shouldOverride  是否重写。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configName' => 'config_name',
            'configValue' => 'config_value',
            'shouldOverride' => 'should_override'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configName  配置项名称。
    * configValue  配置项值。
    * shouldOverride  是否重写。
    *
    * @var string[]
    */
    protected static $setters = [
            'configName' => 'setConfigName',
            'configValue' => 'setConfigValue',
            'shouldOverride' => 'setShouldOverride'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configName  配置项名称。
    * configValue  配置项值。
    * shouldOverride  是否重写。
    *
    * @var string[]
    */
    protected static $getters = [
            'configName' => 'getConfigName',
            'configValue' => 'getConfigValue',
            'shouldOverride' => 'getShouldOverride'
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
        $this->container['configName'] = isset($data['configName']) ? $data['configName'] : null;
        $this->container['configValue'] = isset($data['configValue']) ? $data['configValue'] : null;
        $this->container['shouldOverride'] = isset($data['shouldOverride']) ? $data['shouldOverride'] : null;
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
    * Gets configName
    *  配置项名称。
    *
    * @return string|null
    */
    public function getConfigName()
    {
        return $this->container['configName'];
    }

    /**
    * Sets configName
    *
    * @param string|null $configName 配置项名称。
    *
    * @return $this
    */
    public function setConfigName($configName)
    {
        $this->container['configName'] = $configName;
        return $this;
    }

    /**
    * Gets configValue
    *  配置项值。
    *
    * @return string|null
    */
    public function getConfigValue()
    {
        return $this->container['configValue'];
    }

    /**
    * Sets configValue
    *
    * @param string|null $configValue 配置项值。
    *
    * @return $this
    */
    public function setConfigValue($configValue)
    {
        $this->container['configValue'] = $configValue;
        return $this;
    }

    /**
    * Gets shouldOverride
    *  是否重写。
    *
    * @return bool|null
    */
    public function getShouldOverride()
    {
        return $this->container['shouldOverride'];
    }

    /**
    * Sets shouldOverride
    *
    * @param bool|null $shouldOverride 是否重写。
    *
    * @return $this
    */
    public function setShouldOverride($shouldOverride)
    {
        $this->container['shouldOverride'] = $shouldOverride;
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

