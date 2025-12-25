<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLayoutFieldRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLayoutFieldRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  字段名称
    * fieldKey  字段键
    * description  字段描述
    * layoutId  布局ID
    * wizardId  字段绑定的页面id
    * aopworkflowId  字段绑定的流程id
    * aopworkflowVersionId  字段绑定的流程版本id
    * playbookId  字段绑定的剧本id
    * playbookVersionId  字段绑定的剧本版本id
    * defaultValue  默认值
    * displayType  显示类型
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * jsonSchema  json模式
    * readonly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'fieldKey' => 'string',
            'description' => 'string',
            'layoutId' => 'string',
            'wizardId' => 'string',
            'aopworkflowId' => 'string',
            'aopworkflowVersionId' => 'string',
            'playbookId' => 'string',
            'playbookVersionId' => 'string',
            'defaultValue' => 'string',
            'displayType' => 'string',
            'fieldType' => 'string',
            'extraJson' => 'string',
            'fieldTooltip' => 'string',
            'jsonSchema' => 'string',
            'readonly' => 'bool',
            'required' => 'bool',
            'searchable' => 'bool',
            'visible' => 'bool',
            'maintainable' => 'bool',
            'editable' => 'bool',
            'creatable' => 'bool',
            'boaVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  字段名称
    * fieldKey  字段键
    * description  字段描述
    * layoutId  布局ID
    * wizardId  字段绑定的页面id
    * aopworkflowId  字段绑定的流程id
    * aopworkflowVersionId  字段绑定的流程版本id
    * playbookId  字段绑定的剧本id
    * playbookVersionId  字段绑定的剧本版本id
    * defaultValue  默认值
    * displayType  显示类型
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * jsonSchema  json模式
    * readonly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'fieldKey' => null,
        'description' => null,
        'layoutId' => null,
        'wizardId' => null,
        'aopworkflowId' => null,
        'aopworkflowVersionId' => null,
        'playbookId' => null,
        'playbookVersionId' => null,
        'defaultValue' => null,
        'displayType' => null,
        'fieldType' => null,
        'extraJson' => null,
        'fieldTooltip' => null,
        'jsonSchema' => null,
        'readonly' => null,
        'required' => null,
        'searchable' => null,
        'visible' => null,
        'maintainable' => null,
        'editable' => null,
        'creatable' => null,
        'boaVersion' => null
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
    * name  字段名称
    * fieldKey  字段键
    * description  字段描述
    * layoutId  布局ID
    * wizardId  字段绑定的页面id
    * aopworkflowId  字段绑定的流程id
    * aopworkflowVersionId  字段绑定的流程版本id
    * playbookId  字段绑定的剧本id
    * playbookVersionId  字段绑定的剧本版本id
    * defaultValue  默认值
    * displayType  显示类型
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * jsonSchema  json模式
    * readonly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'fieldKey' => 'field_key',
            'description' => 'description',
            'layoutId' => 'layout_id',
            'wizardId' => 'wizard_id',
            'aopworkflowId' => 'aopworkflow_id',
            'aopworkflowVersionId' => 'aopworkflow_version_id',
            'playbookId' => 'playbook_id',
            'playbookVersionId' => 'playbook_version_id',
            'defaultValue' => 'default_value',
            'displayType' => 'display_type',
            'fieldType' => 'field_type',
            'extraJson' => 'extra_json',
            'fieldTooltip' => 'field_tooltip',
            'jsonSchema' => 'json_schema',
            'readonly' => 'readonly',
            'required' => 'required',
            'searchable' => 'searchable',
            'visible' => 'visible',
            'maintainable' => 'maintainable',
            'editable' => 'editable',
            'creatable' => 'creatable',
            'boaVersion' => 'boa_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  字段名称
    * fieldKey  字段键
    * description  字段描述
    * layoutId  布局ID
    * wizardId  字段绑定的页面id
    * aopworkflowId  字段绑定的流程id
    * aopworkflowVersionId  字段绑定的流程版本id
    * playbookId  字段绑定的剧本id
    * playbookVersionId  字段绑定的剧本版本id
    * defaultValue  默认值
    * displayType  显示类型
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * jsonSchema  json模式
    * readonly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'fieldKey' => 'setFieldKey',
            'description' => 'setDescription',
            'layoutId' => 'setLayoutId',
            'wizardId' => 'setWizardId',
            'aopworkflowId' => 'setAopworkflowId',
            'aopworkflowVersionId' => 'setAopworkflowVersionId',
            'playbookId' => 'setPlaybookId',
            'playbookVersionId' => 'setPlaybookVersionId',
            'defaultValue' => 'setDefaultValue',
            'displayType' => 'setDisplayType',
            'fieldType' => 'setFieldType',
            'extraJson' => 'setExtraJson',
            'fieldTooltip' => 'setFieldTooltip',
            'jsonSchema' => 'setJsonSchema',
            'readonly' => 'setReadonly',
            'required' => 'setRequired',
            'searchable' => 'setSearchable',
            'visible' => 'setVisible',
            'maintainable' => 'setMaintainable',
            'editable' => 'setEditable',
            'creatable' => 'setCreatable',
            'boaVersion' => 'setBoaVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  字段名称
    * fieldKey  字段键
    * description  字段描述
    * layoutId  布局ID
    * wizardId  字段绑定的页面id
    * aopworkflowId  字段绑定的流程id
    * aopworkflowVersionId  字段绑定的流程版本id
    * playbookId  字段绑定的剧本id
    * playbookVersionId  字段绑定的剧本版本id
    * defaultValue  默认值
    * displayType  显示类型
    * fieldType  字段类型，如shorttext,radio,grid等
    * extraJson  附加json
    * fieldTooltip  工具提示
    * jsonSchema  json模式
    * readonly  只读模式，true只读，false非只读
    * required  是否必填，true必填，false非必填
    * searchable  可搜索，true可搜索，false非可搜索
    * visible  可见，true可见，false非可见
    * maintainable  可维护，true可维护，false非可维护
    * editable  可编辑，true可编辑，false非可编辑
    * creatable  可创建，true可创建，false非可创建
    * boaVersion  BOA底座版本
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'fieldKey' => 'getFieldKey',
            'description' => 'getDescription',
            'layoutId' => 'getLayoutId',
            'wizardId' => 'getWizardId',
            'aopworkflowId' => 'getAopworkflowId',
            'aopworkflowVersionId' => 'getAopworkflowVersionId',
            'playbookId' => 'getPlaybookId',
            'playbookVersionId' => 'getPlaybookVersionId',
            'defaultValue' => 'getDefaultValue',
            'displayType' => 'getDisplayType',
            'fieldType' => 'getFieldType',
            'extraJson' => 'getExtraJson',
            'fieldTooltip' => 'getFieldTooltip',
            'jsonSchema' => 'getJsonSchema',
            'readonly' => 'getReadonly',
            'required' => 'getRequired',
            'searchable' => 'getSearchable',
            'visible' => 'getVisible',
            'maintainable' => 'getMaintainable',
            'editable' => 'getEditable',
            'creatable' => 'getCreatable',
            'boaVersion' => 'getBoaVersion'
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
        $this->container['fieldKey'] = isset($data['fieldKey']) ? $data['fieldKey'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['layoutId'] = isset($data['layoutId']) ? $data['layoutId'] : null;
        $this->container['wizardId'] = isset($data['wizardId']) ? $data['wizardId'] : null;
        $this->container['aopworkflowId'] = isset($data['aopworkflowId']) ? $data['aopworkflowId'] : null;
        $this->container['aopworkflowVersionId'] = isset($data['aopworkflowVersionId']) ? $data['aopworkflowVersionId'] : null;
        $this->container['playbookId'] = isset($data['playbookId']) ? $data['playbookId'] : null;
        $this->container['playbookVersionId'] = isset($data['playbookVersionId']) ? $data['playbookVersionId'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['displayType'] = isset($data['displayType']) ? $data['displayType'] : null;
        $this->container['fieldType'] = isset($data['fieldType']) ? $data['fieldType'] : null;
        $this->container['extraJson'] = isset($data['extraJson']) ? $data['extraJson'] : null;
        $this->container['fieldTooltip'] = isset($data['fieldTooltip']) ? $data['fieldTooltip'] : null;
        $this->container['jsonSchema'] = isset($data['jsonSchema']) ? $data['jsonSchema'] : null;
        $this->container['readonly'] = isset($data['readonly']) ? $data['readonly'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['searchable'] = isset($data['searchable']) ? $data['searchable'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['maintainable'] = isset($data['maintainable']) ? $data['maintainable'] : null;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['creatable'] = isset($data['creatable']) ? $data['creatable'] : null;
        $this->container['boaVersion'] = isset($data['boaVersion']) ? $data['boaVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['fieldKey'] === null) {
            $invalidProperties[] = "'fieldKey' can't be null";
        }
            if ((mb_strlen($this->container['fieldKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'fieldKey', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['fieldKey']) < 2)) {
                $invalidProperties[] = "invalid value for 'fieldKey', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 2)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['layoutId']) && (mb_strlen($this->container['layoutId']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutId']) && (mb_strlen($this->container['layoutId']) < 32)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be bigger than or equal to 32.";
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
            if (!is_null($this->container['jsonSchema']) && (mb_strlen($this->container['jsonSchema']) > 64)) {
                $invalidProperties[] = "invalid value for 'jsonSchema', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['jsonSchema']) && (mb_strlen($this->container['jsonSchema']) < 2)) {
                $invalidProperties[] = "invalid value for 'jsonSchema', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['boaVersion']) && (mb_strlen($this->container['boaVersion']) < 32)) {
                $invalidProperties[] = "invalid value for 'boaVersion', the character length must be bigger than or equal to 32.";
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
    * Gets name
    *  字段名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 字段名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets fieldKey
    *  字段键
    *
    * @return string
    */
    public function getFieldKey()
    {
        return $this->container['fieldKey'];
    }

    /**
    * Sets fieldKey
    *
    * @param string $fieldKey 字段键
    *
    * @return $this
    */
    public function setFieldKey($fieldKey)
    {
        $this->container['fieldKey'] = $fieldKey;
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
    * Gets layoutId
    *  布局ID
    *
    * @return string|null
    */
    public function getLayoutId()
    {
        return $this->container['layoutId'];
    }

    /**
    * Sets layoutId
    *
    * @param string|null $layoutId 布局ID
    *
    * @return $this
    */
    public function setLayoutId($layoutId)
    {
        $this->container['layoutId'] = $layoutId;
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
    * Gets readonly
    *  只读模式，true只读，false非只读
    *
    * @return bool|null
    */
    public function getReadonly()
    {
        return $this->container['readonly'];
    }

    /**
    * Sets readonly
    *
    * @param bool|null $readonly 只读模式，true只读，false非只读
    *
    * @return $this
    */
    public function setReadonly($readonly)
    {
        $this->container['readonly'] = $readonly;
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

