<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LinksLinkconfigvalues implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'links_linkconfigvalues';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configs  连接配置参数数据结构，请参见configs参数说明。
    * extendedConfigs  extendedConfigs
    * validators  校验器
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configs' => '\HuaweiCloud\SDK\Cdm\V1\Model\Configs[]',
            'extendedConfigs' => '\HuaweiCloud\SDK\Cdm\V1\Model\LinksLinkconfigvaluesExtendedconfigs',
            'validators' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configs  连接配置参数数据结构，请参见configs参数说明。
    * extendedConfigs  extendedConfigs
    * validators  校验器
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configs' => null,
        'extendedConfigs' => null,
        'validators' => null
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
    * configs  连接配置参数数据结构，请参见configs参数说明。
    * extendedConfigs  extendedConfigs
    * validators  校验器
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configs' => 'configs',
            'extendedConfigs' => 'extended-configs',
            'validators' => 'validators'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configs  连接配置参数数据结构，请参见configs参数说明。
    * extendedConfigs  extendedConfigs
    * validators  校验器
    *
    * @var string[]
    */
    protected static $setters = [
            'configs' => 'setConfigs',
            'extendedConfigs' => 'setExtendedConfigs',
            'validators' => 'setValidators'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configs  连接配置参数数据结构，请参见configs参数说明。
    * extendedConfigs  extendedConfigs
    * validators  校验器
    *
    * @var string[]
    */
    protected static $getters = [
            'configs' => 'getConfigs',
            'extendedConfigs' => 'getExtendedConfigs',
            'validators' => 'getValidators'
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
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
        $this->container['extendedConfigs'] = isset($data['extendedConfigs']) ? $data['extendedConfigs'] : null;
        $this->container['validators'] = isset($data['validators']) ? $data['validators'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['configs'] === null) {
            $invalidProperties[] = "'configs' can't be null";
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
    * Gets configs
    *  连接配置参数数据结构，请参见configs参数说明。
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\Configs[]
    */
    public function getConfigs()
    {
        return $this->container['configs'];
    }

    /**
    * Sets configs
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\Configs[] $configs 连接配置参数数据结构，请参见configs参数说明。
    *
    * @return $this
    */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;
        return $this;
    }

    /**
    * Gets extendedConfigs
    *  extendedConfigs
    *
    * @return \HuaweiCloud\SDK\Cdm\V1\Model\LinksLinkconfigvaluesExtendedconfigs|null
    */
    public function getExtendedConfigs()
    {
        return $this->container['extendedConfigs'];
    }

    /**
    * Sets extendedConfigs
    *
    * @param \HuaweiCloud\SDK\Cdm\V1\Model\LinksLinkconfigvaluesExtendedconfigs|null $extendedConfigs extendedConfigs
    *
    * @return $this
    */
    public function setExtendedConfigs($extendedConfigs)
    {
        $this->container['extendedConfigs'] = $extendedConfigs;
        return $this;
    }

    /**
    * Gets validators
    *  校验器
    *
    * @return string[]|null
    */
    public function getValidators()
    {
        return $this->container['validators'];
    }

    /**
    * Sets validators
    *
    * @param string[]|null $validators 校验器
    *
    * @return $this
    */
    public function setValidators($validators)
    {
        $this->container['validators'] = $validators;
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

