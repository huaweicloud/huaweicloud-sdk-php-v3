<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  检查参数名称
    * cfgKey  检查参数对应的key值
    * defaultValue  检查参数默认值
    * optionValue  检查参数可选项
    * isRequired  0：非必填，1：必填
    * description  检查参数说明
    * type  参数类型，0：文本，2：有可选项
    * status  参数状态，on：启用，off：未启用
    * value  检查参数值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'cfgKey' => 'string',
            'defaultValue' => 'string',
            'optionValue' => 'string',
            'isRequired' => 'int',
            'description' => 'string',
            'type' => 'int',
            'status' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  检查参数名称
    * cfgKey  检查参数对应的key值
    * defaultValue  检查参数默认值
    * optionValue  检查参数可选项
    * isRequired  0：非必填，1：必填
    * description  检查参数说明
    * type  参数类型，0：文本，2：有可选项
    * status  参数状态，on：启用，off：未启用
    * value  检查参数值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'cfgKey' => null,
        'defaultValue' => null,
        'optionValue' => null,
        'isRequired' => null,
        'description' => null,
        'type' => null,
        'status' => null,
        'value' => null
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
    * name  检查参数名称
    * cfgKey  检查参数对应的key值
    * defaultValue  检查参数默认值
    * optionValue  检查参数可选项
    * isRequired  0：非必填，1：必填
    * description  检查参数说明
    * type  参数类型，0：文本，2：有可选项
    * status  参数状态，on：启用，off：未启用
    * value  检查参数值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'cfgKey' => 'cfg_key',
            'defaultValue' => 'default_value',
            'optionValue' => 'option_value',
            'isRequired' => 'is_required',
            'description' => 'description',
            'type' => 'type',
            'status' => 'status',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  检查参数名称
    * cfgKey  检查参数对应的key值
    * defaultValue  检查参数默认值
    * optionValue  检查参数可选项
    * isRequired  0：非必填，1：必填
    * description  检查参数说明
    * type  参数类型，0：文本，2：有可选项
    * status  参数状态，on：启用，off：未启用
    * value  检查参数值
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'cfgKey' => 'setCfgKey',
            'defaultValue' => 'setDefaultValue',
            'optionValue' => 'setOptionValue',
            'isRequired' => 'setIsRequired',
            'description' => 'setDescription',
            'type' => 'setType',
            'status' => 'setStatus',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  检查参数名称
    * cfgKey  检查参数对应的key值
    * defaultValue  检查参数默认值
    * optionValue  检查参数可选项
    * isRequired  0：非必填，1：必填
    * description  检查参数说明
    * type  参数类型，0：文本，2：有可选项
    * status  参数状态，on：启用，off：未启用
    * value  检查参数值
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'cfgKey' => 'getCfgKey',
            'defaultValue' => 'getDefaultValue',
            'optionValue' => 'getOptionValue',
            'isRequired' => 'getIsRequired',
            'description' => 'getDescription',
            'type' => 'getType',
            'status' => 'getStatus',
            'value' => 'getValue'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cfgKey'] = isset($data['cfgKey']) ? $data['cfgKey'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['optionValue'] = isset($data['optionValue']) ? $data['optionValue'] : null;
        $this->container['isRequired'] = isset($data['isRequired']) ? $data['isRequired'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
    * Gets name
    *  检查参数名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 检查参数名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets cfgKey
    *  检查参数对应的key值
    *
    * @return string|null
    */
    public function getCfgKey()
    {
        return $this->container['cfgKey'];
    }

    /**
    * Sets cfgKey
    *
    * @param string|null $cfgKey 检查参数对应的key值
    *
    * @return $this
    */
    public function setCfgKey($cfgKey)
    {
        $this->container['cfgKey'] = $cfgKey;
        return $this;
    }

    /**
    * Gets defaultValue
    *  检查参数默认值
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue 检查参数默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets optionValue
    *  检查参数可选项
    *
    * @return string|null
    */
    public function getOptionValue()
    {
        return $this->container['optionValue'];
    }

    /**
    * Sets optionValue
    *
    * @param string|null $optionValue 检查参数可选项
    *
    * @return $this
    */
    public function setOptionValue($optionValue)
    {
        $this->container['optionValue'] = $optionValue;
        return $this;
    }

    /**
    * Gets isRequired
    *  0：非必填，1：必填
    *
    * @return int|null
    */
    public function getIsRequired()
    {
        return $this->container['isRequired'];
    }

    /**
    * Sets isRequired
    *
    * @param int|null $isRequired 0：非必填，1：必填
    *
    * @return $this
    */
    public function setIsRequired($isRequired)
    {
        $this->container['isRequired'] = $isRequired;
        return $this;
    }

    /**
    * Gets description
    *  检查参数说明
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 检查参数说明
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  参数类型，0：文本，2：有可选项
    *
    * @return int|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int|null $type 参数类型，0：文本，2：有可选项
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  参数状态，on：启用，off：未启用
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 参数状态，on：启用，off：未启用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets value
    *  检查参数值
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 检查参数值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

