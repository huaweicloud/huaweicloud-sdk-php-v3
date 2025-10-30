<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowStructTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowStructTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * demoFields  结构化字段
    * tagFields  关键词详细信息
    * demoLog  示例日志
    * demoLabel  测试
    * id  id
    * logGroupId  日志组ID
    * rule  rule
    * clusterInfo  clusterInfo
    * logStreamId  日志流ID
    * projectId  项目ID
    * templateName  测试
    * regex  为了兼容前台数据格式
    * customTimeInfo  customTimeInfo
    * uploadOriginalLog  **参数解释：** 是否上传原始日志。 **取值范围：** - true - fasle
    * uploadParseFailedLog  **参数解释：** 是否将解析失败的原始上传到指定系统字段日志。 **取值范围：** - true - fasle
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'demoFields' => '\HuaweiCloud\SDK\Lts\V2\Model\StructFieldInfoReturn[]',
            'tagFields' => '\HuaweiCloud\SDK\Lts\V2\Model\TagFieldsInfo[]',
            'demoLog' => 'string',
            'demoLabel' => 'string',
            'id' => 'string',
            'logGroupId' => 'string',
            'rule' => '\HuaweiCloud\SDK\Lts\V2\Model\ShowStructTemplateRule',
            'clusterInfo' => '\HuaweiCloud\SDK\Lts\V2\Model\ShowStructTemplateclusterInfo',
            'logStreamId' => 'string',
            'projectId' => 'string',
            'templateName' => 'string',
            'regex' => 'string',
            'customTimeInfo' => '\HuaweiCloud\SDK\Lts\V2\Model\CustomTimeInfo',
            'uploadOriginalLog' => 'bool',
            'uploadParseFailedLog' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * demoFields  结构化字段
    * tagFields  关键词详细信息
    * demoLog  示例日志
    * demoLabel  测试
    * id  id
    * logGroupId  日志组ID
    * rule  rule
    * clusterInfo  clusterInfo
    * logStreamId  日志流ID
    * projectId  项目ID
    * templateName  测试
    * regex  为了兼容前台数据格式
    * customTimeInfo  customTimeInfo
    * uploadOriginalLog  **参数解释：** 是否上传原始日志。 **取值范围：** - true - fasle
    * uploadParseFailedLog  **参数解释：** 是否将解析失败的原始上传到指定系统字段日志。 **取值范围：** - true - fasle
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'demoFields' => null,
        'tagFields' => null,
        'demoLog' => null,
        'demoLabel' => null,
        'id' => null,
        'logGroupId' => null,
        'rule' => null,
        'clusterInfo' => null,
        'logStreamId' => null,
        'projectId' => null,
        'templateName' => null,
        'regex' => null,
        'customTimeInfo' => null,
        'uploadOriginalLog' => null,
        'uploadParseFailedLog' => null
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
    * demoFields  结构化字段
    * tagFields  关键词详细信息
    * demoLog  示例日志
    * demoLabel  测试
    * id  id
    * logGroupId  日志组ID
    * rule  rule
    * clusterInfo  clusterInfo
    * logStreamId  日志流ID
    * projectId  项目ID
    * templateName  测试
    * regex  为了兼容前台数据格式
    * customTimeInfo  customTimeInfo
    * uploadOriginalLog  **参数解释：** 是否上传原始日志。 **取值范围：** - true - fasle
    * uploadParseFailedLog  **参数解释：** 是否将解析失败的原始上传到指定系统字段日志。 **取值范围：** - true - fasle
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'demoFields' => 'demoFields',
            'tagFields' => 'tagFields',
            'demoLog' => 'demoLog',
            'demoLabel' => 'demoLabel',
            'id' => 'id',
            'logGroupId' => 'logGroupId',
            'rule' => 'rule',
            'clusterInfo' => 'cluster_info',
            'logStreamId' => 'logStreamId',
            'projectId' => 'projectId',
            'templateName' => 'templateName',
            'regex' => 'regex',
            'customTimeInfo' => 'custom_time_info',
            'uploadOriginalLog' => 'uploadOriginalLog',
            'uploadParseFailedLog' => 'uploadParseFailedLog'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * demoFields  结构化字段
    * tagFields  关键词详细信息
    * demoLog  示例日志
    * demoLabel  测试
    * id  id
    * logGroupId  日志组ID
    * rule  rule
    * clusterInfo  clusterInfo
    * logStreamId  日志流ID
    * projectId  项目ID
    * templateName  测试
    * regex  为了兼容前台数据格式
    * customTimeInfo  customTimeInfo
    * uploadOriginalLog  **参数解释：** 是否上传原始日志。 **取值范围：** - true - fasle
    * uploadParseFailedLog  **参数解释：** 是否将解析失败的原始上传到指定系统字段日志。 **取值范围：** - true - fasle
    *
    * @var string[]
    */
    protected static $setters = [
            'demoFields' => 'setDemoFields',
            'tagFields' => 'setTagFields',
            'demoLog' => 'setDemoLog',
            'demoLabel' => 'setDemoLabel',
            'id' => 'setId',
            'logGroupId' => 'setLogGroupId',
            'rule' => 'setRule',
            'clusterInfo' => 'setClusterInfo',
            'logStreamId' => 'setLogStreamId',
            'projectId' => 'setProjectId',
            'templateName' => 'setTemplateName',
            'regex' => 'setRegex',
            'customTimeInfo' => 'setCustomTimeInfo',
            'uploadOriginalLog' => 'setUploadOriginalLog',
            'uploadParseFailedLog' => 'setUploadParseFailedLog'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * demoFields  结构化字段
    * tagFields  关键词详细信息
    * demoLog  示例日志
    * demoLabel  测试
    * id  id
    * logGroupId  日志组ID
    * rule  rule
    * clusterInfo  clusterInfo
    * logStreamId  日志流ID
    * projectId  项目ID
    * templateName  测试
    * regex  为了兼容前台数据格式
    * customTimeInfo  customTimeInfo
    * uploadOriginalLog  **参数解释：** 是否上传原始日志。 **取值范围：** - true - fasle
    * uploadParseFailedLog  **参数解释：** 是否将解析失败的原始上传到指定系统字段日志。 **取值范围：** - true - fasle
    *
    * @var string[]
    */
    protected static $getters = [
            'demoFields' => 'getDemoFields',
            'tagFields' => 'getTagFields',
            'demoLog' => 'getDemoLog',
            'demoLabel' => 'getDemoLabel',
            'id' => 'getId',
            'logGroupId' => 'getLogGroupId',
            'rule' => 'getRule',
            'clusterInfo' => 'getClusterInfo',
            'logStreamId' => 'getLogStreamId',
            'projectId' => 'getProjectId',
            'templateName' => 'getTemplateName',
            'regex' => 'getRegex',
            'customTimeInfo' => 'getCustomTimeInfo',
            'uploadOriginalLog' => 'getUploadOriginalLog',
            'uploadParseFailedLog' => 'getUploadParseFailedLog'
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
        $this->container['demoFields'] = isset($data['demoFields']) ? $data['demoFields'] : null;
        $this->container['tagFields'] = isset($data['tagFields']) ? $data['tagFields'] : null;
        $this->container['demoLog'] = isset($data['demoLog']) ? $data['demoLog'] : null;
        $this->container['demoLabel'] = isset($data['demoLabel']) ? $data['demoLabel'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['clusterInfo'] = isset($data['clusterInfo']) ? $data['clusterInfo'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['regex'] = isset($data['regex']) ? $data['regex'] : null;
        $this->container['customTimeInfo'] = isset($data['customTimeInfo']) ? $data['customTimeInfo'] : null;
        $this->container['uploadOriginalLog'] = isset($data['uploadOriginalLog']) ? $data['uploadOriginalLog'] : null;
        $this->container['uploadParseFailedLog'] = isset($data['uploadParseFailedLog']) ? $data['uploadParseFailedLog'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['demoLog']) && (mb_strlen($this->container['demoLog']) > 10000)) {
                $invalidProperties[] = "invalid value for 'demoLog', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['demoLog']) && (mb_strlen($this->container['demoLog']) < 1)) {
                $invalidProperties[] = "invalid value for 'demoLog', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 10000)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logGroupId']) && (mb_strlen($this->container['logGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['logStreamId']) && (mb_strlen($this->container['logStreamId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
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
    * Gets demoFields
    *  结构化字段
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\StructFieldInfoReturn[]|null
    */
    public function getDemoFields()
    {
        return $this->container['demoFields'];
    }

    /**
    * Sets demoFields
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\StructFieldInfoReturn[]|null $demoFields 结构化字段
    *
    * @return $this
    */
    public function setDemoFields($demoFields)
    {
        $this->container['demoFields'] = $demoFields;
        return $this;
    }

    /**
    * Gets tagFields
    *  关键词详细信息
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\TagFieldsInfo[]|null
    */
    public function getTagFields()
    {
        return $this->container['tagFields'];
    }

    /**
    * Sets tagFields
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\TagFieldsInfo[]|null $tagFields 关键词详细信息
    *
    * @return $this
    */
    public function setTagFields($tagFields)
    {
        $this->container['tagFields'] = $tagFields;
        return $this;
    }

    /**
    * Gets demoLog
    *  示例日志
    *
    * @return string|null
    */
    public function getDemoLog()
    {
        return $this->container['demoLog'];
    }

    /**
    * Sets demoLog
    *
    * @param string|null $demoLog 示例日志
    *
    * @return $this
    */
    public function setDemoLog($demoLog)
    {
        $this->container['demoLog'] = $demoLog;
        return $this;
    }

    /**
    * Gets demoLabel
    *  测试
    *
    * @return string|null
    */
    public function getDemoLabel()
    {
        return $this->container['demoLabel'];
    }

    /**
    * Sets demoLabel
    *
    * @param string|null $demoLabel 测试
    *
    * @return $this
    */
    public function setDemoLabel($demoLabel)
    {
        $this->container['demoLabel'] = $demoLabel;
        return $this;
    }

    /**
    * Gets id
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组ID
    *
    * @return string|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string|null $logGroupId 日志组ID
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets rule
    *  rule
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\ShowStructTemplateRule|null
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\ShowStructTemplateRule|null $rule rule
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
        return $this;
    }

    /**
    * Gets clusterInfo
    *  clusterInfo
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\ShowStructTemplateclusterInfo|null
    */
    public function getClusterInfo()
    {
        return $this->container['clusterInfo'];
    }

    /**
    * Sets clusterInfo
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\ShowStructTemplateclusterInfo|null $clusterInfo clusterInfo
    *
    * @return $this
    */
    public function setClusterInfo($clusterInfo)
    {
        $this->container['clusterInfo'] = $clusterInfo;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流ID
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 日志流ID
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets templateName
    *  测试
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName 测试
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets regex
    *  为了兼容前台数据格式
    *
    * @return string|null
    */
    public function getRegex()
    {
        return $this->container['regex'];
    }

    /**
    * Sets regex
    *
    * @param string|null $regex 为了兼容前台数据格式
    *
    * @return $this
    */
    public function setRegex($regex)
    {
        $this->container['regex'] = $regex;
        return $this;
    }

    /**
    * Gets customTimeInfo
    *  customTimeInfo
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\CustomTimeInfo|null
    */
    public function getCustomTimeInfo()
    {
        return $this->container['customTimeInfo'];
    }

    /**
    * Sets customTimeInfo
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\CustomTimeInfo|null $customTimeInfo customTimeInfo
    *
    * @return $this
    */
    public function setCustomTimeInfo($customTimeInfo)
    {
        $this->container['customTimeInfo'] = $customTimeInfo;
        return $this;
    }

    /**
    * Gets uploadOriginalLog
    *  **参数解释：** 是否上传原始日志。 **取值范围：** - true - fasle
    *
    * @return bool|null
    */
    public function getUploadOriginalLog()
    {
        return $this->container['uploadOriginalLog'];
    }

    /**
    * Sets uploadOriginalLog
    *
    * @param bool|null $uploadOriginalLog **参数解释：** 是否上传原始日志。 **取值范围：** - true - fasle
    *
    * @return $this
    */
    public function setUploadOriginalLog($uploadOriginalLog)
    {
        $this->container['uploadOriginalLog'] = $uploadOriginalLog;
        return $this;
    }

    /**
    * Gets uploadParseFailedLog
    *  **参数解释：** 是否将解析失败的原始上传到指定系统字段日志。 **取值范围：** - true - fasle
    *
    * @return bool|null
    */
    public function getUploadParseFailedLog()
    {
        return $this->container['uploadParseFailedLog'];
    }

    /**
    * Sets uploadParseFailedLog
    *
    * @param bool|null $uploadParseFailedLog **参数解释：** 是否将解析失败的原始上传到指定系统字段日志。 **取值范围：** - true - fasle
    *
    * @return $this
    */
    public function setUploadParseFailedLog($uploadParseFailedLog)
    {
        $this->container['uploadParseFailedLog'] = $uploadParseFailedLog;
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

