<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FieldVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FieldVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  字段唯一标识。
    * code  字段编码。在项目中使用时一般使用code作为字段标识而不是字段ID。
    * displayName  字段显示名称。
    * createdBy  字段创建人ID。
    * createdDate  字段创建时间。时间戳格式，单位毫秒。
    * modifiedBy  字段最后修改人ID。
    * modifiedDate  字段最后修改时间。时间戳格式，单位毫秒。
    * fieldType  字段类型标识。
    * fieldTypeId  字段类型ID。用于区分不同的字段类型。
    * fieldTypeName  字段类型名称。如单选列表、多选列表、多行文本等。
    * definitionType  字段定义类型。用于区分系统字段和自定义字段。
    * showOnCard  是否显示在云服务类型的迭代看板卡片模式中。
    * optional  字段是否为必填项。
    * controlled  字段是否受控。如果工作项已经基线，修改受控字段值时会触发变更评审。
    * immutable  字段是否不可变。更新接口无法更新不可变字段。
    * no  字段排序序号。数值越小越靠前显示。
    * defaultValue  字段默认值。创建工作项时自动填充。
    * option  字段选项。单选列表类型字段的选项信息，包含选项ID、编码、显示名称等属性。
    * allOptions  字段所有选项。多选列表类型字段的全部选项信息，数组元素包含选项ID、编码、显示名称等属性。
    * hasSameDisplayName  是否存在同名字段。用于检测字段名称冲突。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'code' => 'string',
            'displayName' => 'string',
            'createdBy' => 'string',
            'createdDate' => 'string',
            'modifiedBy' => 'string',
            'modifiedDate' => 'string',
            'fieldType' => 'string',
            'fieldTypeId' => 'string',
            'fieldTypeName' => 'string',
            'definitionType' => 'string',
            'showOnCard' => 'bool',
            'optional' => 'bool',
            'controlled' => 'bool',
            'immutable' => 'bool',
            'no' => 'int',
            'defaultValue' => 'string',
            'option' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]',
            'allOptions' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]',
            'hasSameDisplayName' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  字段唯一标识。
    * code  字段编码。在项目中使用时一般使用code作为字段标识而不是字段ID。
    * displayName  字段显示名称。
    * createdBy  字段创建人ID。
    * createdDate  字段创建时间。时间戳格式，单位毫秒。
    * modifiedBy  字段最后修改人ID。
    * modifiedDate  字段最后修改时间。时间戳格式，单位毫秒。
    * fieldType  字段类型标识。
    * fieldTypeId  字段类型ID。用于区分不同的字段类型。
    * fieldTypeName  字段类型名称。如单选列表、多选列表、多行文本等。
    * definitionType  字段定义类型。用于区分系统字段和自定义字段。
    * showOnCard  是否显示在云服务类型的迭代看板卡片模式中。
    * optional  字段是否为必填项。
    * controlled  字段是否受控。如果工作项已经基线，修改受控字段值时会触发变更评审。
    * immutable  字段是否不可变。更新接口无法更新不可变字段。
    * no  字段排序序号。数值越小越靠前显示。
    * defaultValue  字段默认值。创建工作项时自动填充。
    * option  字段选项。单选列表类型字段的选项信息，包含选项ID、编码、显示名称等属性。
    * allOptions  字段所有选项。多选列表类型字段的全部选项信息，数组元素包含选项ID、编码、显示名称等属性。
    * hasSameDisplayName  是否存在同名字段。用于检测字段名称冲突。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'code' => null,
        'displayName' => null,
        'createdBy' => null,
        'createdDate' => null,
        'modifiedBy' => null,
        'modifiedDate' => null,
        'fieldType' => null,
        'fieldTypeId' => null,
        'fieldTypeName' => null,
        'definitionType' => null,
        'showOnCard' => null,
        'optional' => null,
        'controlled' => null,
        'immutable' => null,
        'no' => null,
        'defaultValue' => null,
        'option' => null,
        'allOptions' => null,
        'hasSameDisplayName' => null
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
    * id  字段唯一标识。
    * code  字段编码。在项目中使用时一般使用code作为字段标识而不是字段ID。
    * displayName  字段显示名称。
    * createdBy  字段创建人ID。
    * createdDate  字段创建时间。时间戳格式，单位毫秒。
    * modifiedBy  字段最后修改人ID。
    * modifiedDate  字段最后修改时间。时间戳格式，单位毫秒。
    * fieldType  字段类型标识。
    * fieldTypeId  字段类型ID。用于区分不同的字段类型。
    * fieldTypeName  字段类型名称。如单选列表、多选列表、多行文本等。
    * definitionType  字段定义类型。用于区分系统字段和自定义字段。
    * showOnCard  是否显示在云服务类型的迭代看板卡片模式中。
    * optional  字段是否为必填项。
    * controlled  字段是否受控。如果工作项已经基线，修改受控字段值时会触发变更评审。
    * immutable  字段是否不可变。更新接口无法更新不可变字段。
    * no  字段排序序号。数值越小越靠前显示。
    * defaultValue  字段默认值。创建工作项时自动填充。
    * option  字段选项。单选列表类型字段的选项信息，包含选项ID、编码、显示名称等属性。
    * allOptions  字段所有选项。多选列表类型字段的全部选项信息，数组元素包含选项ID、编码、显示名称等属性。
    * hasSameDisplayName  是否存在同名字段。用于检测字段名称冲突。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'code' => 'code',
            'displayName' => 'display_name',
            'createdBy' => 'created_by',
            'createdDate' => 'created_date',
            'modifiedBy' => 'modified_by',
            'modifiedDate' => 'modified_date',
            'fieldType' => 'field_type',
            'fieldTypeId' => 'field_type_id',
            'fieldTypeName' => 'field_type_name',
            'definitionType' => 'definition_type',
            'showOnCard' => 'show_on_card',
            'optional' => 'optional',
            'controlled' => 'controlled',
            'immutable' => 'immutable',
            'no' => 'no',
            'defaultValue' => 'default_value',
            'option' => 'option',
            'allOptions' => 'all_options',
            'hasSameDisplayName' => 'has_same_display_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  字段唯一标识。
    * code  字段编码。在项目中使用时一般使用code作为字段标识而不是字段ID。
    * displayName  字段显示名称。
    * createdBy  字段创建人ID。
    * createdDate  字段创建时间。时间戳格式，单位毫秒。
    * modifiedBy  字段最后修改人ID。
    * modifiedDate  字段最后修改时间。时间戳格式，单位毫秒。
    * fieldType  字段类型标识。
    * fieldTypeId  字段类型ID。用于区分不同的字段类型。
    * fieldTypeName  字段类型名称。如单选列表、多选列表、多行文本等。
    * definitionType  字段定义类型。用于区分系统字段和自定义字段。
    * showOnCard  是否显示在云服务类型的迭代看板卡片模式中。
    * optional  字段是否为必填项。
    * controlled  字段是否受控。如果工作项已经基线，修改受控字段值时会触发变更评审。
    * immutable  字段是否不可变。更新接口无法更新不可变字段。
    * no  字段排序序号。数值越小越靠前显示。
    * defaultValue  字段默认值。创建工作项时自动填充。
    * option  字段选项。单选列表类型字段的选项信息，包含选项ID、编码、显示名称等属性。
    * allOptions  字段所有选项。多选列表类型字段的全部选项信息，数组元素包含选项ID、编码、显示名称等属性。
    * hasSameDisplayName  是否存在同名字段。用于检测字段名称冲突。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'code' => 'setCode',
            'displayName' => 'setDisplayName',
            'createdBy' => 'setCreatedBy',
            'createdDate' => 'setCreatedDate',
            'modifiedBy' => 'setModifiedBy',
            'modifiedDate' => 'setModifiedDate',
            'fieldType' => 'setFieldType',
            'fieldTypeId' => 'setFieldTypeId',
            'fieldTypeName' => 'setFieldTypeName',
            'definitionType' => 'setDefinitionType',
            'showOnCard' => 'setShowOnCard',
            'optional' => 'setOptional',
            'controlled' => 'setControlled',
            'immutable' => 'setImmutable',
            'no' => 'setNo',
            'defaultValue' => 'setDefaultValue',
            'option' => 'setOption',
            'allOptions' => 'setAllOptions',
            'hasSameDisplayName' => 'setHasSameDisplayName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  字段唯一标识。
    * code  字段编码。在项目中使用时一般使用code作为字段标识而不是字段ID。
    * displayName  字段显示名称。
    * createdBy  字段创建人ID。
    * createdDate  字段创建时间。时间戳格式，单位毫秒。
    * modifiedBy  字段最后修改人ID。
    * modifiedDate  字段最后修改时间。时间戳格式，单位毫秒。
    * fieldType  字段类型标识。
    * fieldTypeId  字段类型ID。用于区分不同的字段类型。
    * fieldTypeName  字段类型名称。如单选列表、多选列表、多行文本等。
    * definitionType  字段定义类型。用于区分系统字段和自定义字段。
    * showOnCard  是否显示在云服务类型的迭代看板卡片模式中。
    * optional  字段是否为必填项。
    * controlled  字段是否受控。如果工作项已经基线，修改受控字段值时会触发变更评审。
    * immutable  字段是否不可变。更新接口无法更新不可变字段。
    * no  字段排序序号。数值越小越靠前显示。
    * defaultValue  字段默认值。创建工作项时自动填充。
    * option  字段选项。单选列表类型字段的选项信息，包含选项ID、编码、显示名称等属性。
    * allOptions  字段所有选项。多选列表类型字段的全部选项信息，数组元素包含选项ID、编码、显示名称等属性。
    * hasSameDisplayName  是否存在同名字段。用于检测字段名称冲突。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'code' => 'getCode',
            'displayName' => 'getDisplayName',
            'createdBy' => 'getCreatedBy',
            'createdDate' => 'getCreatedDate',
            'modifiedBy' => 'getModifiedBy',
            'modifiedDate' => 'getModifiedDate',
            'fieldType' => 'getFieldType',
            'fieldTypeId' => 'getFieldTypeId',
            'fieldTypeName' => 'getFieldTypeName',
            'definitionType' => 'getDefinitionType',
            'showOnCard' => 'getShowOnCard',
            'optional' => 'getOptional',
            'controlled' => 'getControlled',
            'immutable' => 'getImmutable',
            'no' => 'getNo',
            'defaultValue' => 'getDefaultValue',
            'option' => 'getOption',
            'allOptions' => 'getAllOptions',
            'hasSameDisplayName' => 'getHasSameDisplayName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['modifiedBy'] = isset($data['modifiedBy']) ? $data['modifiedBy'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['fieldTypeId'] = isset($data['fieldTypeId']) ? $data['fieldTypeId'] : null;
        $this->container['fieldTypeName'] = isset($data['fieldTypeName']) ? $data['fieldTypeName'] : null;
        $this->container['definitionType'] = isset($data['definitionType']) ? $data['definitionType'] : null;
        $this->container['showOnCard'] = isset($data['showOnCard']) ? $data['showOnCard'] : null;
        $this->container['optional'] = isset($data['optional']) ? $data['optional'] : null;
        $this->container['controlled'] = isset($data['controlled']) ? $data['controlled'] : null;
        $this->container['immutable'] = isset($data['immutable']) ? $data['immutable'] : null;
        $this->container['no'] = isset($data['no']) ? $data['no'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['option'] = isset($data['option']) ? $data['option'] : null;
        $this->container['allOptions'] = isset($data['allOptions']) ? $data['allOptions'] : null;
        $this->container['hasSameDisplayName'] = isset($data['hasSameDisplayName']) ? $data['hasSameDisplayName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 5)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 5.";
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
    * Gets id
    *  字段唯一标识。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 字段唯一标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets code
    *  字段编码。在项目中使用时一般使用code作为字段标识而不是字段ID。
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
    * @param string|null $code 字段编码。在项目中使用时一般使用code作为字段标识而不是字段ID。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets displayName
    *  字段显示名称。
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName 字段显示名称。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets createdBy
    *  字段创建人ID。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 字段创建人ID。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets createdDate
    *  字段创建时间。时间戳格式，单位毫秒。
    *
    * @return string|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param string|null $createdDate 字段创建时间。时间戳格式，单位毫秒。
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets modifiedBy
    *  字段最后修改人ID。
    *
    * @return string|null
    */
    public function getModifiedBy()
    {
        return $this->container['modifiedBy'];
    }

    /**
    * Sets modifiedBy
    *
    * @param string|null $modifiedBy 字段最后修改人ID。
    *
    * @return $this
    */
    public function setModifiedBy($modifiedBy)
    {
        $this->container['modifiedBy'] = $modifiedBy;
        return $this;
    }

    /**
    * Gets modifiedDate
    *  字段最后修改时间。时间戳格式，单位毫秒。
    *
    * @return string|null
    */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /**
    * Sets modifiedDate
    *
    * @param string|null $modifiedDate 字段最后修改时间。时间戳格式，单位毫秒。
    *
    * @return $this
    */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;
        return $this;
    }

    /**
    * Gets fieldType
    *  字段类型标识。
    *
    * @return string|null
    */
    public function getFieldType()
    {
        return $this->container['fieldType'];
    }

    /**
    * Sets fieldType
    *
    * @param string|null $fieldType 字段类型标识。
    *
    * @return $this
    */
    public function setFieldType($fieldType)
    {
        $this->container['fieldType'] = $fieldType;
        return $this;
    }

    /**
    * Gets fieldTypeId
    *  字段类型ID。用于区分不同的字段类型。
    *
    * @return string|null
    */
    public function getFieldTypeId()
    {
        return $this->container['fieldTypeId'];
    }

    /**
    * Sets fieldTypeId
    *
    * @param string|null $fieldTypeId 字段类型ID。用于区分不同的字段类型。
    *
    * @return $this
    */
    public function setFieldTypeId($fieldTypeId)
    {
        $this->container['fieldTypeId'] = $fieldTypeId;
        return $this;
    }

    /**
    * Gets fieldTypeName
    *  字段类型名称。如单选列表、多选列表、多行文本等。
    *
    * @return string|null
    */
    public function getFieldTypeName()
    {
        return $this->container['fieldTypeName'];
    }

    /**
    * Sets fieldTypeName
    *
    * @param string|null $fieldTypeName 字段类型名称。如单选列表、多选列表、多行文本等。
    *
    * @return $this
    */
    public function setFieldTypeName($fieldTypeName)
    {
        $this->container['fieldTypeName'] = $fieldTypeName;
        return $this;
    }

    /**
    * Gets definitionType
    *  字段定义类型。用于区分系统字段和自定义字段。
    *
    * @return string|null
    */
    public function getDefinitionType()
    {
        return $this->container['definitionType'];
    }

    /**
    * Sets definitionType
    *
    * @param string|null $definitionType 字段定义类型。用于区分系统字段和自定义字段。
    *
    * @return $this
    */
    public function setDefinitionType($definitionType)
    {
        $this->container['definitionType'] = $definitionType;
        return $this;
    }

    /**
    * Gets showOnCard
    *  是否显示在云服务类型的迭代看板卡片模式中。
    *
    * @return bool|null
    */
    public function getShowOnCard()
    {
        return $this->container['showOnCard'];
    }

    /**
    * Sets showOnCard
    *
    * @param bool|null $showOnCard 是否显示在云服务类型的迭代看板卡片模式中。
    *
    * @return $this
    */
    public function setShowOnCard($showOnCard)
    {
        $this->container['showOnCard'] = $showOnCard;
        return $this;
    }

    /**
    * Gets optional
    *  字段是否为必填项。
    *
    * @return bool|null
    */
    public function getOptional()
    {
        return $this->container['optional'];
    }

    /**
    * Sets optional
    *
    * @param bool|null $optional 字段是否为必填项。
    *
    * @return $this
    */
    public function setOptional($optional)
    {
        $this->container['optional'] = $optional;
        return $this;
    }

    /**
    * Gets controlled
    *  字段是否受控。如果工作项已经基线，修改受控字段值时会触发变更评审。
    *
    * @return bool|null
    */
    public function getControlled()
    {
        return $this->container['controlled'];
    }

    /**
    * Sets controlled
    *
    * @param bool|null $controlled 字段是否受控。如果工作项已经基线，修改受控字段值时会触发变更评审。
    *
    * @return $this
    */
    public function setControlled($controlled)
    {
        $this->container['controlled'] = $controlled;
        return $this;
    }

    /**
    * Gets immutable
    *  字段是否不可变。更新接口无法更新不可变字段。
    *
    * @return bool|null
    */
    public function getImmutable()
    {
        return $this->container['immutable'];
    }

    /**
    * Sets immutable
    *
    * @param bool|null $immutable 字段是否不可变。更新接口无法更新不可变字段。
    *
    * @return $this
    */
    public function setImmutable($immutable)
    {
        $this->container['immutable'] = $immutable;
        return $this;
    }

    /**
    * Gets no
    *  字段排序序号。数值越小越靠前显示。
    *
    * @return int|null
    */
    public function getNo()
    {
        return $this->container['no'];
    }

    /**
    * Sets no
    *
    * @param int|null $no 字段排序序号。数值越小越靠前显示。
    *
    * @return $this
    */
    public function setNo($no)
    {
        $this->container['no'] = $no;
        return $this;
    }

    /**
    * Gets defaultValue
    *  字段默认值。创建工作项时自动填充。
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
    * @param string|null $defaultValue 字段默认值。创建工作项时自动填充。
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets option
    *  字段选项。单选列表类型字段的选项信息，包含选项ID、编码、显示名称等属性。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]|null
    */
    public function getOption()
    {
        return $this->container['option'];
    }

    /**
    * Sets option
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]|null $option 字段选项。单选列表类型字段的选项信息，包含选项ID、编码、显示名称等属性。
    *
    * @return $this
    */
    public function setOption($option)
    {
        $this->container['option'] = $option;
        return $this;
    }

    /**
    * Gets allOptions
    *  字段所有选项。多选列表类型字段的全部选项信息，数组元素包含选项ID、编码、显示名称等属性。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]|null
    */
    public function getAllOptions()
    {
        return $this->container['allOptions'];
    }

    /**
    * Sets allOptions
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\OptionEntity[]|null $allOptions 字段所有选项。多选列表类型字段的全部选项信息，数组元素包含选项ID、编码、显示名称等属性。
    *
    * @return $this
    */
    public function setAllOptions($allOptions)
    {
        $this->container['allOptions'] = $allOptions;
        return $this;
    }

    /**
    * Gets hasSameDisplayName
    *  是否存在同名字段。用于检测字段名称冲突。
    *
    * @return bool|null
    */
    public function getHasSameDisplayName()
    {
        return $this->container['hasSameDisplayName'];
    }

    /**
    * Sets hasSameDisplayName
    *
    * @param bool|null $hasSameDisplayName 是否存在同名字段。用于检测字段名称冲突。
    *
    * @return $this
    */
    public function setHasSameDisplayName($hasSameDisplayName)
    {
        $this->container['hasSameDisplayName'] = $hasSameDisplayName;
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

