<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLayoutFieldResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLayoutFieldResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  字段ID
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * dataclassId  数据类ID
    * cloudPackVersion  订阅包版本
    * fieldKey  字段key
    * name  字段名称
    * description  字段描述
    * enDescription  字段英文描述
    * defaultValue  默认值
    * enDefaultValue  字段英文默认值
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * enFieldTooltip  英文工具提示
    * jsonSchema  json模式
    * isBuiltIn  是否内置，true内置，false非内置
    * readOnly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * createTime  创建时间
    * updateTime  更新时间
    * wizardId  字段绑定的页面id
    * aopworkflowId  字段绑定的流程id
    * aopworkflowVersionId  字段绑定的流程版本id
    * playbookId  字段绑定的剧本id
    * playbookVersionId  字段绑定的剧本版本id
    * boaVersion  BOA底座版本
    * version  安全云脑版本
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'cloudPackId' => 'string',
            'cloudPackName' => 'string',
            'dataclassId' => 'string',
            'cloudPackVersion' => 'string',
            'fieldKey' => 'string',
            'name' => 'string',
            'description' => 'string',
            'enDescription' => 'string',
            'defaultValue' => 'string',
            'enDefaultValue' => 'string',
            'fieldType' => 'string',
            'extraJson' => 'string',
            'fieldTooltip' => 'string',
            'enFieldTooltip' => 'string',
            'jsonSchema' => 'string',
            'isBuiltIn' => 'bool',
            'readOnly' => 'bool',
            'required' => 'bool',
            'searchable' => 'bool',
            'visible' => 'bool',
            'maintainable' => 'bool',
            'editable' => 'bool',
            'creatable' => 'bool',
            'creatorId' => 'string',
            'creatorName' => 'string',
            'modifierId' => 'string',
            'modifierName' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'wizardId' => 'string',
            'aopworkflowId' => 'string',
            'aopworkflowVersionId' => 'string',
            'playbookId' => 'string',
            'playbookVersionId' => 'string',
            'boaVersion' => 'string',
            'version' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  字段ID
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * dataclassId  数据类ID
    * cloudPackVersion  订阅包版本
    * fieldKey  字段key
    * name  字段名称
    * description  字段描述
    * enDescription  字段英文描述
    * defaultValue  默认值
    * enDefaultValue  字段英文默认值
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * enFieldTooltip  英文工具提示
    * jsonSchema  json模式
    * isBuiltIn  是否内置，true内置，false非内置
    * readOnly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * createTime  创建时间
    * updateTime  更新时间
    * wizardId  字段绑定的页面id
    * aopworkflowId  字段绑定的流程id
    * aopworkflowVersionId  字段绑定的流程版本id
    * playbookId  字段绑定的剧本id
    * playbookVersionId  字段绑定的剧本版本id
    * boaVersion  BOA底座版本
    * version  安全云脑版本
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'cloudPackId' => null,
        'cloudPackName' => null,
        'dataclassId' => null,
        'cloudPackVersion' => null,
        'fieldKey' => null,
        'name' => null,
        'description' => null,
        'enDescription' => null,
        'defaultValue' => null,
        'enDefaultValue' => null,
        'fieldType' => null,
        'extraJson' => null,
        'fieldTooltip' => null,
        'enFieldTooltip' => null,
        'jsonSchema' => null,
        'isBuiltIn' => null,
        'readOnly' => null,
        'required' => null,
        'searchable' => null,
        'visible' => null,
        'maintainable' => null,
        'editable' => null,
        'creatable' => null,
        'creatorId' => null,
        'creatorName' => null,
        'modifierId' => null,
        'modifierName' => null,
        'createTime' => null,
        'updateTime' => null,
        'wizardId' => null,
        'aopworkflowId' => null,
        'aopworkflowVersionId' => null,
        'playbookId' => null,
        'playbookVersionId' => null,
        'boaVersion' => null,
        'version' => null,
        'xRequestId' => null
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
    * id  字段ID
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * dataclassId  数据类ID
    * cloudPackVersion  订阅包版本
    * fieldKey  字段key
    * name  字段名称
    * description  字段描述
    * enDescription  字段英文描述
    * defaultValue  默认值
    * enDefaultValue  字段英文默认值
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * enFieldTooltip  英文工具提示
    * jsonSchema  json模式
    * isBuiltIn  是否内置，true内置，false非内置
    * readOnly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * createTime  创建时间
    * updateTime  更新时间
    * wizardId  字段绑定的页面id
    * aopworkflowId  字段绑定的流程id
    * aopworkflowVersionId  字段绑定的流程版本id
    * playbookId  字段绑定的剧本id
    * playbookVersionId  字段绑定的剧本版本id
    * boaVersion  BOA底座版本
    * version  安全云脑版本
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'cloudPackId' => 'cloud_pack_id',
            'cloudPackName' => 'cloud_pack_name',
            'dataclassId' => 'dataclass_id',
            'cloudPackVersion' => 'cloud_pack_version',
            'fieldKey' => 'field_key',
            'name' => 'name',
            'description' => 'description',
            'enDescription' => 'en_description',
            'defaultValue' => 'default_value',
            'enDefaultValue' => 'en_default_value',
            'fieldType' => 'field_type',
            'extraJson' => 'extra_json',
            'fieldTooltip' => 'field_tooltip',
            'enFieldTooltip' => 'en_field_tooltip',
            'jsonSchema' => 'json_schema',
            'isBuiltIn' => 'is_built_in',
            'readOnly' => 'read_only',
            'required' => 'required',
            'searchable' => 'searchable',
            'visible' => 'visible',
            'maintainable' => 'maintainable',
            'editable' => 'editable',
            'creatable' => 'creatable',
            'creatorId' => 'creator_id',
            'creatorName' => 'creator_name',
            'modifierId' => 'modifier_id',
            'modifierName' => 'modifier_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'wizardId' => 'wizard_id',
            'aopworkflowId' => 'aopworkflow_id',
            'aopworkflowVersionId' => 'aopworkflow_version_id',
            'playbookId' => 'playbook_id',
            'playbookVersionId' => 'playbook_version_id',
            'boaVersion' => 'boa_version',
            'version' => 'version',
            'xRequestId' => 'X-request-id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  字段ID
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * dataclassId  数据类ID
    * cloudPackVersion  订阅包版本
    * fieldKey  字段key
    * name  字段名称
    * description  字段描述
    * enDescription  字段英文描述
    * defaultValue  默认值
    * enDefaultValue  字段英文默认值
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * enFieldTooltip  英文工具提示
    * jsonSchema  json模式
    * isBuiltIn  是否内置，true内置，false非内置
    * readOnly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * createTime  创建时间
    * updateTime  更新时间
    * wizardId  字段绑定的页面id
    * aopworkflowId  字段绑定的流程id
    * aopworkflowVersionId  字段绑定的流程版本id
    * playbookId  字段绑定的剧本id
    * playbookVersionId  字段绑定的剧本版本id
    * boaVersion  BOA底座版本
    * version  安全云脑版本
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'cloudPackId' => 'setCloudPackId',
            'cloudPackName' => 'setCloudPackName',
            'dataclassId' => 'setDataclassId',
            'cloudPackVersion' => 'setCloudPackVersion',
            'fieldKey' => 'setFieldKey',
            'name' => 'setName',
            'description' => 'setDescription',
            'enDescription' => 'setEnDescription',
            'defaultValue' => 'setDefaultValue',
            'enDefaultValue' => 'setEnDefaultValue',
            'fieldType' => 'setFieldType',
            'extraJson' => 'setExtraJson',
            'fieldTooltip' => 'setFieldTooltip',
            'enFieldTooltip' => 'setEnFieldTooltip',
            'jsonSchema' => 'setJsonSchema',
            'isBuiltIn' => 'setIsBuiltIn',
            'readOnly' => 'setReadOnly',
            'required' => 'setRequired',
            'searchable' => 'setSearchable',
            'visible' => 'setVisible',
            'maintainable' => 'setMaintainable',
            'editable' => 'setEditable',
            'creatable' => 'setCreatable',
            'creatorId' => 'setCreatorId',
            'creatorName' => 'setCreatorName',
            'modifierId' => 'setModifierId',
            'modifierName' => 'setModifierName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'wizardId' => 'setWizardId',
            'aopworkflowId' => 'setAopworkflowId',
            'aopworkflowVersionId' => 'setAopworkflowVersionId',
            'playbookId' => 'setPlaybookId',
            'playbookVersionId' => 'setPlaybookVersionId',
            'boaVersion' => 'setBoaVersion',
            'version' => 'setVersion',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  字段ID
    * cloudPackId  订阅包id
    * cloudPackName  订阅包名称
    * dataclassId  数据类ID
    * cloudPackVersion  订阅包版本
    * fieldKey  字段key
    * name  字段名称
    * description  字段描述
    * enDescription  字段英文描述
    * defaultValue  默认值
    * enDefaultValue  字段英文默认值
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * enFieldTooltip  英文工具提示
    * jsonSchema  json模式
    * isBuiltIn  是否内置，true内置，false非内置
    * readOnly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * creatorId  创建者ID
    * creatorName  创建者名称
    * modifierId  修改者ID
    * modifierName  修改者名称
    * createTime  创建时间
    * updateTime  更新时间
    * wizardId  字段绑定的页面id
    * aopworkflowId  字段绑定的流程id
    * aopworkflowVersionId  字段绑定的流程版本id
    * playbookId  字段绑定的剧本id
    * playbookVersionId  字段绑定的剧本版本id
    * boaVersion  BOA底座版本
    * version  安全云脑版本
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'cloudPackId' => 'getCloudPackId',
            'cloudPackName' => 'getCloudPackName',
            'dataclassId' => 'getDataclassId',
            'cloudPackVersion' => 'getCloudPackVersion',
            'fieldKey' => 'getFieldKey',
            'name' => 'getName',
            'description' => 'getDescription',
            'enDescription' => 'getEnDescription',
            'defaultValue' => 'getDefaultValue',
            'enDefaultValue' => 'getEnDefaultValue',
            'fieldType' => 'getFieldType',
            'extraJson' => 'getExtraJson',
            'fieldTooltip' => 'getFieldTooltip',
            'enFieldTooltip' => 'getEnFieldTooltip',
            'jsonSchema' => 'getJsonSchema',
            'isBuiltIn' => 'getIsBuiltIn',
            'readOnly' => 'getReadOnly',
            'required' => 'getRequired',
            'searchable' => 'getSearchable',
            'visible' => 'getVisible',
            'maintainable' => 'getMaintainable',
            'editable' => 'getEditable',
            'creatable' => 'getCreatable',
            'creatorId' => 'getCreatorId',
            'creatorName' => 'getCreatorName',
            'modifierId' => 'getModifierId',
            'modifierName' => 'getModifierName',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'wizardId' => 'getWizardId',
            'aopworkflowId' => 'getAopworkflowId',
            'aopworkflowVersionId' => 'getAopworkflowVersionId',
            'playbookId' => 'getPlaybookId',
            'playbookVersionId' => 'getPlaybookVersionId',
            'boaVersion' => 'getBoaVersion',
            'version' => 'getVersion',
            'xRequestId' => 'getXRequestId'
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
        $this->container['cloudPackId'] = isset($data['cloudPackId']) ? $data['cloudPackId'] : null;
        $this->container['cloudPackName'] = isset($data['cloudPackName']) ? $data['cloudPackName'] : null;
        $this->container['dataclassId'] = isset($data['dataclassId']) ? $data['dataclassId'] : null;
        $this->container['cloudPackVersion'] = isset($data['cloudPackVersion']) ? $data['cloudPackVersion'] : null;
        $this->container['fieldKey'] = isset($data['fieldKey']) ? $data['fieldKey'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enDescription'] = isset($data['enDescription']) ? $data['enDescription'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['enDefaultValue'] = isset($data['enDefaultValue']) ? $data['enDefaultValue'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['extraJson'] = isset($data['extraJson']) ? $data['extraJson'] : null;
        $this->container['fieldTooltip'] = isset($data['fieldTooltip']) ? $data['fieldTooltip'] : null;
        $this->container['enFieldTooltip'] = isset($data['enFieldTooltip']) ? $data['enFieldTooltip'] : null;
        $this->container['jsonSchema'] = isset($data['jsonSchema']) ? $data['jsonSchema'] : null;
        $this->container['isBuiltIn'] = isset($data['isBuiltIn']) ? $data['isBuiltIn'] : null;
        $this->container['readOnly'] = isset($data['readOnly']) ? $data['readOnly'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['searchable'] = isset($data['searchable']) ? $data['searchable'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['maintainable'] = isset($data['maintainable']) ? $data['maintainable'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['creatable'] = isset($data['creatable']) ? $data['creatable'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['modifierId'] = isset($data['modifierId']) ? $data['modifierId'] : null;
        $this->container['modifierName'] = isset($data['modifierName']) ? $data['modifierName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['wizardId'] = isset($data['wizardId']) ? $data['wizardId'] : null;
        $this->container['aopworkflowId'] = isset($data['aopworkflowId']) ? $data['aopworkflowId'] : null;
        $this->container['aopworkflowVersionId'] = isset($data['aopworkflowVersionId']) ? $data['aopworkflowVersionId'] : null;
        $this->container['playbookId'] = isset($data['playbookId']) ? $data['playbookId'] : null;
        $this->container['playbookVersionId'] = isset($data['playbookVersionId']) ? $data['playbookVersionId'] : null;
        $this->container['boaVersion'] = isset($data['boaVersion']) ? $data['boaVersion'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackId']) && (mb_strlen($this->container['cloudPackId']) < 32)) {
                $invalidProperties[] = "invalid value for 'cloudPackId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackName']) && (mb_strlen($this->container['cloudPackName']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) > 64)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['dataclassId']) && (mb_strlen($this->container['dataclassId']) < 32)) {
                $invalidProperties[] = "invalid value for 'dataclassId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudPackVersion']) && (mb_strlen($this->container['cloudPackVersion']) < 2)) {
                $invalidProperties[] = "invalid value for 'cloudPackVersion', the character length must be bigger than or equal to 2.";
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
            if (!is_null($this->container['enDescription']) && (mb_strlen($this->container['enDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'enDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['enDescription']) && (mb_strlen($this->container['enDescription']) < 2)) {
                $invalidProperties[] = "invalid value for 'enDescription', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) > 1024)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) < 2)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['enDefaultValue']) && (mb_strlen($this->container['enDefaultValue']) > 1024)) {
                $invalidProperties[] = "invalid value for 'enDefaultValue', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['enDefaultValue']) && (mb_strlen($this->container['enDefaultValue']) < 2)) {
                $invalidProperties[] = "invalid value for 'enDefaultValue', the character length must be bigger than or equal to 2.";
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
            if (!is_null($this->container['enFieldTooltip']) && (mb_strlen($this->container['enFieldTooltip']) > 64)) {
                $invalidProperties[] = "invalid value for 'enFieldTooltip', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enFieldTooltip']) && (mb_strlen($this->container['enFieldTooltip']) < 2)) {
                $invalidProperties[] = "invalid value for 'enFieldTooltip', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['jsonSchema']) && (mb_strlen($this->container['jsonSchema']) > 64)) {
                $invalidProperties[] = "invalid value for 'jsonSchema', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jsonSchema']) && (mb_strlen($this->container['jsonSchema']) < 2)) {
                $invalidProperties[] = "invalid value for 'jsonSchema', the character length must be bigger than or equal to 2.";
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
            if (!is_null($this->container['wizardId']) && (mb_strlen($this->container['wizardId']) > 64)) {
                $invalidProperties[] = "invalid value for 'wizardId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['wizardId']) && (mb_strlen($this->container['wizardId']) < 0)) {
                $invalidProperties[] = "invalid value for 'wizardId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aopworkflowId']) && (mb_strlen($this->container['aopworkflowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'aopworkflowId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aopworkflowId']) && (mb_strlen($this->container['aopworkflowId']) < 0)) {
                $invalidProperties[] = "invalid value for 'aopworkflowId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['aopworkflowVersionId']) && (mb_strlen($this->container['aopworkflowVersionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'aopworkflowVersionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['aopworkflowVersionId']) && (mb_strlen($this->container['aopworkflowVersionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'aopworkflowVersionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['playbookId']) && (mb_strlen($this->container['playbookId']) > 64)) {
                $invalidProperties[] = "invalid value for 'playbookId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['playbookId']) && (mb_strlen($this->container['playbookId']) < 0)) {
                $invalidProperties[] = "invalid value for 'playbookId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['playbookVersionId']) && (mb_strlen($this->container['playbookVersionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'playbookVersionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['playbookVersionId']) && (mb_strlen($this->container['playbookVersionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'playbookVersionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) < 32)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 32)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 32.";
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
    *  字段ID
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
    * @param string|null $id 字段ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets cloudPackId
    *  订阅包id
    *
    * @return string|null
    */
    public function getCloudPackId()
    {
        return $this->container['cloudPackId'];
    }

    /**
    * Sets cloudPackId
    *
    * @param string|null $cloudPackId 订阅包id
    *
    * @return $this
    */
    public function setCloudPackId($cloudPackId)
    {
        $this->container['cloudPackId'] = $cloudPackId;
        return $this;
    }

    /**
    * Gets cloudPackName
    *  订阅包名称
    *
    * @return string|null
    */
    public function getCloudPackName()
    {
        return $this->container['cloudPackName'];
    }

    /**
    * Sets cloudPackName
    *
    * @param string|null $cloudPackName 订阅包名称
    *
    * @return $this
    */
    public function setCloudPackName($cloudPackName)
    {
        $this->container['cloudPackName'] = $cloudPackName;
        return $this;
    }

    /**
    * Gets dataclassId
    *  数据类ID
    *
    * @return string|null
    */
    public function getDataclassId()
    {
        return $this->container['dataclassId'];
    }

    /**
    * Sets dataclassId
    *
    * @param string|null $dataclassId 数据类ID
    *
    * @return $this
    */
    public function setDataclassId($dataclassId)
    {
        $this->container['dataclassId'] = $dataclassId;
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
    * Gets enDescription
    *  字段英文描述
    *
    * @return string|null
    */
    public function getEnDescription()
    {
        return $this->container['enDescription'];
    }

    /**
    * Sets enDescription
    *
    * @param string|null $enDescription 字段英文描述
    *
    * @return $this
    */
    public function setEnDescription($enDescription)
    {
        $this->container['enDescription'] = $enDescription;
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
    * Gets enDefaultValue
    *  字段英文默认值
    *
    * @return string|null
    */
    public function getEnDefaultValue()
    {
        return $this->container['enDefaultValue'];
    }

    /**
    * Sets enDefaultValue
    *
    * @param string|null $enDefaultValue 字段英文默认值
    *
    * @return $this
    */
    public function setEnDefaultValue($enDefaultValue)
    {
        $this->container['enDefaultValue'] = $enDefaultValue;
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
    * Gets enFieldTooltip
    *  英文工具提示
    *
    * @return string|null
    */
    public function getEnFieldTooltip()
    {
        return $this->container['enFieldTooltip'];
    }

    /**
    * Sets enFieldTooltip
    *
    * @param string|null $enFieldTooltip 英文工具提示
    *
    * @return $this
    */
    public function setEnFieldTooltip($enFieldTooltip)
    {
        $this->container['enFieldTooltip'] = $enFieldTooltip;
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
    * Gets creatorId
    *  创建者ID
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
    * @param string|null $creatorId 创建者ID
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
    *  创建者名称
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
    * @param string|null $creatorName 创建者名称
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
    *  修改者ID
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
    * @param string|null $modifierId 修改者ID
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
    *  修改者名称
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
    * @param string|null $modifierName 修改者名称
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
    *  创建时间
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
    * @param string|null $createTime 创建时间
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
    *  更新时间
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
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets wizardId
    *  字段绑定的页面id
    *
    * @return string|null
    */
    public function getWizardId()
    {
        return $this->container['wizardId'];
    }

    /**
    * Sets wizardId
    *
    * @param string|null $wizardId 字段绑定的页面id
    *
    * @return $this
    */
    public function setWizardId($wizardId)
    {
        $this->container['wizardId'] = $wizardId;
        return $this;
    }

    /**
    * Gets aopworkflowId
    *  字段绑定的流程id
    *
    * @return string|null
    */
    public function getAopworkflowId()
    {
        return $this->container['aopworkflowId'];
    }

    /**
    * Sets aopworkflowId
    *
    * @param string|null $aopworkflowId 字段绑定的流程id
    *
    * @return $this
    */
    public function setAopworkflowId($aopworkflowId)
    {
        $this->container['aopworkflowId'] = $aopworkflowId;
        return $this;
    }

    /**
    * Gets aopworkflowVersionId
    *  字段绑定的流程版本id
    *
    * @return string|null
    */
    public function getAopworkflowVersionId()
    {
        return $this->container['aopworkflowVersionId'];
    }

    /**
    * Sets aopworkflowVersionId
    *
    * @param string|null $aopworkflowVersionId 字段绑定的流程版本id
    *
    * @return $this
    */
    public function setAopworkflowVersionId($aopworkflowVersionId)
    {
        $this->container['aopworkflowVersionId'] = $aopworkflowVersionId;
        return $this;
    }

    /**
    * Gets playbookId
    *  字段绑定的剧本id
    *
    * @return string|null
    */
    public function getPlaybookId()
    {
        return $this->container['playbookId'];
    }

    /**
    * Sets playbookId
    *
    * @param string|null $playbookId 字段绑定的剧本id
    *
    * @return $this
    */
    public function setPlaybookId($playbookId)
    {
        $this->container['playbookId'] = $playbookId;
        return $this;
    }

    /**
    * Gets playbookVersionId
    *  字段绑定的剧本版本id
    *
    * @return string|null
    */
    public function getPlaybookVersionId()
    {
        return $this->container['playbookVersionId'];
    }

    /**
    * Sets playbookVersionId
    *
    * @param string|null $playbookVersionId 字段绑定的剧本版本id
    *
    * @return $this
    */
    public function setPlaybookVersionId($playbookVersionId)
    {
        $this->container['playbookVersionId'] = $playbookVersionId;
        return $this;
    }

    /**
    * Gets boaVersion
    *  BOA底座版本
    *
    * @return string|null
    */
    public function getBoaVersion()
    {
        return $this->container['boaVersion'];
    }

    /**
    * Sets boaVersion
    *
    * @param string|null $boaVersion BOA底座版本
    *
    * @return $this
    */
    public function setBoaVersion($boaVersion)
    {
        $this->container['boaVersion'] = $boaVersion;
        return $this;
    }

    /**
    * Gets version
    *  安全云脑版本
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 安全云脑版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

