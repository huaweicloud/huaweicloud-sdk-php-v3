<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtsStructTemplateInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtsStructTemplateInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * demoFields  结构化字段
    * tagFields  tag字段列表（使用tag字段解析时需要，其中系统模板不支持使用tag字段）。
    * content  示例日志
    * logGroupId  日志组ID
    * parseType  结构化方式
    * logStreamId  日志流ID
    * projectId  项目ID
    * regexRules  parse_type为custom_regex类型时必填，regex提取规则
    * layers  parse_type为json类型时必填，解析层数，目前固定是3
    * tokenizer  parse_type为split类型时必填，分隔符，分词符号
    * logFormat  parse_type为nginx类型时必填，nginx日志格式模板
    * rule  rule
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'demoFields' => '\HuaweiCloud\SDK\Lts\V2\Model\StructFieldInfo[]',
            'tagFields' => '\HuaweiCloud\SDK\Lts\V2\Model\TagField[]',
            'content' => 'string',
            'logGroupId' => 'string',
            'parseType' => 'string',
            'logStreamId' => 'string',
            'projectId' => 'string',
            'regexRules' => 'string',
            'layers' => 'int',
            'tokenizer' => 'string',
            'logFormat' => 'string',
            'rule' => '\HuaweiCloud\SDK\Lts\V2\Model\Rule'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * demoFields  结构化字段
    * tagFields  tag字段列表（使用tag字段解析时需要，其中系统模板不支持使用tag字段）。
    * content  示例日志
    * logGroupId  日志组ID
    * parseType  结构化方式
    * logStreamId  日志流ID
    * projectId  项目ID
    * regexRules  parse_type为custom_regex类型时必填，regex提取规则
    * layers  parse_type为json类型时必填，解析层数，目前固定是3
    * tokenizer  parse_type为split类型时必填，分隔符，分词符号
    * logFormat  parse_type为nginx类型时必填，nginx日志格式模板
    * rule  rule
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'demoFields' => null,
        'tagFields' => null,
        'content' => null,
        'logGroupId' => null,
        'parseType' => null,
        'logStreamId' => null,
        'projectId' => null,
        'regexRules' => null,
        'layers' => 'int32',
        'tokenizer' => null,
        'logFormat' => null,
        'rule' => null
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
    * tagFields  tag字段列表（使用tag字段解析时需要，其中系统模板不支持使用tag字段）。
    * content  示例日志
    * logGroupId  日志组ID
    * parseType  结构化方式
    * logStreamId  日志流ID
    * projectId  项目ID
    * regexRules  parse_type为custom_regex类型时必填，regex提取规则
    * layers  parse_type为json类型时必填，解析层数，目前固定是3
    * tokenizer  parse_type为split类型时必填，分隔符，分词符号
    * logFormat  parse_type为nginx类型时必填，nginx日志格式模板
    * rule  rule
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'demoFields' => 'demo_fields',
            'tagFields' => 'tag_fields',
            'content' => 'content',
            'logGroupId' => 'log_group_id',
            'parseType' => 'parse_type',
            'logStreamId' => 'log_stream_id',
            'projectId' => 'project_id',
            'regexRules' => 'regex_rules',
            'layers' => 'layers',
            'tokenizer' => 'tokenizer',
            'logFormat' => 'log_format',
            'rule' => 'rule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * demoFields  结构化字段
    * tagFields  tag字段列表（使用tag字段解析时需要，其中系统模板不支持使用tag字段）。
    * content  示例日志
    * logGroupId  日志组ID
    * parseType  结构化方式
    * logStreamId  日志流ID
    * projectId  项目ID
    * regexRules  parse_type为custom_regex类型时必填，regex提取规则
    * layers  parse_type为json类型时必填，解析层数，目前固定是3
    * tokenizer  parse_type为split类型时必填，分隔符，分词符号
    * logFormat  parse_type为nginx类型时必填，nginx日志格式模板
    * rule  rule
    *
    * @var string[]
    */
    protected static $setters = [
            'demoFields' => 'setDemoFields',
            'tagFields' => 'setTagFields',
            'content' => 'setContent',
            'logGroupId' => 'setLogGroupId',
            'parseType' => 'setParseType',
            'logStreamId' => 'setLogStreamId',
            'projectId' => 'setProjectId',
            'regexRules' => 'setRegexRules',
            'layers' => 'setLayers',
            'tokenizer' => 'setTokenizer',
            'logFormat' => 'setLogFormat',
            'rule' => 'setRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * demoFields  结构化字段
    * tagFields  tag字段列表（使用tag字段解析时需要，其中系统模板不支持使用tag字段）。
    * content  示例日志
    * logGroupId  日志组ID
    * parseType  结构化方式
    * logStreamId  日志流ID
    * projectId  项目ID
    * regexRules  parse_type为custom_regex类型时必填，regex提取规则
    * layers  parse_type为json类型时必填，解析层数，目前固定是3
    * tokenizer  parse_type为split类型时必填，分隔符，分词符号
    * logFormat  parse_type为nginx类型时必填，nginx日志格式模板
    * rule  rule
    *
    * @var string[]
    */
    protected static $getters = [
            'demoFields' => 'getDemoFields',
            'tagFields' => 'getTagFields',
            'content' => 'getContent',
            'logGroupId' => 'getLogGroupId',
            'parseType' => 'getParseType',
            'logStreamId' => 'getLogStreamId',
            'projectId' => 'getProjectId',
            'regexRules' => 'getRegexRules',
            'layers' => 'getLayers',
            'tokenizer' => 'getTokenizer',
            'logFormat' => 'getLogFormat',
            'rule' => 'getRule'
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
    const PARSE_TYPE_BUILT_IN = 'built_in';
    const PARSE_TYPE_JSON = 'json';
    const PARSE_TYPE_CUSTOM_REGEX = 'custom_regex';
    const PARSE_TYPE_SPLIT = 'split';
    const PARSE_TYPE_NGINX = 'nginx';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getParseTypeAllowableValues()
    {
        return [
            self::PARSE_TYPE_BUILT_IN,
            self::PARSE_TYPE_JSON,
            self::PARSE_TYPE_CUSTOM_REGEX,
            self::PARSE_TYPE_SPLIT,
            self::PARSE_TYPE_NGINX,
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
        $this->container['demoFields'] = isset($data['demoFields']) ? $data['demoFields'] : null;
        $this->container['tagFields'] = isset($data['tagFields']) ? $data['tagFields'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['parseType'] = isset($data['parseType']) ? $data['parseType'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['regexRules'] = isset($data['regexRules']) ? $data['regexRules'] : null;
        $this->container['layers'] = isset($data['layers']) ? $data['layers'] : null;
        $this->container['tokenizer'] = isset($data['tokenizer']) ? $data['tokenizer'] : null;
        $this->container['logFormat'] = isset($data['logFormat']) ? $data['logFormat'] : null;
        $this->container['rule'] = isset($data['rule']) ? $data['rule'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['demoFields'] === null) {
            $invalidProperties[] = "'demoFields' can't be null";
        }
        if ($this->container['tagFields'] === null) {
            $invalidProperties[] = "'tagFields' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 10000)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 10000.";
            }
            if ((mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
            if ((mb_strlen($this->container['logGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['logGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['parseType'] === null) {
            $invalidProperties[] = "'parseType' can't be null";
        }
            $allowedValues = $this->getParseTypeAllowableValues();
                if (!is_null($this->container['parseType']) && !in_array($this->container['parseType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'parseType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['parseType']) > 12)) {
                $invalidProperties[] = "invalid value for 'parseType', the character length must be smaller than or equal to 12.";
            }
            if ((mb_strlen($this->container['parseType']) < 4)) {
                $invalidProperties[] = "invalid value for 'parseType', the character length must be bigger than or equal to 4.";
            }
        if ($this->container['logStreamId'] === null) {
            $invalidProperties[] = "'logStreamId' can't be null";
        }
            if ((mb_strlen($this->container['logStreamId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['logStreamId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['regexRules']) && (mb_strlen($this->container['regexRules']) > 5000)) {
                $invalidProperties[] = "invalid value for 'regexRules', the character length must be smaller than or equal to 5000.";
            }
            if (!is_null($this->container['regexRules']) && (mb_strlen($this->container['regexRules']) < 0)) {
                $invalidProperties[] = "invalid value for 'regexRules', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tokenizer']) && (mb_strlen($this->container['tokenizer']) > 10)) {
                $invalidProperties[] = "invalid value for 'tokenizer', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['tokenizer']) && (mb_strlen($this->container['tokenizer']) < 0)) {
                $invalidProperties[] = "invalid value for 'tokenizer', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logFormat']) && (mb_strlen($this->container['logFormat']) > 1000)) {
                $invalidProperties[] = "invalid value for 'logFormat', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['logFormat']) && (mb_strlen($this->container['logFormat']) < 0)) {
                $invalidProperties[] = "invalid value for 'logFormat', the character length must be bigger than or equal to 0.";
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
    * @return \HuaweiCloud\SDK\Lts\V2\Model\StructFieldInfo[]
    */
    public function getDemoFields()
    {
        return $this->container['demoFields'];
    }

    /**
    * Sets demoFields
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\StructFieldInfo[] $demoFields 结构化字段
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
    *  tag字段列表（使用tag字段解析时需要，其中系统模板不支持使用tag字段）。
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\TagField[]
    */
    public function getTagFields()
    {
        return $this->container['tagFields'];
    }

    /**
    * Sets tagFields
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\TagField[] $tagFields tag字段列表（使用tag字段解析时需要，其中系统模板不支持使用tag字段）。
    *
    * @return $this
    */
    public function setTagFields($tagFields)
    {
        $this->container['tagFields'] = $tagFields;
        return $this;
    }

    /**
    * Gets content
    *  示例日志
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 示例日志
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets logGroupId
    *  日志组ID
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId 日志组ID
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets parseType
    *  结构化方式
    *
    * @return string
    */
    public function getParseType()
    {
        return $this->container['parseType'];
    }

    /**
    * Sets parseType
    *
    * @param string $parseType 结构化方式
    *
    * @return $this
    */
    public function setParseType($parseType)
    {
        $this->container['parseType'] = $parseType;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流ID
    *
    * @return string
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string $logStreamId 日志流ID
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
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets regexRules
    *  parse_type为custom_regex类型时必填，regex提取规则
    *
    * @return string|null
    */
    public function getRegexRules()
    {
        return $this->container['regexRules'];
    }

    /**
    * Sets regexRules
    *
    * @param string|null $regexRules parse_type为custom_regex类型时必填，regex提取规则
    *
    * @return $this
    */
    public function setRegexRules($regexRules)
    {
        $this->container['regexRules'] = $regexRules;
        return $this;
    }

    /**
    * Gets layers
    *  parse_type为json类型时必填，解析层数，目前固定是3
    *
    * @return int|null
    */
    public function getLayers()
    {
        return $this->container['layers'];
    }

    /**
    * Sets layers
    *
    * @param int|null $layers parse_type为json类型时必填，解析层数，目前固定是3
    *
    * @return $this
    */
    public function setLayers($layers)
    {
        $this->container['layers'] = $layers;
        return $this;
    }

    /**
    * Gets tokenizer
    *  parse_type为split类型时必填，分隔符，分词符号
    *
    * @return string|null
    */
    public function getTokenizer()
    {
        return $this->container['tokenizer'];
    }

    /**
    * Sets tokenizer
    *
    * @param string|null $tokenizer parse_type为split类型时必填，分隔符，分词符号
    *
    * @return $this
    */
    public function setTokenizer($tokenizer)
    {
        $this->container['tokenizer'] = $tokenizer;
        return $this;
    }

    /**
    * Gets logFormat
    *  parse_type为nginx类型时必填，nginx日志格式模板
    *
    * @return string|null
    */
    public function getLogFormat()
    {
        return $this->container['logFormat'];
    }

    /**
    * Sets logFormat
    *
    * @param string|null $logFormat parse_type为nginx类型时必填，nginx日志格式模板
    *
    * @return $this
    */
    public function setLogFormat($logFormat)
    {
        $this->container['logFormat'] = $logFormat;
        return $this;
    }

    /**
    * Gets rule
    *  rule
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Rule|null
    */
    public function getRule()
    {
        return $this->container['rule'];
    }

    /**
    * Sets rule
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Rule|null $rule rule
    *
    * @return $this
    */
    public function setRule($rule)
    {
        $this->container['rule'] = $rule;
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

