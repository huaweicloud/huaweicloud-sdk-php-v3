<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomFieldVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomFieldVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    * value  测试用例自定义字段值
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    * userName  user类型测试用例自定义字段对应用户名，其它类型字段不返回
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'value' => 'string',
            'customFieldParam' => 'string',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    * value  测试用例自定义字段值
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    * userName  user类型测试用例自定义字段对应用户名，其它类型字段不返回
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'value' => null,
        'customFieldParam' => null,
        'userName' => null
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
    * type  字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    * value  测试用例自定义字段值
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    * userName  user类型测试用例自定义字段对应用户名，其它类型字段不返回
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'value' => 'value',
            'customFieldParam' => 'custom_field_param',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    * value  测试用例自定义字段值
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    * userName  user类型测试用例自定义字段对应用户名，其它类型字段不返回
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'value' => 'setValue',
            'customFieldParam' => 'setCustomFieldParam',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    * value  测试用例自定义字段值
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    * userName  user类型测试用例自定义字段对应用户名，其它类型字段不返回
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'value' => 'getValue',
            'customFieldParam' => 'getCustomFieldParam',
            'userName' => 'getUserName'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['customFieldParam'] = isset($data['customFieldParam']) ? $data['customFieldParam'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
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
    * Gets type
    *  字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  测试用例自定义字段值
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
    * @param string|null $value 测试用例自定义字段值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
        return $this;
    }

    /**
    * Gets customFieldParam
    *  项目用例自定义字段入参或者返回参数名称
    *
    * @return string|null
    */
    public function getCustomFieldParam()
    {
        return $this->container['customFieldParam'];
    }

    /**
    * Sets customFieldParam
    *
    * @param string|null $customFieldParam 项目用例自定义字段入参或者返回参数名称
    *
    * @return $this
    */
    public function setCustomFieldParam($customFieldParam)
    {
        $this->container['customFieldParam'] = $customFieldParam;
        return $this;
    }

    /**
    * Gets userName
    *  user类型测试用例自定义字段对应用户名，其它类型字段不返回
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName user类型测试用例自定义字段对应用户名，其它类型字段不返回
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

