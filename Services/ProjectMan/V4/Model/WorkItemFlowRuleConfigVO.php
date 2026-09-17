<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemFlowRuleConfigVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemFlowRuleConfigVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  规则编码
    * open  规则开关
    * configValue  字段配置值列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'open' => 'bool',
            'configValue' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowFieldConfigVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  规则编码
    * open  规则开关
    * configValue  字段配置值列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'open' => null,
        'configValue' => null
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
    * code  规则编码
    * open  规则开关
    * configValue  字段配置值列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'open' => 'open',
            'configValue' => 'config_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  规则编码
    * open  规则开关
    * configValue  字段配置值列表
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'open' => 'setOpen',
            'configValue' => 'setConfigValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  规则编码
    * open  规则开关
    * configValue  字段配置值列表
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'open' => 'getOpen',
            'configValue' => 'getConfigValue'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['open'] = isset($data['open']) ? $data['open'] : null;
        $this->container['configValue'] = isset($data['configValue']) ? $data['configValue'] : null;
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
    * Gets code
    *  规则编码
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 规则编码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets open
    *  规则开关
    *
    * @return bool|null
    */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
    * Sets open
    *
    * @param bool|null $open 规则开关
    *
    * @return $this
    */
    public function setOpen($open)
    {
        $this->container['open'] = $open;
        return $this;
    }

    /**
    * Gets configValue
    *  字段配置值列表
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowFieldConfigVO[]|null
    */
    public function getConfigValue()
    {
        return $this->container['configValue'];
    }

    /**
    * Sets configValue
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkItemFlowFieldConfigVO[]|null $configValue 字段配置值列表
    *
    * @return $this
    */
    public function setConfigValue($configValue)
    {
        $this->container['configValue'] = $configValue;
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

