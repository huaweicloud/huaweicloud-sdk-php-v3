<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AtomicInputModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AtomicInputModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * paramKey  参数变量名，执行时原子能力内引用
    * paramNameZh  参数中文名，下拉展示时使用
    * paramNameEn  参数英文名，下拉展示时使用
    * required  是否必填
    * paramType  参数类型：常量/字典
    * min  最小值
    * max  最大值
    * minLen  长度最小值
    * maxLen  长度最大值
    * pattern  正则限制表达式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'paramKey' => 'string',
            'paramNameZh' => 'string',
            'paramNameEn' => 'string',
            'required' => 'bool',
            'paramType' => 'string',
            'min' => 'int',
            'max' => 'int',
            'minLen' => 'int',
            'maxLen' => 'int',
            'pattern' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * paramKey  参数变量名，执行时原子能力内引用
    * paramNameZh  参数中文名，下拉展示时使用
    * paramNameEn  参数英文名，下拉展示时使用
    * required  是否必填
    * paramType  参数类型：常量/字典
    * min  最小值
    * max  最大值
    * minLen  长度最小值
    * maxLen  长度最大值
    * pattern  正则限制表达式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'paramKey' => null,
        'paramNameZh' => null,
        'paramNameEn' => null,
        'required' => null,
        'paramType' => null,
        'min' => 'int32',
        'max' => 'int32',
        'minLen' => 'int32',
        'maxLen' => 'int32',
        'pattern' => null
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
    * paramKey  参数变量名，执行时原子能力内引用
    * paramNameZh  参数中文名，下拉展示时使用
    * paramNameEn  参数英文名，下拉展示时使用
    * required  是否必填
    * paramType  参数类型：常量/字典
    * min  最小值
    * max  最大值
    * minLen  长度最小值
    * maxLen  长度最大值
    * pattern  正则限制表达式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'paramKey' => 'param_key',
            'paramNameZh' => 'param_name_zh',
            'paramNameEn' => 'param_name_en',
            'required' => 'required',
            'paramType' => 'param_type',
            'min' => 'min',
            'max' => 'max',
            'minLen' => 'min_len',
            'maxLen' => 'max_len',
            'pattern' => 'pattern'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * paramKey  参数变量名，执行时原子能力内引用
    * paramNameZh  参数中文名，下拉展示时使用
    * paramNameEn  参数英文名，下拉展示时使用
    * required  是否必填
    * paramType  参数类型：常量/字典
    * min  最小值
    * max  最大值
    * minLen  长度最小值
    * maxLen  长度最大值
    * pattern  正则限制表达式
    *
    * @var string[]
    */
    protected static $setters = [
            'paramKey' => 'setParamKey',
            'paramNameZh' => 'setParamNameZh',
            'paramNameEn' => 'setParamNameEn',
            'required' => 'setRequired',
            'paramType' => 'setParamType',
            'min' => 'setMin',
            'max' => 'setMax',
            'minLen' => 'setMinLen',
            'maxLen' => 'setMaxLen',
            'pattern' => 'setPattern'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * paramKey  参数变量名，执行时原子能力内引用
    * paramNameZh  参数中文名，下拉展示时使用
    * paramNameEn  参数英文名，下拉展示时使用
    * required  是否必填
    * paramType  参数类型：常量/字典
    * min  最小值
    * max  最大值
    * minLen  长度最小值
    * maxLen  长度最大值
    * pattern  正则限制表达式
    *
    * @var string[]
    */
    protected static $getters = [
            'paramKey' => 'getParamKey',
            'paramNameZh' => 'getParamNameZh',
            'paramNameEn' => 'getParamNameEn',
            'required' => 'getRequired',
            'paramType' => 'getParamType',
            'min' => 'getMin',
            'max' => 'getMax',
            'minLen' => 'getMinLen',
            'maxLen' => 'getMaxLen',
            'pattern' => 'getPattern'
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
        $this->container['paramKey'] = isset($data['paramKey']) ? $data['paramKey'] : null;
        $this->container['paramNameZh'] = isset($data['paramNameZh']) ? $data['paramNameZh'] : null;
        $this->container['paramNameEn'] = isset($data['paramNameEn']) ? $data['paramNameEn'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['paramType'] = isset($data['paramType']) ? $data['paramType'] : null;
        $this->container['min'] = isset($data['min']) ? $data['min'] : null;
        $this->container['max'] = isset($data['max']) ? $data['max'] : null;
        $this->container['minLen'] = isset($data['minLen']) ? $data['minLen'] : null;
        $this->container['maxLen'] = isset($data['maxLen']) ? $data['maxLen'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
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
    * Gets paramKey
    *  参数变量名，执行时原子能力内引用
    *
    * @return string|null
    */
    public function getParamKey()
    {
        return $this->container['paramKey'];
    }

    /**
    * Sets paramKey
    *
    * @param string|null $paramKey 参数变量名，执行时原子能力内引用
    *
    * @return $this
    */
    public function setParamKey($paramKey)
    {
        $this->container['paramKey'] = $paramKey;
        return $this;
    }

    /**
    * Gets paramNameZh
    *  参数中文名，下拉展示时使用
    *
    * @return string|null
    */
    public function getParamNameZh()
    {
        return $this->container['paramNameZh'];
    }

    /**
    * Sets paramNameZh
    *
    * @param string|null $paramNameZh 参数中文名，下拉展示时使用
    *
    * @return $this
    */
    public function setParamNameZh($paramNameZh)
    {
        $this->container['paramNameZh'] = $paramNameZh;
        return $this;
    }

    /**
    * Gets paramNameEn
    *  参数英文名，下拉展示时使用
    *
    * @return string|null
    */
    public function getParamNameEn()
    {
        return $this->container['paramNameEn'];
    }

    /**
    * Sets paramNameEn
    *
    * @param string|null $paramNameEn 参数英文名，下拉展示时使用
    *
    * @return $this
    */
    public function setParamNameEn($paramNameEn)
    {
        $this->container['paramNameEn'] = $paramNameEn;
        return $this;
    }

    /**
    * Gets required
    *  是否必填
    *
    * @return bool|null
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool|null $required 是否必填
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets paramType
    *  参数类型：常量/字典
    *
    * @return string|null
    */
    public function getParamType()
    {
        return $this->container['paramType'];
    }

    /**
    * Sets paramType
    *
    * @param string|null $paramType 参数类型：常量/字典
    *
    * @return $this
    */
    public function setParamType($paramType)
    {
        $this->container['paramType'] = $paramType;
        return $this;
    }

    /**
    * Gets min
    *  最小值
    *
    * @return int|null
    */
    public function getMin()
    {
        return $this->container['min'];
    }

    /**
    * Sets min
    *
    * @param int|null $min 最小值
    *
    * @return $this
    */
    public function setMin($min)
    {
        $this->container['min'] = $min;
        return $this;
    }

    /**
    * Gets max
    *  最大值
    *
    * @return int|null
    */
    public function getMax()
    {
        return $this->container['max'];
    }

    /**
    * Sets max
    *
    * @param int|null $max 最大值
    *
    * @return $this
    */
    public function setMax($max)
    {
        $this->container['max'] = $max;
        return $this;
    }

    /**
    * Gets minLen
    *  长度最小值
    *
    * @return int|null
    */
    public function getMinLen()
    {
        return $this->container['minLen'];
    }

    /**
    * Sets minLen
    *
    * @param int|null $minLen 长度最小值
    *
    * @return $this
    */
    public function setMinLen($minLen)
    {
        $this->container['minLen'] = $minLen;
        return $this;
    }

    /**
    * Gets maxLen
    *  长度最大值
    *
    * @return int|null
    */
    public function getMaxLen()
    {
        return $this->container['maxLen'];
    }

    /**
    * Sets maxLen
    *
    * @param int|null $maxLen 长度最大值
    *
    * @return $this
    */
    public function setMaxLen($maxLen)
    {
        $this->container['maxLen'] = $maxLen;
        return $this;
    }

    /**
    * Gets pattern
    *  正则限制表达式
    *
    * @return string|null
    */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
    * Sets pattern
    *
    * @param string|null $pattern 正则限制表达式
    *
    * @return $this
    */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
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

