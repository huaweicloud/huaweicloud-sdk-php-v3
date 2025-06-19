<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectFieldConfigVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectFieldConfigVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  字段配置URI标识
    * updator  updator
    * description  描述
    * customName  项目用例自定义字段名称
    * tableFieldName  字段名（对应后端参数名）
    * valueType  字段类型(单行文本text、多行文本textArea、单选框radio、多选框checkbox、日期date、数字number、用户user)。
    * valueTypeName  字段类型国际化名称
    * isSystem  是否系统字段
    * isDisplay  是否显示
    * isRequired  是否必填
    * sortNumb  顺序数值
    * defaultValue  默认值
    * customFieldUri  扩展字段uri(用于连表查扩展字段)
    * resourceType  资源类型
    * creator  creator
    * createTimeStamp  创建时间时间戳
    * updateTimeStamp  更新时间时间戳
    * projectUuid  项目ID
    * optionVos  可选项
    * customFieldId  项目用例自定义字段id（1-25数字）
    * customFieldName  项目用例自定义字段名称
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'updator' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'description' => 'string',
            'customName' => 'string',
            'tableFieldName' => 'string',
            'valueType' => 'string',
            'valueTypeName' => 'string',
            'isSystem' => 'int',
            'isDisplay' => 'int',
            'isRequired' => 'int',
            'sortNumb' => 'int',
            'defaultValue' => 'string',
            'customFieldUri' => 'string',
            'resourceType' => 'string',
            'creator' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'createTimeStamp' => 'int',
            'updateTimeStamp' => 'int',
            'projectUuid' => 'string',
            'optionVos' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\ProjectFieldConfigOptionVo[]',
            'customFieldId' => 'int',
            'customFieldName' => 'string',
            'customFieldParam' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  字段配置URI标识
    * updator  updator
    * description  描述
    * customName  项目用例自定义字段名称
    * tableFieldName  字段名（对应后端参数名）
    * valueType  字段类型(单行文本text、多行文本textArea、单选框radio、多选框checkbox、日期date、数字number、用户user)。
    * valueTypeName  字段类型国际化名称
    * isSystem  是否系统字段
    * isDisplay  是否显示
    * isRequired  是否必填
    * sortNumb  顺序数值
    * defaultValue  默认值
    * customFieldUri  扩展字段uri(用于连表查扩展字段)
    * resourceType  资源类型
    * creator  creator
    * createTimeStamp  创建时间时间戳
    * updateTimeStamp  更新时间时间戳
    * projectUuid  项目ID
    * optionVos  可选项
    * customFieldId  项目用例自定义字段id（1-25数字）
    * customFieldName  项目用例自定义字段名称
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'updator' => null,
        'description' => null,
        'customName' => null,
        'tableFieldName' => null,
        'valueType' => null,
        'valueTypeName' => null,
        'isSystem' => 'int32',
        'isDisplay' => 'int32',
        'isRequired' => 'int32',
        'sortNumb' => 'int32',
        'defaultValue' => null,
        'customFieldUri' => null,
        'resourceType' => null,
        'creator' => null,
        'createTimeStamp' => 'int64',
        'updateTimeStamp' => 'int64',
        'projectUuid' => null,
        'optionVos' => null,
        'customFieldId' => 'int32',
        'customFieldName' => null,
        'customFieldParam' => null
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
    * uri  字段配置URI标识
    * updator  updator
    * description  描述
    * customName  项目用例自定义字段名称
    * tableFieldName  字段名（对应后端参数名）
    * valueType  字段类型(单行文本text、多行文本textArea、单选框radio、多选框checkbox、日期date、数字number、用户user)。
    * valueTypeName  字段类型国际化名称
    * isSystem  是否系统字段
    * isDisplay  是否显示
    * isRequired  是否必填
    * sortNumb  顺序数值
    * defaultValue  默认值
    * customFieldUri  扩展字段uri(用于连表查扩展字段)
    * resourceType  资源类型
    * creator  creator
    * createTimeStamp  创建时间时间戳
    * updateTimeStamp  更新时间时间戳
    * projectUuid  项目ID
    * optionVos  可选项
    * customFieldId  项目用例自定义字段id（1-25数字）
    * customFieldName  项目用例自定义字段名称
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'updator' => 'updator',
            'description' => 'description',
            'customName' => 'customName',
            'tableFieldName' => 'table_field_name',
            'valueType' => 'value_type',
            'valueTypeName' => 'value_type_name',
            'isSystem' => 'is_system',
            'isDisplay' => 'is_display',
            'isRequired' => 'is_required',
            'sortNumb' => 'sort_numb',
            'defaultValue' => 'default_value',
            'customFieldUri' => 'custom_field_uri',
            'resourceType' => 'resource_type',
            'creator' => 'creator',
            'createTimeStamp' => 'create_time_stamp',
            'updateTimeStamp' => 'update_time_stamp',
            'projectUuid' => 'project_uuid',
            'optionVos' => 'option_vos',
            'customFieldId' => 'custom_field_id',
            'customFieldName' => 'custom_field_name',
            'customFieldParam' => 'custom_field_param'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  字段配置URI标识
    * updator  updator
    * description  描述
    * customName  项目用例自定义字段名称
    * tableFieldName  字段名（对应后端参数名）
    * valueType  字段类型(单行文本text、多行文本textArea、单选框radio、多选框checkbox、日期date、数字number、用户user)。
    * valueTypeName  字段类型国际化名称
    * isSystem  是否系统字段
    * isDisplay  是否显示
    * isRequired  是否必填
    * sortNumb  顺序数值
    * defaultValue  默认值
    * customFieldUri  扩展字段uri(用于连表查扩展字段)
    * resourceType  资源类型
    * creator  creator
    * createTimeStamp  创建时间时间戳
    * updateTimeStamp  更新时间时间戳
    * projectUuid  项目ID
    * optionVos  可选项
    * customFieldId  项目用例自定义字段id（1-25数字）
    * customFieldName  项目用例自定义字段名称
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'updator' => 'setUpdator',
            'description' => 'setDescription',
            'customName' => 'setCustomName',
            'tableFieldName' => 'setTableFieldName',
            'valueType' => 'setValueType',
            'valueTypeName' => 'setValueTypeName',
            'isSystem' => 'setIsSystem',
            'isDisplay' => 'setIsDisplay',
            'isRequired' => 'setIsRequired',
            'sortNumb' => 'setSortNumb',
            'defaultValue' => 'setDefaultValue',
            'customFieldUri' => 'setCustomFieldUri',
            'resourceType' => 'setResourceType',
            'creator' => 'setCreator',
            'createTimeStamp' => 'setCreateTimeStamp',
            'updateTimeStamp' => 'setUpdateTimeStamp',
            'projectUuid' => 'setProjectUuid',
            'optionVos' => 'setOptionVos',
            'customFieldId' => 'setCustomFieldId',
            'customFieldName' => 'setCustomFieldName',
            'customFieldParam' => 'setCustomFieldParam'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  字段配置URI标识
    * updator  updator
    * description  描述
    * customName  项目用例自定义字段名称
    * tableFieldName  字段名（对应后端参数名）
    * valueType  字段类型(单行文本text、多行文本textArea、单选框radio、多选框checkbox、日期date、数字number、用户user)。
    * valueTypeName  字段类型国际化名称
    * isSystem  是否系统字段
    * isDisplay  是否显示
    * isRequired  是否必填
    * sortNumb  顺序数值
    * defaultValue  默认值
    * customFieldUri  扩展字段uri(用于连表查扩展字段)
    * resourceType  资源类型
    * creator  creator
    * createTimeStamp  创建时间时间戳
    * updateTimeStamp  更新时间时间戳
    * projectUuid  项目ID
    * optionVos  可选项
    * customFieldId  项目用例自定义字段id（1-25数字）
    * customFieldName  项目用例自定义字段名称
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'updator' => 'getUpdator',
            'description' => 'getDescription',
            'customName' => 'getCustomName',
            'tableFieldName' => 'getTableFieldName',
            'valueType' => 'getValueType',
            'valueTypeName' => 'getValueTypeName',
            'isSystem' => 'getIsSystem',
            'isDisplay' => 'getIsDisplay',
            'isRequired' => 'getIsRequired',
            'sortNumb' => 'getSortNumb',
            'defaultValue' => 'getDefaultValue',
            'customFieldUri' => 'getCustomFieldUri',
            'resourceType' => 'getResourceType',
            'creator' => 'getCreator',
            'createTimeStamp' => 'getCreateTimeStamp',
            'updateTimeStamp' => 'getUpdateTimeStamp',
            'projectUuid' => 'getProjectUuid',
            'optionVos' => 'getOptionVos',
            'customFieldId' => 'getCustomFieldId',
            'customFieldName' => 'getCustomFieldName',
            'customFieldParam' => 'getCustomFieldParam'
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
        $this->container['uri'] = isset($data['uri']) ? $data['uri'] : null;
        $this->container['updator'] = isset($data['updator']) ? $data['updator'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['customName'] = isset($data['customName']) ? $data['customName'] : null;
        $this->container['tableFieldName'] = isset($data['tableFieldName']) ? $data['tableFieldName'] : null;
        $this->container['valueType'] = isset($data['valueType']) ? $data['valueType'] : null;
        $this->container['valueTypeName'] = isset($data['valueTypeName']) ? $data['valueTypeName'] : null;
        $this->container['isSystem'] = isset($data['isSystem']) ? $data['isSystem'] : null;
        $this->container['isDisplay'] = isset($data['isDisplay']) ? $data['isDisplay'] : null;
        $this->container['isRequired'] = isset($data['isRequired']) ? $data['isRequired'] : null;
        $this->container['sortNumb'] = isset($data['sortNumb']) ? $data['sortNumb'] : null;
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['customFieldUri'] = isset($data['customFieldUri']) ? $data['customFieldUri'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['createTimeStamp'] = isset($data['createTimeStamp']) ? $data['createTimeStamp'] : null;
        $this->container['updateTimeStamp'] = isset($data['updateTimeStamp']) ? $data['updateTimeStamp'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
        $this->container['optionVos'] = isset($data['optionVos']) ? $data['optionVos'] : null;
        $this->container['customFieldId'] = isset($data['customFieldId']) ? $data['customFieldId'] : null;
        $this->container['customFieldName'] = isset($data['customFieldName']) ? $data['customFieldName'] : null;
        $this->container['customFieldParam'] = isset($data['customFieldParam']) ? $data['customFieldParam'] : null;
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
    * Gets uri
    *  字段配置URI标识
    *
    * @return string|null
    */
    public function getUri()
    {
        return $this->container['uri'];
    }

    /**
    * Sets uri
    *
    * @param string|null $uri 字段配置URI标识
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets updator
    *  updator
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getUpdator()
    {
        return $this->container['updator'];
    }

    /**
    * Sets updator
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $updator updator
    *
    * @return $this
    */
    public function setUpdator($updator)
    {
        $this->container['updator'] = $updator;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets customName
    *  项目用例自定义字段名称
    *
    * @return string|null
    */
    public function getCustomName()
    {
        return $this->container['customName'];
    }

    /**
    * Sets customName
    *
    * @param string|null $customName 项目用例自定义字段名称
    *
    * @return $this
    */
    public function setCustomName($customName)
    {
        $this->container['customName'] = $customName;
        return $this;
    }

    /**
    * Gets tableFieldName
    *  字段名（对应后端参数名）
    *
    * @return string|null
    */
    public function getTableFieldName()
    {
        return $this->container['tableFieldName'];
    }

    /**
    * Sets tableFieldName
    *
    * @param string|null $tableFieldName 字段名（对应后端参数名）
    *
    * @return $this
    */
    public function setTableFieldName($tableFieldName)
    {
        $this->container['tableFieldName'] = $tableFieldName;
        return $this;
    }

    /**
    * Gets valueType
    *  字段类型(单行文本text、多行文本textArea、单选框radio、多选框checkbox、日期date、数字number、用户user)。
    *
    * @return string|null
    */
    public function getValueType()
    {
        return $this->container['valueType'];
    }

    /**
    * Sets valueType
    *
    * @param string|null $valueType 字段类型(单行文本text、多行文本textArea、单选框radio、多选框checkbox、日期date、数字number、用户user)。
    *
    * @return $this
    */
    public function setValueType($valueType)
    {
        $this->container['valueType'] = $valueType;
        return $this;
    }

    /**
    * Gets valueTypeName
    *  字段类型国际化名称
    *
    * @return string|null
    */
    public function getValueTypeName()
    {
        return $this->container['valueTypeName'];
    }

    /**
    * Sets valueTypeName
    *
    * @param string|null $valueTypeName 字段类型国际化名称
    *
    * @return $this
    */
    public function setValueTypeName($valueTypeName)
    {
        $this->container['valueTypeName'] = $valueTypeName;
        return $this;
    }

    /**
    * Gets isSystem
    *  是否系统字段
    *
    * @return int|null
    */
    public function getIsSystem()
    {
        return $this->container['isSystem'];
    }

    /**
    * Sets isSystem
    *
    * @param int|null $isSystem 是否系统字段
    *
    * @return $this
    */
    public function setIsSystem($isSystem)
    {
        $this->container['isSystem'] = $isSystem;
        return $this;
    }

    /**
    * Gets isDisplay
    *  是否显示
    *
    * @return int|null
    */
    public function getIsDisplay()
    {
        return $this->container['isDisplay'];
    }

    /**
    * Sets isDisplay
    *
    * @param int|null $isDisplay 是否显示
    *
    * @return $this
    */
    public function setIsDisplay($isDisplay)
    {
        $this->container['isDisplay'] = $isDisplay;
        return $this;
    }

    /**
    * Gets isRequired
    *  是否必填
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
    * @param int|null $isRequired 是否必填
    *
    * @return $this
    */
    public function setIsRequired($isRequired)
    {
        $this->container['isRequired'] = $isRequired;
        return $this;
    }

    /**
    * Gets sortNumb
    *  顺序数值
    *
    * @return int|null
    */
    public function getSortNumb()
    {
        return $this->container['sortNumb'];
    }

    /**
    * Sets sortNumb
    *
    * @param int|null $sortNumb 顺序数值
    *
    * @return $this
    */
    public function setSortNumb($sortNumb)
    {
        $this->container['sortNumb'] = $sortNumb;
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
    * Gets customFieldUri
    *  扩展字段uri(用于连表查扩展字段)
    *
    * @return string|null
    */
    public function getCustomFieldUri()
    {
        return $this->container['customFieldUri'];
    }

    /**
    * Sets customFieldUri
    *
    * @param string|null $customFieldUri 扩展字段uri(用于连表查扩展字段)
    *
    * @return $this
    */
    public function setCustomFieldUri($customFieldUri)
    {
        $this->container['customFieldUri'] = $customFieldUri;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets creator
    *  creator
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets createTimeStamp
    *  创建时间时间戳
    *
    * @return int|null
    */
    public function getCreateTimeStamp()
    {
        return $this->container['createTimeStamp'];
    }

    /**
    * Sets createTimeStamp
    *
    * @param int|null $createTimeStamp 创建时间时间戳
    *
    * @return $this
    */
    public function setCreateTimeStamp($createTimeStamp)
    {
        $this->container['createTimeStamp'] = $createTimeStamp;
        return $this;
    }

    /**
    * Gets updateTimeStamp
    *  更新时间时间戳
    *
    * @return int|null
    */
    public function getUpdateTimeStamp()
    {
        return $this->container['updateTimeStamp'];
    }

    /**
    * Sets updateTimeStamp
    *
    * @param int|null $updateTimeStamp 更新时间时间戳
    *
    * @return $this
    */
    public function setUpdateTimeStamp($updateTimeStamp)
    {
        $this->container['updateTimeStamp'] = $updateTimeStamp;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectUuid()
    {
        return $this->container['projectUuid'];
    }

    /**
    * Sets projectUuid
    *
    * @param string|null $projectUuid 项目ID
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
        return $this;
    }

    /**
    * Gets optionVos
    *  可选项
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\ProjectFieldConfigOptionVo[]|null
    */
    public function getOptionVos()
    {
        return $this->container['optionVos'];
    }

    /**
    * Sets optionVos
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\ProjectFieldConfigOptionVo[]|null $optionVos 可选项
    *
    * @return $this
    */
    public function setOptionVos($optionVos)
    {
        $this->container['optionVos'] = $optionVos;
        return $this;
    }

    /**
    * Gets customFieldId
    *  项目用例自定义字段id（1-25数字）
    *
    * @return int|null
    */
    public function getCustomFieldId()
    {
        return $this->container['customFieldId'];
    }

    /**
    * Sets customFieldId
    *
    * @param int|null $customFieldId 项目用例自定义字段id（1-25数字）
    *
    * @return $this
    */
    public function setCustomFieldId($customFieldId)
    {
        $this->container['customFieldId'] = $customFieldId;
        return $this;
    }

    /**
    * Gets customFieldName
    *  项目用例自定义字段名称
    *
    * @return string|null
    */
    public function getCustomFieldName()
    {
        return $this->container['customFieldName'];
    }

    /**
    * Sets customFieldName
    *
    * @param string|null $customFieldName 项目用例自定义字段名称
    *
    * @return $this
    */
    public function setCustomFieldName($customFieldName)
    {
        $this->container['customFieldName'] = $customFieldName;
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

