<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FieldResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FieldResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  Id value
    * cloudPackVersion  订阅包版本
    * businessId  关联业务id
    * businessType  关联业务
    * dataclassName  数据类名称
    * businessCode  字段业务编码
    * fieldKey  字段key
    * name  字段名称
    * description  字段描述
    * defaultValue  默认值
    * displayType  显示类型
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * iuType  输入输出类型
    * usedBy  使用业务
    * jsonSchema  json模式
    * isBuiltIn  是否内置，true内置，false非内置
    * caseSensitive  大小写敏感，true敏感，false不敏感
    * readOnly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * mapping  是否展示在分类映射外的其他地方
    * targetApi  目标api
    * creatorId  Creator id value
    * creatorName  Creator name value
    * modifierId  Modifier id value
    * modifierName  Modifier name value
    * createTime  Create time
    * updateTime  Update time
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'cloudPackVersion' => 'string',
            'businessId' => 'string',
            'businessType' => 'string',
            'dataclassName' => 'string',
            'businessCode' => 'string',
            'fieldKey' => 'string',
            'name' => 'string',
            'description' => 'string',
            'defaultValue' => 'string',
            'displayType' => 'string',
            'fieldType' => 'string',
            'extraJson' => 'string',
            'fieldTooltip' => 'string',
            'iuType' => 'string',
            'usedBy' => 'string',
            'jsonSchema' => 'string',
            'isBuiltIn' => 'bool',
            'caseSensitive' => 'bool',
            'readOnly' => 'bool',
            'required' => 'bool',
            'searchable' => 'bool',
            'visible' => 'bool',
            'maintainable' => 'bool',
            'editable' => 'bool',
            'creatable' => 'bool',
            'mapping' => 'bool',
            'targetApi' => 'string',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  Id value
    * cloudPackVersion  订阅包版本
    * businessId  关联业务id
    * businessType  关联业务
    * dataclassName  数据类名称
    * businessCode  字段业务编码
    * fieldKey  字段key
    * name  字段名称
    * description  字段描述
    * defaultValue  默认值
    * displayType  显示类型
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * iuType  输入输出类型
    * usedBy  使用业务
    * jsonSchema  json模式
    * isBuiltIn  是否内置，true内置，false非内置
    * caseSensitive  大小写敏感，true敏感，false不敏感
    * readOnly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * mapping  是否展示在分类映射外的其他地方
    * targetApi  目标api
    * creatorId  Creator id value
    * creatorName  Creator name value
    * modifierId  Modifier id value
    * modifierName  Modifier name value
    * createTime  Create time
    * updateTime  Update time
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'cloudPackVersion' => null,
        'businessId' => null,
        'businessType' => null,
        'dataclassName' => null,
        'businessCode' => null,
        'fieldKey' => null,
        'name' => null,
        'description' => null,
        'defaultValue' => null,
        'displayType' => null,
        'fieldType' => null,
        'extraJson' => null,
        'fieldTooltip' => null,
        'iuType' => null,
        'usedBy' => null,
        'jsonSchema' => null,
        'isBuiltIn' => null,
        'caseSensitive' => null,
        'readOnly' => null,
        'required' => null,
        'searchable' => null,
        'visible' => null,
        'maintainable' => null,
        'editable' => null,
        'creatable' => null,
        'mapping' => null,
        'targetApi' => null,
        'creatorId' => null,
        'creatorName' => null,
        'modifierId' => null,
        'modifierName' => null,
        'createTime' => null,
        'updateTime' => null
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
    * id  Id value
    * cloudPackVersion  订阅包版本
    * businessId  关联业务id
    * businessType  关联业务
    * dataclassName  数据类名称
    * businessCode  字段业务编码
    * fieldKey  字段key
    * name  字段名称
    * description  字段描述
    * defaultValue  默认值
    * displayType  显示类型
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * iuType  输入输出类型
    * usedBy  使用业务
    * jsonSchema  json模式
    * isBuiltIn  是否内置，true内置，false非内置
    * caseSensitive  大小写敏感，true敏感，false不敏感
    * readOnly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * mapping  是否展示在分类映射外的其他地方
    * targetApi  目标api
    * creatorId  Creator id value
    * creatorName  Creator name value
    * modifierId  Modifier id value
    * modifierName  Modifier name value
    * createTime  Create time
    * updateTime  Update time
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'cloudPackVersion' => 'cloud_pack_version',
            'businessId' => 'business_id',
            'businessType' => 'business_type',
            'dataclassName' => 'dataclass_name',
            'businessCode' => 'business_code',
            'fieldKey' => 'field_key',
            'name' => 'name',
            'description' => 'description',
            'defaultValue' => 'default_value',
            'displayType' => 'display_type',
            'fieldType' => 'field_type',
            'extraJson' => 'extra_json',
            'fieldTooltip' => 'field_tooltip',
            'iuType' => 'iu_type',
            'usedBy' => 'used_by',
            'jsonSchema' => 'json_schema',
            'isBuiltIn' => 'is_built_in',
            'caseSensitive' => 'case_sensitive',
            'readOnly' => 'read_only',
            'required' => 'required',
            'searchable' => 'searchable',
            'visible' => 'visible',
            'maintainable' => 'maintainable',
            'editable' => 'editable',
            'creatable' => 'creatable',
            'mapping' => 'mapping',
            'targetApi' => 'target_api',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  Id value
    * cloudPackVersion  订阅包版本
    * businessId  关联业务id
    * businessType  关联业务
    * dataclassName  数据类名称
    * businessCode  字段业务编码
    * fieldKey  字段key
    * name  字段名称
    * description  字段描述
    * defaultValue  默认值
    * displayType  显示类型
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * iuType  输入输出类型
    * usedBy  使用业务
    * jsonSchema  json模式
    * isBuiltIn  是否内置，true内置，false非内置
    * caseSensitive  大小写敏感，true敏感，false不敏感
    * readOnly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * mapping  是否展示在分类映射外的其他地方
    * targetApi  目标api
    * creatorId  Creator id value
    * creatorName  Creator name value
    * modifierId  Modifier id value
    * modifierName  Modifier name value
    * createTime  Create time
    * updateTime  Update time
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'cloudPackVersion' => 'setCloudPackVersion',
            'businessId' => 'setBusinessId',
            'businessType' => 'setBusinessType',
            'dataclassName' => 'setDataclassName',
            'businessCode' => 'setBusinessCode',
            'fieldKey' => 'setFieldKey',
            'name' => 'setName',
            'description' => 'setDescription',
            'defaultValue' => 'setDefaultValue',
            'displayType' => 'setDisplayType',
            'fieldType' => 'setFieldType',
            'extraJson' => 'setExtraJson',
            'fieldTooltip' => 'setFieldTooltip',
            'iuType' => 'setIuType',
            'usedBy' => 'setUsedBy',
            'jsonSchema' => 'setJsonSchema',
            'isBuiltIn' => 'setIsBuiltIn',
            'caseSensitive' => 'setCaseSensitive',
            'readOnly' => 'setReadOnly',
            'required' => 'setRequired',
            'searchable' => 'setSearchable',
            'visible' => 'setVisible',
            'maintainable' => 'setMaintainable',
            'editable' => 'setEditable',
            'creatable' => 'setCreatable',
            'mapping' => 'setMapping',
            'targetApi' => 'setTargetApi',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  Id value
    * cloudPackVersion  订阅包版本
    * businessId  关联业务id
    * businessType  关联业务
    * dataclassName  数据类名称
    * businessCode  字段业务编码
    * fieldKey  字段key
    * name  字段名称
    * description  字段描述
    * defaultValue  默认值
    * displayType  显示类型
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * iuType  输入输出类型
    * usedBy  使用业务
    * jsonSchema  json模式
    * isBuiltIn  是否内置，true内置，false非内置
    * caseSensitive  大小写敏感，true敏感，false不敏感
    * readOnly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * mapping  是否展示在分类映射外的其他地方
    * targetApi  目标api
    * creatorId  Creator id value
    * creatorName  Creator name value
    * modifierId  Modifier id value
    * modifierName  Modifier name value
    * createTime  Create time
    * updateTime  Update time
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'cloudPackVersion' => 'getCloudPackVersion',
            'businessId' => 'getBusinessId',
            'businessType' => 'getBusinessType',
            'dataclassName' => 'getDataclassName',
            'businessCode' => 'getBusinessCode',
            'fieldKey' => 'getFieldKey',
            'name' => 'getName',
            'description' => 'getDescription',
            'defaultValue' => 'getDefaultValue',
            'displayType' => 'getDisplayType',
            'fieldType' => 'getFieldType',
            'extraJson' => 'getExtraJson',
            'fieldTooltip' => 'getFieldTooltip',
            'iuType' => 'getIuType',
            'usedBy' => 'getUsedBy',
            'jsonSchema' => 'getJsonSchema',
            'isBuiltIn' => 'getIsBuiltIn',
            'caseSensitive' => 'getCaseSensitive',
            'readOnly' => 'getReadOnly',
            'required' => 'getRequired',
            'searchable' => 'getSearchable',
            'visible' => 'getVisible',
            'maintainable' => 'getMaintainable',
            'editable' => 'getEditable',
            'creatable' => 'getCreatable',
            'mapping' => 'getMapping',
            'targetApi' => 'getTargetApi',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['cloudPackVersion'] = isset($data['cloudPackVersion']) ? $data['cloudPackVersion'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['businessType'] = isset($data['businessType']) ? $data['businessType'] : null;
        $this->container['dataclassName'] = isset($data['dataclassName']) ? $data['dataclassName'] : null;
        $this->container['businessCode'] = isset($data['businessCode']) ? $data['businessCode'] : null;
        $this->container['fieldKey'] = isset($data['fieldKey']) ? $data['fieldKey'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['displayType'] = isset($data['displayType']) ? $data['displayType'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['extraJson'] = isset($data['extraJson']) ? $data['extraJson'] : null;
        $this->container['fieldTooltip'] = isset($data['fieldTooltip']) ? $data['fieldTooltip'] : null;
        $this->container['iuType'] = isset($data['iuType']) ? $data['iuType'] : null;
        $this->container['usedBy'] = isset($data['usedBy']) ? $data['usedBy'] : null;
        $this->container['jsonSchema'] = isset($data['jsonSchema']) ? $data['jsonSchema'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['caseSensitive'] = isset($data['caseSensitive']) ? $data['caseSensitive'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['searchable'] = isset($data['searchable']) ? $data['searchable'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['maintainable'] = isset($data['maintainable']) ? $data['maintainable'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['creatable'] = isset($data['creatable']) ? $data['creatable'] : null;
        $this->container['mapping'] = isset($data['mapping']) ? $data['mapping'] : null;
        $this->container['targetApi'] = isset($data['targetApi']) ? $data['targetApi'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['businessId']) && (mb_strlen($this->container['businessId']) > 64)) {
                $invalidProperties[] = "invalid value for 'businessId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['businessId']) && (mb_strlen($this->container['businessId']) < 32)) {
                $invalidProperties[] = "invalid value for 'businessId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['businessType']) && (mb_strlen($this->container['businessType']) > 64)) {
                $invalidProperties[] = "invalid value for 'businessType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['businessType']) && (mb_strlen($this->container['businessType']) < 2)) {
                $invalidProperties[] = "invalid value for 'businessType', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassName']) && (mb_strlen($this->container['dataclassName']) < 2)) {
                $invalidProperties[] = "invalid value for 'dataclassName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['businessCode']) && (mb_strlen($this->container['businessCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'businessCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['businessCode']) && (mb_strlen($this->container['businessCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'businessCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['fieldKey']) && (mb_strlen($this->container['fieldKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'fieldKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fieldKey']) && (mb_strlen($this->container['fieldKey']) < 2)) {
                $invalidProperties[] = "invalid value for 'fieldKey', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 2)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) > 1024)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) < 2)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['displayType']) && (mb_strlen($this->container['displayType']) > 64)) {
                $invalidProperties[] = "invalid value for 'displayType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['displayType']) && (mb_strlen($this->container['displayType']) < 2)) {
                $invalidProperties[] = "invalid value for 'displayType', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['fieldType']) && (mb_strlen($this->container['fieldType']) > 64)) {
                $invalidProperties[] = "invalid value for 'fieldType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fieldType']) && (mb_strlen($this->container['fieldType']) < 2)) {
                $invalidProperties[] = "invalid value for 'fieldType', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['extraJson']) && (mb_strlen($this->container['extraJson']) > 64)) {
                $invalidProperties[] = "invalid value for 'extraJson', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['extraJson']) && (mb_strlen($this->container['extraJson']) < 2)) {
                $invalidProperties[] = "invalid value for 'extraJson', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['fieldTooltip']) && (mb_strlen($this->container['fieldTooltip']) > 64)) {
                $invalidProperties[] = "invalid value for 'fieldTooltip', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['fieldTooltip']) && (mb_strlen($this->container['fieldTooltip']) < 2)) {
                $invalidProperties[] = "invalid value for 'fieldTooltip', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['iuType']) && (mb_strlen($this->container['iuType']) > 64)) {
                $invalidProperties[] = "invalid value for 'iuType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['iuType']) && (mb_strlen($this->container['iuType']) < 2)) {
                $invalidProperties[] = "invalid value for 'iuType', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['usedBy']) && (mb_strlen($this->container['usedBy']) > 64)) {
                $invalidProperties[] = "invalid value for 'usedBy', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['usedBy']) && (mb_strlen($this->container['usedBy']) < 2)) {
                $invalidProperties[] = "invalid value for 'usedBy', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['jsonSchema']) && (mb_strlen($this->container['jsonSchema']) > 64)) {
                $invalidProperties[] = "invalid value for 'jsonSchema', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jsonSchema']) && (mb_strlen($this->container['jsonSchema']) < 2)) {
                $invalidProperties[] = "invalid value for 'jsonSchema', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['targetApi']) && (mb_strlen($this->container['targetApi']) > 1024)) {
                $invalidProperties[] = "invalid value for 'targetApi', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['targetApi']) && (mb_strlen($this->container['targetApi']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetApi', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorId']) && (mb_strlen($this->container['creatorId']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 32)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierId']) && (mb_strlen($this->container['modifierId']) < 32)) {
                $invalidProperties[] = "invalid value for 'modifierId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) > 64)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['modifierName']) && (mb_strlen($this->container['modifierName']) < 32)) {
                $invalidProperties[] = "invalid value for 'modifierName', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
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
    *  Id value
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
    * @param string|null $id Id value
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets cloudPackVersion
    *  订阅包版本
    *
    * @return string|null
    */
    public function getCloudPackVersion()
    {
        return $this->container['cloudPackVersion'];
    }

    /**
    * Sets cloudPackVersion
    *
    * @param string|null $cloudPackVersion 订阅包版本
    *
    * @return $this
    */
    public function setCloudPackVersion($cloudPackVersion)
    {
        $this->container['cloudPackVersion'] = $cloudPackVersion;
        return $this;
    }

    /**
    * Gets businessId
    *  关联业务id
    *
    * @return string|null
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param string|null $businessId 关联业务id
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets businessType
    *  关联业务
    *
    * @return string|null
    */
    public function getBusinessType()
    {
        return $this->container['businessType'];
    }

    /**
    * Sets businessType
    *
    * @param string|null $businessType 关联业务
    *
    * @return $this
    */
    public function setBusinessType($businessType)
    {
        $this->container['businessType'] = $businessType;
        return $this;
    }

    /**
    * Gets dataclassName
    *  数据类名称
    *
    * @return string|null
    */
    public function getDataclassName()
    {
        return $this->container['dataclassName'];
    }

    /**
    * Sets dataclassName
    *
    * @param string|null $dataclassName 数据类名称
    *
    * @return $this
    */
    public function setDataclassName($dataclassName)
    {
        $this->container['dataclassName'] = $dataclassName;
        return $this;
    }

    /**
    * Gets businessCode
    *  字段业务编码
    *
    * @return string|null
    */
    public function getBusinessCode()
    {
        return $this->container['businessCode'];
    }

    /**
    * Sets businessCode
    *
    * @param string|null $businessCode 字段业务编码
    *
    * @return $this
    */
    public function setBusinessCode($businessCode)
    {
        $this->container['businessCode'] = $businessCode;
        return $this;
    }

    /**
    * Gets fieldKey
    *  字段key
    *
    * @return string|null
    */
    public function getFieldKey()
    {
        return $this->container['fieldKey'];
    }

    /**
    * Sets fieldKey
    *
    * @param string|null $fieldKey 字段key
    *
    * @return $this
    */
    public function setFieldKey($fieldKey)
    {
        $this->container['fieldKey'] = $fieldKey;
        return $this;
    }

    /**
    * Gets name
    *  字段名称
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
    * @param string|null $name 字段名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  字段描述
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
    * @param string|null $description 字段描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets displayType
    *  显示类型
    *
    * @return string|null
    */
    public function getDisplayType()
    {
        return $this->container['displayType'];
    }

    /**
    * Sets displayType
    *
    * @param string|null $displayType 显示类型
    *
    * @return $this
    */
    public function setDisplayType($displayType)
    {
        $this->container['displayType'] = $displayType;
        return $this;
    }

    /**
    * Gets fieldType
    *  字段类型，如shorttext,radio,grid等
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
    * @param string|null $fieldType 字段类型，如shorttext,radio,grid等
    *
    * @return $this
    */
    public function setFieldType($fieldType)
    {
        $this->container['fieldType'] = $fieldType;
        return $this;
    }

    /**
    * Gets extraJson
    *  附加json
    *
    * @return string|null
    */
    public function getExtraJson()
    {
        return $this->container['extraJson'];
    }

    /**
    * Sets extraJson
    *
    * @param string|null $extraJson 附加json
    *
    * @return $this
    */
    public function setExtraJson($extraJson)
    {
        $this->container['extraJson'] = $extraJson;
        return $this;
    }

    /**
    * Gets fieldTooltip
    *  工具提示
    *
    * @return string|null
    */
    public function getFieldTooltip()
    {
        return $this->container['fieldTooltip'];
    }

    /**
    * Sets fieldTooltip
    *
    * @param string|null $fieldTooltip 工具提示
    *
    * @return $this
    */
    public function setFieldTooltip($fieldTooltip)
    {
        $this->container['fieldTooltip'] = $fieldTooltip;
        return $this;
    }

    /**
    * Gets iuType
    *  输入输出类型
    *
    * @return string|null
    */
    public function getIuType()
    {
        return $this->container['iuType'];
    }

    /**
    * Sets iuType
    *
    * @param string|null $iuType 输入输出类型
    *
    * @return $this
    */
    public function setIuType($iuType)
    {
        $this->container['iuType'] = $iuType;
        return $this;
    }

    /**
    * Gets usedBy
    *  使用业务
    *
    * @return string|null
    */
    public function getUsedBy()
    {
        return $this->container['usedBy'];
    }

    /**
    * Sets usedBy
    *
    * @param string|null $usedBy 使用业务
    *
    * @return $this
    */
    public function setUsedBy($usedBy)
    {
        $this->container['usedBy'] = $usedBy;
        return $this;
    }

    /**
    * Gets jsonSchema
    *  json模式
    *
    * @return string|null
    */
    public function getJsonSchema()
    {
        return $this->container['jsonSchema'];
    }

    /**
    * Sets jsonSchema
    *
    * @param string|null $jsonSchema json模式
    *
    * @return $this
    */
    public function setJsonSchema($jsonSchema)
    {
        $this->container['jsonSchema'] = $jsonSchema;
        return $this;
    }

    /**
    * Gets isBuiltIn
    *  是否内置，true内置，false非内置
    *
    * @return bool|null
    */
    public function getIsBuiltIn()
    {
        return $this->container['isBuiltIn'];
    }

    /**
    * Sets isBuiltIn
    *
    * @param bool|null $isBuiltIn 是否内置，true内置，false非内置
    *
    * @return $this
    */
    public function setIsBuiltIn($isBuiltIn)
    {
        $this->container['isBuiltIn'] = $isBuiltIn;
        return $this;
    }

    /**
    * Gets caseSensitive
    *  大小写敏感，true敏感，false不敏感
    *
    * @return bool|null
    */
    public function getCaseSensitive()
    {
        return $this->container['caseSensitive'];
    }

    /**
    * Sets caseSensitive
    *
    * @param bool|null $caseSensitive 大小写敏感，true敏感，false不敏感
    *
    * @return $this
    */
    public function setCaseSensitive($caseSensitive)
    {
        $this->container['caseSensitive'] = $caseSensitive;
        return $this;
    }

    /**
    * Gets readOnly
    *  只读模式，true只读，false非只读
    *
    * @return bool|null
    */
    public function getReadOnly()
    {
        return $this->container['readOnly'];
    }

    /**
    * Sets readOnly
    *
    * @param bool|null $readOnly 只读模式，true只读，false非只读
    *
    * @return $this
    */
    public function setReadOnly($readOnly)
    {
        $this->container['readOnly'] = $readOnly;
        return $this;
    }

    /**
    * Gets required
    *  是否必填，true必填，false非必填
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
    * @param bool|null $required 是否必填，true必填，false非必填
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets searchable
    *  可搜索，true可搜索，false非可搜索
    *
    * @return bool|null
    */
    public function getSearchable()
    {
        return $this->container['searchable'];
    }

    /**
    * Sets searchable
    *
    * @param bool|null $searchable 可搜索，true可搜索，false非可搜索
    *
    * @return $this
    */
    public function setSearchable($searchable)
    {
        $this->container['searchable'] = $searchable;
        return $this;
    }

    /**
    * Gets visible
    *  可见，true可见，false非可见
    *
    * @return bool|null
    */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
    * Sets visible
    *
    * @param bool|null $visible 可见，true可见，false非可见
    *
    * @return $this
    */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;
        return $this;
    }

    /**
    * Gets maintainable
    *  可维护，true可维护，false非可维护
    *
    * @return bool|null
    */
    public function getMaintainable()
    {
        return $this->container['maintainable'];
    }

    /**
    * Sets maintainable
    *
    * @param bool|null $maintainable 可维护，true可维护，false非可维护
    *
    * @return $this
    */
    public function setMaintainable($maintainable)
    {
        $this->container['maintainable'] = $maintainable;
        return $this;
    }

    /**
    * Gets editable
    *  可编辑，true可编辑，false非可编辑
    *
    * @return bool|null
    */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
    * Sets editable
    *
    * @param bool|null $editable 可编辑，true可编辑，false非可编辑
    *
    * @return $this
    */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;
        return $this;
    }

    /**
    * Gets creatable
    *  可创建，true可创建，false非可创建
    *
    * @return bool|null
    */
    public function getCreatable()
    {
        return $this->container['creatable'];
    }

    /**
    * Sets creatable
    *
    * @param bool|null $creatable 可创建，true可创建，false非可创建
    *
    * @return $this
    */
    public function setCreatable($creatable)
    {
        $this->container['creatable'] = $creatable;
        return $this;
    }

    /**
    * Gets mapping
    *  是否展示在分类映射外的其他地方
    *
    * @return bool|null
    */
    public function getMapping()
    {
        return $this->container['mapping'];
    }

    /**
    * Sets mapping
    *
    * @param bool|null $mapping 是否展示在分类映射外的其他地方
    *
    * @return $this
    */
    public function setMapping($mapping)
    {
        $this->container['mapping'] = $mapping;
        return $this;
    }

    /**
    * Gets targetApi
    *  目标api
    *
    * @return string|null
    */
    public function getTargetApi()
    {
        return $this->container['targetApi'];
    }

    /**
    * Sets targetApi
    *
    * @param string|null $targetApi 目标api
    *
    * @return $this
    */
    public function setTargetApi($targetApi)
    {
        $this->container['targetApi'] = $targetApi;
        return $this;
    }

    /**
    * Gets creatorId
    *  Creator id value
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId Creator id value
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets creatorName
    *  Creator name value
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName Creator name value
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets modifierId
    *  Modifier id value
    *
    * @return string|null
    */
    public function getModifierId()
    {
        return $this->container['modifierId'];
    }

    /**
    * Sets modifierId
    *
    * @param string|null $modifierId Modifier id value
    *
    * @return $this
    */
    public function setModifierId($modifierId)
    {
        $this->container['modifierId'] = $modifierId;
        return $this;
    }

    /**
    * Gets modifierName
    *  Modifier name value
    *
    * @return string|null
    */
    public function getModifierName()
    {
        return $this->container['modifierName'];
    }

    /**
    * Sets modifierName
    *
    * @param string|null $modifierName Modifier name value
    *
    * @return $this
    */
    public function setModifierName($modifierName)
    {
        $this->container['modifierName'] = $modifierName;
        return $this;
    }

    /**
    * Gets createTime
    *  Create time
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime Create time
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  Update time
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime Update time
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

