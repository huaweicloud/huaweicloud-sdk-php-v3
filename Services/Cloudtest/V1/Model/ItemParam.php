<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ItemParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ItemParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * basicValue  basicValue
    * defaultValue  默认值
    * enumType  枚举类型
    * enumTypeSelected  当前选中的枚举类型
    * format  num和String有效
    * isBigField  是否是大字段参数
    * maxItems  Array类型最大元素数
    * maxLength  String类型最大长度
    * maximum  maximum
    * minItems  Array类型最小元素数
    * minLength  String类型最小长度
    * minimum  minimum
    * pattern  num和String有效
    * type  参数类型
    * validateRule  validateRule
    * valueType  参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    * xChoiceValue  choice选择关系
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'basicValue' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParamBasicValue',
            'defaultValue' => 'string',
            'enumType' => 'string',
            'enumTypeSelected' => 'string',
            'format' => 'string',
            'isBigField' => 'bool',
            'maxItems' => 'int',
            'maxLength' => 'int',
            'maximum' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\Number',
            'minItems' => 'int',
            'minLength' => 'int',
            'minimum' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\Number',
            'pattern' => 'string',
            'type' => 'string',
            'validateRule' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ValidateRule',
            'valueType' => 'int',
            'xChoiceValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * basicValue  basicValue
    * defaultValue  默认值
    * enumType  枚举类型
    * enumTypeSelected  当前选中的枚举类型
    * format  num和String有效
    * isBigField  是否是大字段参数
    * maxItems  Array类型最大元素数
    * maxLength  String类型最大长度
    * maximum  maximum
    * minItems  Array类型最小元素数
    * minLength  String类型最小长度
    * minimum  minimum
    * pattern  num和String有效
    * type  参数类型
    * validateRule  validateRule
    * valueType  参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    * xChoiceValue  choice选择关系
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'basicValue' => null,
        'defaultValue' => null,
        'enumType' => null,
        'enumTypeSelected' => null,
        'format' => null,
        'isBigField' => null,
        'maxItems' => 'int32',
        'maxLength' => 'int64',
        'maximum' => null,
        'minItems' => 'int32',
        'minLength' => 'int64',
        'minimum' => null,
        'pattern' => null,
        'type' => null,
        'validateRule' => null,
        'valueType' => 'int32',
        'xChoiceValue' => null
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
    * basicValue  basicValue
    * defaultValue  默认值
    * enumType  枚举类型
    * enumTypeSelected  当前选中的枚举类型
    * format  num和String有效
    * isBigField  是否是大字段参数
    * maxItems  Array类型最大元素数
    * maxLength  String类型最大长度
    * maximum  maximum
    * minItems  Array类型最小元素数
    * minLength  String类型最小长度
    * minimum  minimum
    * pattern  num和String有效
    * type  参数类型
    * validateRule  validateRule
    * valueType  参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    * xChoiceValue  choice选择关系
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'basicValue' => 'basic_value',
            'defaultValue' => 'defaultValue',
            'enumType' => 'enum_type',
            'enumTypeSelected' => 'enum_type_selected',
            'format' => 'format',
            'isBigField' => 'is_big_field',
            'maxItems' => 'maxItems',
            'maxLength' => 'maxLength',
            'maximum' => 'maximum',
            'minItems' => 'minItems',
            'minLength' => 'minLength',
            'minimum' => 'minimum',
            'pattern' => 'pattern',
            'type' => 'type',
            'validateRule' => 'validate_rule',
            'valueType' => 'value_type',
            'xChoiceValue' => 'xChoiceValue'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * basicValue  basicValue
    * defaultValue  默认值
    * enumType  枚举类型
    * enumTypeSelected  当前选中的枚举类型
    * format  num和String有效
    * isBigField  是否是大字段参数
    * maxItems  Array类型最大元素数
    * maxLength  String类型最大长度
    * maximum  maximum
    * minItems  Array类型最小元素数
    * minLength  String类型最小长度
    * minimum  minimum
    * pattern  num和String有效
    * type  参数类型
    * validateRule  validateRule
    * valueType  参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    * xChoiceValue  choice选择关系
    *
    * @var string[]
    */
    protected static $setters = [
            'basicValue' => 'setBasicValue',
            'defaultValue' => 'setDefaultValue',
            'enumType' => 'setEnumType',
            'enumTypeSelected' => 'setEnumTypeSelected',
            'format' => 'setFormat',
            'isBigField' => 'setIsBigField',
            'maxItems' => 'setMaxItems',
            'maxLength' => 'setMaxLength',
            'maximum' => 'setMaximum',
            'minItems' => 'setMinItems',
            'minLength' => 'setMinLength',
            'minimum' => 'setMinimum',
            'pattern' => 'setPattern',
            'type' => 'setType',
            'validateRule' => 'setValidateRule',
            'valueType' => 'setValueType',
            'xChoiceValue' => 'setXChoiceValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * basicValue  basicValue
    * defaultValue  默认值
    * enumType  枚举类型
    * enumTypeSelected  当前选中的枚举类型
    * format  num和String有效
    * isBigField  是否是大字段参数
    * maxItems  Array类型最大元素数
    * maxLength  String类型最大长度
    * maximum  maximum
    * minItems  Array类型最小元素数
    * minLength  String类型最小长度
    * minimum  minimum
    * pattern  num和String有效
    * type  参数类型
    * validateRule  validateRule
    * valueType  参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    * xChoiceValue  choice选择关系
    *
    * @var string[]
    */
    protected static $getters = [
            'basicValue' => 'getBasicValue',
            'defaultValue' => 'getDefaultValue',
            'enumType' => 'getEnumType',
            'enumTypeSelected' => 'getEnumTypeSelected',
            'format' => 'getFormat',
            'isBigField' => 'getIsBigField',
            'maxItems' => 'getMaxItems',
            'maxLength' => 'getMaxLength',
            'maximum' => 'getMaximum',
            'minItems' => 'getMinItems',
            'minLength' => 'getMinLength',
            'minimum' => 'getMinimum',
            'pattern' => 'getPattern',
            'type' => 'getType',
            'validateRule' => 'getValidateRule',
            'valueType' => 'getValueType',
            'xChoiceValue' => 'getXChoiceValue'
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
        $this->container['basicValue'] = isset($data['basicValue']) ? $data['basicValue'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['enumType'] = isset($data['enumType']) ? $data['enumType'] : null;
        $this->container['enumTypeSelected'] = isset($data['enumTypeSelected']) ? $data['enumTypeSelected'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['isBigField'] = isset($data['isBigField']) ? $data['isBigField'] : null;
        $this->container['maxItems'] = isset($data['maxItems']) ? $data['maxItems'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['maximum'] = isset($data['maximum']) ? $data['maximum'] : null;
        $this->container['minItems'] = isset($data['minItems']) ? $data['minItems'] : null;
        $this->container['minLength'] = isset($data['minLength']) ? $data['minLength'] : null;
        $this->container['minimum'] = isset($data['minimum']) ? $data['minimum'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['validateRule'] = isset($data['validateRule']) ? $data['validateRule'] : null;
        $this->container['valueType'] = isset($data['valueType']) ? $data['valueType'] : null;
        $this->container['xChoiceValue'] = isset($data['xChoiceValue']) ? $data['xChoiceValue'] : null;
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
    * Gets basicValue
    *  basicValue
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParamBasicValue|null
    */
    public function getBasicValue()
    {
        return $this->container['basicValue'];
    }

    /**
    * Sets basicValue
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParamBasicValue|null $basicValue basicValue
    *
    * @return $this
    */
    public function setBasicValue($basicValue)
    {
        $this->container['basicValue'] = $basicValue;
        return $this;
    }

    /**
    * Gets defaultValue
    *  默认值
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
    * @param string|null $defaultValue 默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets enumType
    *  枚举类型
    *
    * @return string|null
    */
    public function getEnumType()
    {
        return $this->container['enumType'];
    }

    /**
    * Sets enumType
    *
    * @param string|null $enumType 枚举类型
    *
    * @return $this
    */
    public function setEnumType($enumType)
    {
        $this->container['enumType'] = $enumType;
        return $this;
    }

    /**
    * Gets enumTypeSelected
    *  当前选中的枚举类型
    *
    * @return string|null
    */
    public function getEnumTypeSelected()
    {
        return $this->container['enumTypeSelected'];
    }

    /**
    * Sets enumTypeSelected
    *
    * @param string|null $enumTypeSelected 当前选中的枚举类型
    *
    * @return $this
    */
    public function setEnumTypeSelected($enumTypeSelected)
    {
        $this->container['enumTypeSelected'] = $enumTypeSelected;
        return $this;
    }

    /**
    * Gets format
    *  num和String有效
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format num和String有效
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets isBigField
    *  是否是大字段参数
    *
    * @return bool|null
    */
    public function getIsBigField()
    {
        return $this->container['isBigField'];
    }

    /**
    * Sets isBigField
    *
    * @param bool|null $isBigField 是否是大字段参数
    *
    * @return $this
    */
    public function setIsBigField($isBigField)
    {
        $this->container['isBigField'] = $isBigField;
        return $this;
    }

    /**
    * Gets maxItems
    *  Array类型最大元素数
    *
    * @return int|null
    */
    public function getMaxItems()
    {
        return $this->container['maxItems'];
    }

    /**
    * Sets maxItems
    *
    * @param int|null $maxItems Array类型最大元素数
    *
    * @return $this
    */
    public function setMaxItems($maxItems)
    {
        $this->container['maxItems'] = $maxItems;
        return $this;
    }

    /**
    * Gets maxLength
    *  String类型最大长度
    *
    * @return int|null
    */
    public function getMaxLength()
    {
        return $this->container['maxLength'];
    }

    /**
    * Sets maxLength
    *
    * @param int|null $maxLength String类型最大长度
    *
    * @return $this
    */
    public function setMaxLength($maxLength)
    {
        $this->container['maxLength'] = $maxLength;
        return $this;
    }

    /**
    * Gets maximum
    *  maximum
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\Number|null
    */
    public function getMaximum()
    {
        return $this->container['maximum'];
    }

    /**
    * Sets maximum
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\Number|null $maximum maximum
    *
    * @return $this
    */
    public function setMaximum($maximum)
    {
        $this->container['maximum'] = $maximum;
        return $this;
    }

    /**
    * Gets minItems
    *  Array类型最小元素数
    *
    * @return int|null
    */
    public function getMinItems()
    {
        return $this->container['minItems'];
    }

    /**
    * Sets minItems
    *
    * @param int|null $minItems Array类型最小元素数
    *
    * @return $this
    */
    public function setMinItems($minItems)
    {
        $this->container['minItems'] = $minItems;
        return $this;
    }

    /**
    * Gets minLength
    *  String类型最小长度
    *
    * @return int|null
    */
    public function getMinLength()
    {
        return $this->container['minLength'];
    }

    /**
    * Sets minLength
    *
    * @param int|null $minLength String类型最小长度
    *
    * @return $this
    */
    public function setMinLength($minLength)
    {
        $this->container['minLength'] = $minLength;
        return $this;
    }

    /**
    * Gets minimum
    *  minimum
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\Number|null
    */
    public function getMinimum()
    {
        return $this->container['minimum'];
    }

    /**
    * Sets minimum
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\Number|null $minimum minimum
    *
    * @return $this
    */
    public function setMinimum($minimum)
    {
        $this->container['minimum'] = $minimum;
        return $this;
    }

    /**
    * Gets pattern
    *  num和String有效
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
    * @param string|null $pattern num和String有效
    *
    * @return $this
    */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
        return $this;
    }

    /**
    * Gets type
    *  参数类型
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
    * @param string|null $type 参数类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets validateRule
    *  validateRule
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ValidateRule|null
    */
    public function getValidateRule()
    {
        return $this->container['validateRule'];
    }

    /**
    * Sets validateRule
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ValidateRule|null $validateRule validateRule
    *
    * @return $this
    */
    public function setValidateRule($validateRule)
    {
        $this->container['validateRule'] = $validateRule;
        return $this;
    }

    /**
    * Gets valueType
    *  参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    *
    * @return int|null
    */
    public function getValueType()
    {
        return $this->container['valueType'];
    }

    /**
    * Sets valueType
    *
    * @param int|null $valueType 参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    *
    * @return $this
    */
    public function setValueType($valueType)
    {
        $this->container['valueType'] = $valueType;
        return $this;
    }

    /**
    * Gets xChoiceValue
    *  choice选择关系
    *
    * @return string|null
    */
    public function getXChoiceValue()
    {
        return $this->container['xChoiceValue'];
    }

    /**
    * Sets xChoiceValue
    *
    * @param string|null $xChoiceValue choice选择关系
    *
    * @return $this
    */
    public function setXChoiceValue($xChoiceValue)
    {
        $this->container['xChoiceValue'] = $xChoiceValue;
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

