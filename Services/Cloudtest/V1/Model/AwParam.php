<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AwParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AwParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * basicValue  basicValue
    * basicValueList  valueType为1时该值有效
    * customBody  自定义requestBody内容,inType为2且isBodyCustom为1时有效
    * defaultValue  默认值
    * description  aw参数描述
    * disabled  是否禁用 只有非必需参数才能被禁用
    * dropDownValue  用于存储下拉菜单的值
    * enumType  枚举类型
    * enumTypeSelected  当前选中的枚举类型
    * format  num和String有效
    * inType  rest接口输入参数类型 0-query 1-path 2-body 3-header 4-formdata 5-config
    * isChecked  是否是被选中参数
    * isBigField  是否是大字段参数
    * isBodyCustom  requestBody是否自定义，inType为2时有效。0-非自定义，用原有逻辑；1-自定义body,requestBody直接使用字段customBody
    * isContractParam  是否是契约AW 0-否；1-yes
    * isSensitive  是否敏感参数，0  是，  1 不是
    * item  item
    * maxItems  Array类型最大元素数
    * maxLength  String类型最大长度
    * maximum  maximum
    * minItems  Array类型最小元素数
    * minLength  String类型最小长度
    * minimum  minimum
    * mock  mock
    * name  参数名
    * objectValue  valueType为2时该值有效。valueType为3时，该值用来表示数组中单个结构体
    * objectValueList  valueType为3时该值有效
    * pattern  num和String有效
    * required  是否必需参数
    * type  参数类型
    * validateRule  validateRule
    * valueType  参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    * xChoiceValue  choice选择关系
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'basicValue' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParamBasicValue',
            'basicValueList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParamBasicValue[]',
            'customBody' => 'string',
            'defaultValue' => 'string',
            'description' => 'string',
            'disabled' => 'bool',
            'dropDownValue' => 'string',
            'enumType' => 'string',
            'enumTypeSelected' => 'string',
            'format' => 'string',
            'inType' => 'int',
            'isChecked' => 'bool',
            'isBigField' => 'bool',
            'isBodyCustom' => 'int',
            'isContractParam' => 'int',
            'isSensitive' => 'bool',
            'item' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ItemParam',
            'maxItems' => 'int',
            'maxLength' => 'int',
            'maximum' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\Number',
            'minItems' => 'int',
            'minLength' => 'int',
            'minimum' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\Number',
            'mock' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\MockInfo',
            'name' => 'string',
            'objectValue' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]',
            'objectValueList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[][]',
            'pattern' => 'string',
            'required' => 'bool',
            'type' => 'string',
            'validateRule' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ValidateRule',
            'valueType' => 'int',
            'xChoiceValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * basicValue  basicValue
    * basicValueList  valueType为1时该值有效
    * customBody  自定义requestBody内容,inType为2且isBodyCustom为1时有效
    * defaultValue  默认值
    * description  aw参数描述
    * disabled  是否禁用 只有非必需参数才能被禁用
    * dropDownValue  用于存储下拉菜单的值
    * enumType  枚举类型
    * enumTypeSelected  当前选中的枚举类型
    * format  num和String有效
    * inType  rest接口输入参数类型 0-query 1-path 2-body 3-header 4-formdata 5-config
    * isChecked  是否是被选中参数
    * isBigField  是否是大字段参数
    * isBodyCustom  requestBody是否自定义，inType为2时有效。0-非自定义，用原有逻辑；1-自定义body,requestBody直接使用字段customBody
    * isContractParam  是否是契约AW 0-否；1-yes
    * isSensitive  是否敏感参数，0  是，  1 不是
    * item  item
    * maxItems  Array类型最大元素数
    * maxLength  String类型最大长度
    * maximum  maximum
    * minItems  Array类型最小元素数
    * minLength  String类型最小长度
    * minimum  minimum
    * mock  mock
    * name  参数名
    * objectValue  valueType为2时该值有效。valueType为3时，该值用来表示数组中单个结构体
    * objectValueList  valueType为3时该值有效
    * pattern  num和String有效
    * required  是否必需参数
    * type  参数类型
    * validateRule  validateRule
    * valueType  参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    * xChoiceValue  choice选择关系
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'basicValue' => null,
        'basicValueList' => null,
        'customBody' => null,
        'defaultValue' => null,
        'description' => null,
        'disabled' => null,
        'dropDownValue' => null,
        'enumType' => null,
        'enumTypeSelected' => null,
        'format' => null,
        'inType' => 'int32',
        'isChecked' => null,
        'isBigField' => null,
        'isBodyCustom' => 'int32',
        'isContractParam' => 'int32',
        'isSensitive' => null,
        'item' => null,
        'maxItems' => 'int32',
        'maxLength' => 'int64',
        'maximum' => null,
        'minItems' => 'int32',
        'minLength' => 'int64',
        'minimum' => null,
        'mock' => null,
        'name' => null,
        'objectValue' => null,
        'objectValueList' => null,
        'pattern' => null,
        'required' => null,
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
    * basicValueList  valueType为1时该值有效
    * customBody  自定义requestBody内容,inType为2且isBodyCustom为1时有效
    * defaultValue  默认值
    * description  aw参数描述
    * disabled  是否禁用 只有非必需参数才能被禁用
    * dropDownValue  用于存储下拉菜单的值
    * enumType  枚举类型
    * enumTypeSelected  当前选中的枚举类型
    * format  num和String有效
    * inType  rest接口输入参数类型 0-query 1-path 2-body 3-header 4-formdata 5-config
    * isChecked  是否是被选中参数
    * isBigField  是否是大字段参数
    * isBodyCustom  requestBody是否自定义，inType为2时有效。0-非自定义，用原有逻辑；1-自定义body,requestBody直接使用字段customBody
    * isContractParam  是否是契约AW 0-否；1-yes
    * isSensitive  是否敏感参数，0  是，  1 不是
    * item  item
    * maxItems  Array类型最大元素数
    * maxLength  String类型最大长度
    * maximum  maximum
    * minItems  Array类型最小元素数
    * minLength  String类型最小长度
    * minimum  minimum
    * mock  mock
    * name  参数名
    * objectValue  valueType为2时该值有效。valueType为3时，该值用来表示数组中单个结构体
    * objectValueList  valueType为3时该值有效
    * pattern  num和String有效
    * required  是否必需参数
    * type  参数类型
    * validateRule  validateRule
    * valueType  参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    * xChoiceValue  choice选择关系
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'basicValue' => 'basic_value',
            'basicValueList' => 'basic_value_list',
            'customBody' => 'custom_body',
            'defaultValue' => 'defaultValue',
            'description' => 'description',
            'disabled' => 'disabled',
            'dropDownValue' => 'drop_down_value',
            'enumType' => 'enum_type',
            'enumTypeSelected' => 'enum_type_selected',
            'format' => 'format',
            'inType' => 'in_type',
            'isChecked' => 'isChecked',
            'isBigField' => 'is_big_field',
            'isBodyCustom' => 'is_body_custom',
            'isContractParam' => 'is_contract_param',
            'isSensitive' => 'is_sensitive',
            'item' => 'item',
            'maxItems' => 'maxItems',
            'maxLength' => 'maxLength',
            'maximum' => 'maximum',
            'minItems' => 'minItems',
            'minLength' => 'minLength',
            'minimum' => 'minimum',
            'mock' => 'mock',
            'name' => 'name',
            'objectValue' => 'object_value',
            'objectValueList' => 'object_value_list',
            'pattern' => 'pattern',
            'required' => 'required',
            'type' => 'type',
            'validateRule' => 'validate_rule',
            'valueType' => 'value_type',
            'xChoiceValue' => 'xChoiceValue'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * basicValue  basicValue
    * basicValueList  valueType为1时该值有效
    * customBody  自定义requestBody内容,inType为2且isBodyCustom为1时有效
    * defaultValue  默认值
    * description  aw参数描述
    * disabled  是否禁用 只有非必需参数才能被禁用
    * dropDownValue  用于存储下拉菜单的值
    * enumType  枚举类型
    * enumTypeSelected  当前选中的枚举类型
    * format  num和String有效
    * inType  rest接口输入参数类型 0-query 1-path 2-body 3-header 4-formdata 5-config
    * isChecked  是否是被选中参数
    * isBigField  是否是大字段参数
    * isBodyCustom  requestBody是否自定义，inType为2时有效。0-非自定义，用原有逻辑；1-自定义body,requestBody直接使用字段customBody
    * isContractParam  是否是契约AW 0-否；1-yes
    * isSensitive  是否敏感参数，0  是，  1 不是
    * item  item
    * maxItems  Array类型最大元素数
    * maxLength  String类型最大长度
    * maximum  maximum
    * minItems  Array类型最小元素数
    * minLength  String类型最小长度
    * minimum  minimum
    * mock  mock
    * name  参数名
    * objectValue  valueType为2时该值有效。valueType为3时，该值用来表示数组中单个结构体
    * objectValueList  valueType为3时该值有效
    * pattern  num和String有效
    * required  是否必需参数
    * type  参数类型
    * validateRule  validateRule
    * valueType  参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    * xChoiceValue  choice选择关系
    *
    * @var string[]
    */
    protected static $setters = [
            'basicValue' => 'setBasicValue',
            'basicValueList' => 'setBasicValueList',
            'customBody' => 'setCustomBody',
            'defaultValue' => 'setDefaultValue',
            'description' => 'setDescription',
            'disabled' => 'setDisabled',
            'dropDownValue' => 'setDropDownValue',
            'enumType' => 'setEnumType',
            'enumTypeSelected' => 'setEnumTypeSelected',
            'format' => 'setFormat',
            'inType' => 'setInType',
            'isChecked' => 'setIsChecked',
            'isBigField' => 'setIsBigField',
            'isBodyCustom' => 'setIsBodyCustom',
            'isContractParam' => 'setIsContractParam',
            'isSensitive' => 'setIsSensitive',
            'item' => 'setItem',
            'maxItems' => 'setMaxItems',
            'maxLength' => 'setMaxLength',
            'maximum' => 'setMaximum',
            'minItems' => 'setMinItems',
            'minLength' => 'setMinLength',
            'minimum' => 'setMinimum',
            'mock' => 'setMock',
            'name' => 'setName',
            'objectValue' => 'setObjectValue',
            'objectValueList' => 'setObjectValueList',
            'pattern' => 'setPattern',
            'required' => 'setRequired',
            'type' => 'setType',
            'validateRule' => 'setValidateRule',
            'valueType' => 'setValueType',
            'xChoiceValue' => 'setXChoiceValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * basicValue  basicValue
    * basicValueList  valueType为1时该值有效
    * customBody  自定义requestBody内容,inType为2且isBodyCustom为1时有效
    * defaultValue  默认值
    * description  aw参数描述
    * disabled  是否禁用 只有非必需参数才能被禁用
    * dropDownValue  用于存储下拉菜单的值
    * enumType  枚举类型
    * enumTypeSelected  当前选中的枚举类型
    * format  num和String有效
    * inType  rest接口输入参数类型 0-query 1-path 2-body 3-header 4-formdata 5-config
    * isChecked  是否是被选中参数
    * isBigField  是否是大字段参数
    * isBodyCustom  requestBody是否自定义，inType为2时有效。0-非自定义，用原有逻辑；1-自定义body,requestBody直接使用字段customBody
    * isContractParam  是否是契约AW 0-否；1-yes
    * isSensitive  是否敏感参数，0  是，  1 不是
    * item  item
    * maxItems  Array类型最大元素数
    * maxLength  String类型最大长度
    * maximum  maximum
    * minItems  Array类型最小元素数
    * minLength  String类型最小长度
    * minimum  minimum
    * mock  mock
    * name  参数名
    * objectValue  valueType为2时该值有效。valueType为3时，该值用来表示数组中单个结构体
    * objectValueList  valueType为3时该值有效
    * pattern  num和String有效
    * required  是否必需参数
    * type  参数类型
    * validateRule  validateRule
    * valueType  参数值类型 0-基本类型，type字段为String,Integer等基本类型 1-基本类型数组,type字段为List<String>,List<Integer>等基本类型List 2-结构体，type字段为除了基本类型以外的结构体 3-结构体数组，type字段为List<结构体> 5-前端枚举类型
    * xChoiceValue  choice选择关系
    *
    * @var string[]
    */
    protected static $getters = [
            'basicValue' => 'getBasicValue',
            'basicValueList' => 'getBasicValueList',
            'customBody' => 'getCustomBody',
            'defaultValue' => 'getDefaultValue',
            'description' => 'getDescription',
            'disabled' => 'getDisabled',
            'dropDownValue' => 'getDropDownValue',
            'enumType' => 'getEnumType',
            'enumTypeSelected' => 'getEnumTypeSelected',
            'format' => 'getFormat',
            'inType' => 'getInType',
            'isChecked' => 'getIsChecked',
            'isBigField' => 'getIsBigField',
            'isBodyCustom' => 'getIsBodyCustom',
            'isContractParam' => 'getIsContractParam',
            'isSensitive' => 'getIsSensitive',
            'item' => 'getItem',
            'maxItems' => 'getMaxItems',
            'maxLength' => 'getMaxLength',
            'maximum' => 'getMaximum',
            'minItems' => 'getMinItems',
            'minLength' => 'getMinLength',
            'minimum' => 'getMinimum',
            'mock' => 'getMock',
            'name' => 'getName',
            'objectValue' => 'getObjectValue',
            'objectValueList' => 'getObjectValueList',
            'pattern' => 'getPattern',
            'required' => 'getRequired',
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
        $this->container['basicValueList'] = isset($data['basicValueList']) ? $data['basicValueList'] : null;
        $this->container['customBody'] = isset($data['customBody']) ? $data['customBody'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['disabled'] = isset($data['disabled']) ? $data['disabled'] : null;
        $this->container['dropDownValue'] = isset($data['dropDownValue']) ? $data['dropDownValue'] : null;
        $this->container['enumType'] = isset($data['enumType']) ? $data['enumType'] : null;
        $this->container['enumTypeSelected'] = isset($data['enumTypeSelected']) ? $data['enumTypeSelected'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['inType'] = isset($data['inType']) ? $data['inType'] : null;
        $this->container['isChecked'] = isset($data['isChecked']) ? $data['isChecked'] : null;
        $this->container['isBigField'] = isset($data['isBigField']) ? $data['isBigField'] : null;
        $this->container['isBodyCustom'] = isset($data['isBodyCustom']) ? $data['isBodyCustom'] : null;
        $this->container['isContractParam'] = isset($data['isContractParam']) ? $data['isContractParam'] : null;
        $this->container['isSensitive'] = isset($data['isSensitive']) ? $data['isSensitive'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['maxItems'] = isset($data['maxItems']) ? $data['maxItems'] : null;
        $this->container['maxLength'] = isset($data['maxLength']) ? $data['maxLength'] : null;
        $this->container['maximum'] = isset($data['maximum']) ? $data['maximum'] : null;
        $this->container['minItems'] = isset($data['minItems']) ? $data['minItems'] : null;
        $this->container['minLength'] = isset($data['minLength']) ? $data['minLength'] : null;
        $this->container['minimum'] = isset($data['minimum']) ? $data['minimum'] : null;
        $this->container['mock'] = isset($data['mock']) ? $data['mock'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['objectValue'] = isset($data['objectValue']) ? $data['objectValue'] : null;
        $this->container['objectValueList'] = isset($data['objectValueList']) ? $data['objectValueList'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
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
    * Gets basicValueList
    *  valueType为1时该值有效
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParamBasicValue[]|null
    */
    public function getBasicValueList()
    {
        return $this->container['basicValueList'];
    }

    /**
    * Sets basicValueList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParamBasicValue[]|null $basicValueList valueType为1时该值有效
    *
    * @return $this
    */
    public function setBasicValueList($basicValueList)
    {
        $this->container['basicValueList'] = $basicValueList;
        return $this;
    }

    /**
    * Gets customBody
    *  自定义requestBody内容,inType为2且isBodyCustom为1时有效
    *
    * @return string|null
    */
    public function getCustomBody()
    {
        return $this->container['customBody'];
    }

    /**
    * Sets customBody
    *
    * @param string|null $customBody 自定义requestBody内容,inType为2且isBodyCustom为1时有效
    *
    * @return $this
    */
    public function setCustomBody($customBody)
    {
        $this->container['customBody'] = $customBody;
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
    * Gets description
    *  aw参数描述
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
    * @param string|null $description aw参数描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets disabled
    *  是否禁用 只有非必需参数才能被禁用
    *
    * @return bool|null
    */
    public function getDisabled()
    {
        return $this->container['disabled'];
    }

    /**
    * Sets disabled
    *
    * @param bool|null $disabled 是否禁用 只有非必需参数才能被禁用
    *
    * @return $this
    */
    public function setDisabled($disabled)
    {
        $this->container['disabled'] = $disabled;
        return $this;
    }

    /**
    * Gets dropDownValue
    *  用于存储下拉菜单的值
    *
    * @return string|null
    */
    public function getDropDownValue()
    {
        return $this->container['dropDownValue'];
    }

    /**
    * Sets dropDownValue
    *
    * @param string|null $dropDownValue 用于存储下拉菜单的值
    *
    * @return $this
    */
    public function setDropDownValue($dropDownValue)
    {
        $this->container['dropDownValue'] = $dropDownValue;
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
    * Gets inType
    *  rest接口输入参数类型 0-query 1-path 2-body 3-header 4-formdata 5-config
    *
    * @return int|null
    */
    public function getInType()
    {
        return $this->container['inType'];
    }

    /**
    * Sets inType
    *
    * @param int|null $inType rest接口输入参数类型 0-query 1-path 2-body 3-header 4-formdata 5-config
    *
    * @return $this
    */
    public function setInType($inType)
    {
        $this->container['inType'] = $inType;
        return $this;
    }

    /**
    * Gets isChecked
    *  是否是被选中参数
    *
    * @return bool|null
    */
    public function getIsChecked()
    {
        return $this->container['isChecked'];
    }

    /**
    * Sets isChecked
    *
    * @param bool|null $isChecked 是否是被选中参数
    *
    * @return $this
    */
    public function setIsChecked($isChecked)
    {
        $this->container['isChecked'] = $isChecked;
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
    * Gets isBodyCustom
    *  requestBody是否自定义，inType为2时有效。0-非自定义，用原有逻辑；1-自定义body,requestBody直接使用字段customBody
    *
    * @return int|null
    */
    public function getIsBodyCustom()
    {
        return $this->container['isBodyCustom'];
    }

    /**
    * Sets isBodyCustom
    *
    * @param int|null $isBodyCustom requestBody是否自定义，inType为2时有效。0-非自定义，用原有逻辑；1-自定义body,requestBody直接使用字段customBody
    *
    * @return $this
    */
    public function setIsBodyCustom($isBodyCustom)
    {
        $this->container['isBodyCustom'] = $isBodyCustom;
        return $this;
    }

    /**
    * Gets isContractParam
    *  是否是契约AW 0-否；1-yes
    *
    * @return int|null
    */
    public function getIsContractParam()
    {
        return $this->container['isContractParam'];
    }

    /**
    * Sets isContractParam
    *
    * @param int|null $isContractParam 是否是契约AW 0-否；1-yes
    *
    * @return $this
    */
    public function setIsContractParam($isContractParam)
    {
        $this->container['isContractParam'] = $isContractParam;
        return $this;
    }

    /**
    * Gets isSensitive
    *  是否敏感参数，0  是，  1 不是
    *
    * @return bool|null
    */
    public function getIsSensitive()
    {
        return $this->container['isSensitive'];
    }

    /**
    * Sets isSensitive
    *
    * @param bool|null $isSensitive 是否敏感参数，0  是，  1 不是
    *
    * @return $this
    */
    public function setIsSensitive($isSensitive)
    {
        $this->container['isSensitive'] = $isSensitive;
        return $this;
    }

    /**
    * Gets item
    *  item
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ItemParam|null
    */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
    * Sets item
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ItemParam|null $item item
    *
    * @return $this
    */
    public function setItem($item)
    {
        $this->container['item'] = $item;
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
    * Gets mock
    *  mock
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\MockInfo|null
    */
    public function getMock()
    {
        return $this->container['mock'];
    }

    /**
    * Sets mock
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\MockInfo|null $mock mock
    *
    * @return $this
    */
    public function setMock($mock)
    {
        $this->container['mock'] = $mock;
        return $this;
    }

    /**
    * Gets name
    *  参数名
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
    * @param string|null $name 参数名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets objectValue
    *  valueType为2时该值有效。valueType为3时，该值用来表示数组中单个结构体
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null
    */
    public function getObjectValue()
    {
        return $this->container['objectValue'];
    }

    /**
    * Sets objectValue
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[]|null $objectValue valueType为2时该值有效。valueType为3时，该值用来表示数组中单个结构体
    *
    * @return $this
    */
    public function setObjectValue($objectValue)
    {
        $this->container['objectValue'] = $objectValue;
        return $this;
    }

    /**
    * Gets objectValueList
    *  valueType为3时该值有效
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[][]|null
    */
    public function getObjectValueList()
    {
        return $this->container['objectValueList'];
    }

    /**
    * Sets objectValueList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwParam[][]|null $objectValueList valueType为3时该值有效
    *
    * @return $this
    */
    public function setObjectValueList($objectValueList)
    {
        $this->container['objectValueList'] = $objectValueList;
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
    * Gets required
    *  是否必需参数
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
    * @param bool|null $required 是否必需参数
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
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

