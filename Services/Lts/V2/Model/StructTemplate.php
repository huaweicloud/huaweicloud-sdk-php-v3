<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StructTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StructTemplate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id
    * templateName  模板名称
    * templateType  模板类型，regex,json,split,nginx
    * demoLog  示例日志
    * demoFields  示例字段数组
    * tagFields  Tag字段数组
    * rule  rule
    * demoLabel  示例日志标签
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'templateName' => 'string',
            'templateType' => 'string',
            'demoLog' => 'string',
            'demoFields' => '\HuaweiCloud\SDK\Lts\V2\Model\DemoField[]',
            'tagFields' => '\HuaweiCloud\SDK\Lts\V2\Model\TagFieldNew[]',
            'rule' => '\HuaweiCloud\SDK\Lts\V2\Model\TemplateRule',
            'demoLabel' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id
    * templateName  模板名称
    * templateType  模板类型，regex,json,split,nginx
    * demoLog  示例日志
    * demoFields  示例字段数组
    * tagFields  Tag字段数组
    * rule  rule
    * demoLabel  示例日志标签
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'templateName' => null,
        'templateType' => null,
        'demoLog' => null,
        'demoFields' => null,
        'tagFields' => null,
        'rule' => null,
        'demoLabel' => null,
        'createTime' => 'int64'
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
    * projectId  项目id
    * templateName  模板名称
    * templateType  模板类型，regex,json,split,nginx
    * demoLog  示例日志
    * demoFields  示例字段数组
    * tagFields  Tag字段数组
    * rule  rule
    * demoLabel  示例日志标签
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'templateName' => 'template_name',
            'templateType' => 'template_type',
            'demoLog' => 'demo_log',
            'demoFields' => 'demo_fields',
            'tagFields' => 'tag_fields',
            'rule' => 'rule',
            'demoLabel' => 'demo_label',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id
    * templateName  模板名称
    * templateType  模板类型，regex,json,split,nginx
    * demoLog  示例日志
    * demoFields  示例字段数组
    * tagFields  Tag字段数组
    * rule  rule
    * demoLabel  示例日志标签
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'templateName' => 'setTemplateName',
            'templateType' => 'setTemplateType',
            'demoLog' => 'setDemoLog',
            'demoFields' => 'setDemoFields',
            'tagFields' => 'setTagFields',
            'rule' => 'setRule',
            'demoLabel' => 'setDemoLabel',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id
    * templateName  模板名称
    * templateType  模板类型，regex,json,split,nginx
    * demoLog  示例日志
    * demoFields  示例字段数组
    * tagFields  Tag字段数组
    * rule  rule
    * demoLabel  示例日志标签
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'templateName' => 'getTemplateName',
            'templateType' => 'getTemplateType',
            'demoLog' => 'getDemoLog',
            'demoFields' => 'getDemoFields',
            'tagFields' => 'getTagFields',
            'rule' => 'getRule',
            'demoLabel' => 'getDemoLabel',
            'createTime' => 'getCreateTime'
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
    const TEMPLATE_TYPE_REGEX = 'regex';
    const TEMPLATE_TYPE_JSON = 'json';
    const TEMPLATE_TYPE_SPLIT = 'split';
    const TEMPLATE_TYPE_NGINX = 'nginx';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTemplateTypeAllowableValues()
    {
        return [
            self::TEMPLATE_TYPE_REGEX,
            self::TEMPLATE_TYPE_JSON,
            self::TEMPLATE_TYPE_SPLIT,
            self::TEMPLATE_TYPE_NGINX,
        ];
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['demoLog'] = isset($data['demoLog']) ? $data['demoLog'] : null;
        $this->container['demoFields'] = isset($data['demoFields']) ? $data['demoFields'] : null;
        $this->container['tagFields'] = isset($data['tagFields']) ? $data['tagFields'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
        $this->container['demoLabel'] = isset($data['demoLabel']) ? $data['demoLabel'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['templateType'] === null) {
            $invalidProperties[] = "'templateType' can't be null";
        }
            $allowedValues = $this->getTemplateTypeAllowableValues();
                if (!is_null($this->container['templateType']) && !in_array($this->container['templateType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'templateType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['demoLog'] === null) {
            $invalidProperties[] = "'demoLog' can't be null";
        }
            if ((mb_strlen($this->container['demoLog']) > 5000)) {
                $invalidProperties[] = "invalid value for 'demoLog', the character length must be smaller than or equal to 5000.";
            }
            if ((mb_strlen($this->container['demoLog']) < 1)) {
                $invalidProperties[] = "invalid value for 'demoLog', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['demoFields'] === null) {
            $invalidProperties[] = "'demoFields' can't be null";
        }
        if ($this->container['tagFields'] === null) {
            $invalidProperties[] = "'tagFields' can't be null";
        }
        if ($this->container['rule'] === null) {
            $invalidProperties[] = "'rule' can't be null";
        }
            if (!is_null($this->container['demoLabel']) && (mb_strlen($this->container['demoLabel']) > 5000)) {
                $invalidProperties[] = "invalid value for 'demoLabel', the character length must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['demoLabel']) && (mb_strlen($this->container['demoLabel']) < 0)) {
                $invalidProperties[] = "invalid value for 'demoLabel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 20000000000000)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 20000000000000.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
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
    * Gets projectId
    *  项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目id
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
    *  模板名称
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName 模板名称
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateType
    *  模板类型，regex,json,split,nginx
    *
    * @return string
    */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
    * Sets templateType
    *
    * @param string $templateType 模板类型，regex,json,split,nginx
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets demoLog
    *  示例日志
    *
    * @return string
    */
    public function getDemoLog()
    {
        return $this->container['demoLog'];
    }

    /**
    * Sets demoLog
    *
    * @param string $demoLog 示例日志
    *
    * @return $this
    */
    public function setDemoLog($demoLog)
    {
        $this->container['demoLog'] = $demoLog;
        return $this;
    }

    /**
    * Gets demoFields
    *  示例字段数组
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\DemoField[]
    */
    public function getDemoFields()
    {
        return $this->container['demoFields'];
    }

    /**
    * Sets demoFields
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\DemoField[] $demoFields 示例字段数组
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
    *  Tag字段数组
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\TagFieldNew[]
    */
    public function getTagFields()
    {
        return $this->container['tagFields'];
    }

    /**
    * Sets tagFields
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\TagFieldNew[] $tagFields Tag字段数组
    *
    * @return $this
    */
    public function setTagFields($tagFields)
    {
        $this->container['tagFields'] = $tagFields;
        return $this;
    }

    /**
    * Gets rule
    *  rule
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\TemplateRule
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\TemplateRule $rule rule
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
        return $this;
    }

    /**
    * Gets demoLabel
    *  示例日志标签
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
    * @param string|null $demoLabel 示例日志标签
    *
    * @return $this
    */
    public function setDemoLabel($demoLabel)
    {
        $this->container['demoLabel'] = $demoLabel;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

