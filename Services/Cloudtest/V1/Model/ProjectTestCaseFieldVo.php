<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectTestCaseFieldVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectTestCaseFieldVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * uri  项目用例自定义字段主键
    * name  项目用例自定义字段名称
    * type  项目用例自定义字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    * options  项目用例自定义字段选项（数字类型时，数组两个值，第一个是最小值，第二个是最大值）
    * description  项目用例自定义字段描述
    * creator  项目用例自定义字段创建人
    * updater  项目用例自定义字段更新人
    * customFieldId  项目用例自定义字段id（1-25数字）
    * customFieldName  项目用例自定义字段名称
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    * typeName  项目用例自定义字段类型国际化名称
    * createTime  项目用例自定义字段创建时间
    * createTimeTimestamp  项目用例自定义字段创建时间时间戳
    * updateTime  项目用例自定义字段更新时间
    * updateTimeTimestamp  项目用例自定义字段更新时间时间戳
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'uri' => 'string',
            'name' => 'string',
            'type' => 'string',
            'options' => 'string',
            'description' => 'string',
            'creator' => 'string',
            'updater' => 'string',
            'customFieldId' => 'int',
            'customFieldName' => 'string',
            'customFieldParam' => 'string',
            'typeName' => 'string',
            'createTime' => '\DateTime',
            'createTimeTimestamp' => 'int',
            'updateTime' => '\DateTime',
            'updateTimeTimestamp' => 'int',
            'projectUuid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * uri  项目用例自定义字段主键
    * name  项目用例自定义字段名称
    * type  项目用例自定义字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    * options  项目用例自定义字段选项（数字类型时，数组两个值，第一个是最小值，第二个是最大值）
    * description  项目用例自定义字段描述
    * creator  项目用例自定义字段创建人
    * updater  项目用例自定义字段更新人
    * customFieldId  项目用例自定义字段id（1-25数字）
    * customFieldName  项目用例自定义字段名称
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    * typeName  项目用例自定义字段类型国际化名称
    * createTime  项目用例自定义字段创建时间
    * createTimeTimestamp  项目用例自定义字段创建时间时间戳
    * updateTime  项目用例自定义字段更新时间
    * updateTimeTimestamp  项目用例自定义字段更新时间时间戳
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'uri' => null,
        'name' => null,
        'type' => null,
        'options' => null,
        'description' => null,
        'creator' => null,
        'updater' => null,
        'customFieldId' => 'int32',
        'customFieldName' => null,
        'customFieldParam' => null,
        'typeName' => null,
        'createTime' => 'date-time',
        'createTimeTimestamp' => 'int64',
        'updateTime' => 'date-time',
        'updateTimeTimestamp' => 'int64',
        'projectUuid' => null
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
    * uri  项目用例自定义字段主键
    * name  项目用例自定义字段名称
    * type  项目用例自定义字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    * options  项目用例自定义字段选项（数字类型时，数组两个值，第一个是最小值，第二个是最大值）
    * description  项目用例自定义字段描述
    * creator  项目用例自定义字段创建人
    * updater  项目用例自定义字段更新人
    * customFieldId  项目用例自定义字段id（1-25数字）
    * customFieldName  项目用例自定义字段名称
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    * typeName  项目用例自定义字段类型国际化名称
    * createTime  项目用例自定义字段创建时间
    * createTimeTimestamp  项目用例自定义字段创建时间时间戳
    * updateTime  项目用例自定义字段更新时间
    * updateTimeTimestamp  项目用例自定义字段更新时间时间戳
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'uri' => 'uri',
            'name' => 'name',
            'type' => 'type',
            'options' => 'options',
            'description' => 'description',
            'creator' => 'creator',
            'updater' => 'updater',
            'customFieldId' => 'custom_field_id',
            'customFieldName' => 'custom_field_name',
            'customFieldParam' => 'custom_field_param',
            'typeName' => 'type_name',
            'createTime' => 'create_time',
            'createTimeTimestamp' => 'create_time_timestamp',
            'updateTime' => 'update_time',
            'updateTimeTimestamp' => 'update_time_timestamp',
            'projectUuid' => 'project_uuid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * uri  项目用例自定义字段主键
    * name  项目用例自定义字段名称
    * type  项目用例自定义字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    * options  项目用例自定义字段选项（数字类型时，数组两个值，第一个是最小值，第二个是最大值）
    * description  项目用例自定义字段描述
    * creator  项目用例自定义字段创建人
    * updater  项目用例自定义字段更新人
    * customFieldId  项目用例自定义字段id（1-25数字）
    * customFieldName  项目用例自定义字段名称
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    * typeName  项目用例自定义字段类型国际化名称
    * createTime  项目用例自定义字段创建时间
    * createTimeTimestamp  项目用例自定义字段创建时间时间戳
    * updateTime  项目用例自定义字段更新时间
    * updateTimeTimestamp  项目用例自定义字段更新时间时间戳
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'uri' => 'setUri',
            'name' => 'setName',
            'type' => 'setType',
            'options' => 'setOptions',
            'description' => 'setDescription',
            'creator' => 'setCreator',
            'updater' => 'setUpdater',
            'customFieldId' => 'setCustomFieldId',
            'customFieldName' => 'setCustomFieldName',
            'customFieldParam' => 'setCustomFieldParam',
            'typeName' => 'setTypeName',
            'createTime' => 'setCreateTime',
            'createTimeTimestamp' => 'setCreateTimeTimestamp',
            'updateTime' => 'setUpdateTime',
            'updateTimeTimestamp' => 'setUpdateTimeTimestamp',
            'projectUuid' => 'setProjectUuid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * uri  项目用例自定义字段主键
    * name  项目用例自定义字段名称
    * type  项目用例自定义字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    * options  项目用例自定义字段选项（数字类型时，数组两个值，第一个是最小值，第二个是最大值）
    * description  项目用例自定义字段描述
    * creator  项目用例自定义字段创建人
    * updater  项目用例自定义字段更新人
    * customFieldId  项目用例自定义字段id（1-25数字）
    * customFieldName  项目用例自定义字段名称
    * customFieldParam  项目用例自定义字段入参或者返回参数名称
    * typeName  项目用例自定义字段类型国际化名称
    * createTime  项目用例自定义字段创建时间
    * createTimeTimestamp  项目用例自定义字段创建时间时间戳
    * updateTime  项目用例自定义字段更新时间
    * updateTimeTimestamp  项目用例自定义字段更新时间时间戳
    * projectUuid  项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'uri' => 'getUri',
            'name' => 'getName',
            'type' => 'getType',
            'options' => 'getOptions',
            'description' => 'getDescription',
            'creator' => 'getCreator',
            'updater' => 'getUpdater',
            'customFieldId' => 'getCustomFieldId',
            'customFieldName' => 'getCustomFieldName',
            'customFieldParam' => 'getCustomFieldParam',
            'typeName' => 'getTypeName',
            'createTime' => 'getCreateTime',
            'createTimeTimestamp' => 'getCreateTimeTimestamp',
            'updateTime' => 'getUpdateTime',
            'updateTimeTimestamp' => 'getUpdateTimeTimestamp',
            'projectUuid' => 'getProjectUuid'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['updater'] = isset($data['updater']) ? $data['updater'] : null;
        $this->container['customFieldId'] = isset($data['customFieldId']) ? $data['customFieldId'] : null;
        $this->container['customFieldName'] = isset($data['customFieldName']) ? $data['customFieldName'] : null;
        $this->container['customFieldParam'] = isset($data['customFieldParam']) ? $data['customFieldParam'] : null;
        $this->container['typeName'] = isset($data['typeName']) ? $data['typeName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createTimeTimestamp'] = isset($data['createTimeTimestamp']) ? $data['createTimeTimestamp'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimeTimestamp'] = isset($data['updateTimeTimestamp']) ? $data['updateTimeTimestamp'] : null;
        $this->container['projectUuid'] = isset($data['projectUuid']) ? $data['projectUuid'] : null;
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
    *  项目用例自定义字段主键
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
    * @param string|null $uri 项目用例自定义字段主键
    *
    * @return $this
    */
    public function setUri($uri)
    {
        $this->container['uri'] = $uri;
        return $this;
    }

    /**
    * Gets name
    *  项目用例自定义字段名称
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
    * @param string|null $name 项目用例自定义字段名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  项目用例自定义字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
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
    * @param string|null $type 项目用例自定义字段类型（单行文本text、多行文本textArea、单选框radio、多选框checkBox、日期date、数字number、单选用户user）
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets options
    *  项目用例自定义字段选项（数字类型时，数组两个值，第一个是最小值，第二个是最大值）
    *
    * @return string|null
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param string|null $options 项目用例自定义字段选项（数字类型时，数组两个值，第一个是最小值，第二个是最大值）
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
        return $this;
    }

    /**
    * Gets description
    *  项目用例自定义字段描述
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
    * @param string|null $description 项目用例自定义字段描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets creator
    *  项目用例自定义字段创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 项目用例自定义字段创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets updater
    *  项目用例自定义字段更新人
    *
    * @return string|null
    */
    public function getUpdater()
    {
        return $this->container['updater'];
    }

    /**
    * Sets updater
    *
    * @param string|null $updater 项目用例自定义字段更新人
    *
    * @return $this
    */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;
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
    * Gets typeName
    *  项目用例自定义字段类型国际化名称
    *
    * @return string|null
    */
    public function getTypeName()
    {
        return $this->container['typeName'];
    }

    /**
    * Sets typeName
    *
    * @param string|null $typeName 项目用例自定义字段类型国际化名称
    *
    * @return $this
    */
    public function setTypeName($typeName)
    {
        $this->container['typeName'] = $typeName;
        return $this;
    }

    /**
    * Gets createTime
    *  项目用例自定义字段创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 项目用例自定义字段创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets createTimeTimestamp
    *  项目用例自定义字段创建时间时间戳
    *
    * @return int|null
    */
    public function getCreateTimeTimestamp()
    {
        return $this->container['createTimeTimestamp'];
    }

    /**
    * Sets createTimeTimestamp
    *
    * @param int|null $createTimeTimestamp 项目用例自定义字段创建时间时间戳
    *
    * @return $this
    */
    public function setCreateTimeTimestamp($createTimeTimestamp)
    {
        $this->container['createTimeTimestamp'] = $createTimeTimestamp;
        return $this;
    }

    /**
    * Gets updateTime
    *  项目用例自定义字段更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 项目用例自定义字段更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets updateTimeTimestamp
    *  项目用例自定义字段更新时间时间戳
    *
    * @return int|null
    */
    public function getUpdateTimeTimestamp()
    {
        return $this->container['updateTimeTimestamp'];
    }

    /**
    * Sets updateTimeTimestamp
    *
    * @param int|null $updateTimeTimestamp 项目用例自定义字段更新时间时间戳
    *
    * @return $this
    */
    public function setUpdateTimeTimestamp($updateTimeTimestamp)
    {
        $this->container['updateTimeTimestamp'] = $updateTimeTimestamp;
        return $this;
    }

    /**
    * Gets projectUuid
    *  项目id
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
    * @param string|null $projectUuid 项目id
    *
    * @return $this
    */
    public function setProjectUuid($projectUuid)
    {
        $this->container['projectUuid'] = $projectUuid;
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

