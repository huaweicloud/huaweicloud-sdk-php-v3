<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AiGuardRuleItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AiGuardRuleItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规则ID
    * name  规则名称
    * detectType  检测类别。text: 文本检测, image: 图片检测，为null时代表文字
    * detectTarget  检测目标，detect_type=image时有效。ocr代表图片中提取的文本，content代表图片语义
    * policyId  策略ID
    * status  规则状态，可选：enable(启用), disable(禁用)
    * detectOpts  检测选项配置列表
    * action  action
    * detectLabels  detectLabels
    * createTime  创建时间
    * updateTime  更新时间
    * detectLabelsInfo  detectLabelsInfo
    * notSupportedLanguageAction  不支持语言的检测防护动作。pass: 放行, block: 拦截
    * source  规则来源，system代表系统，custom代表用户创建
    * sourceId  当source=system时，source_id为默认模板规则的Id
    * description  规则描述，最大长度1024
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    * abuseConfig  abuseConfig
    * topicConfig  topicConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'detectType' => 'string',
            'detectTarget' => 'string',
            'policyId' => 'string',
            'status' => 'string',
            'detectOpts' => '\HuaweiCloud\SDK\Waf\V1\Model\DetectOpt[]',
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\AiGuardRuleAction',
            'detectLabels' => '\HuaweiCloud\SDK\Waf\V1\Model\DetectLabels',
            'createTime' => 'int',
            'updateTime' => 'int',
            'detectLabelsInfo' => '\HuaweiCloud\SDK\Waf\V1\Model\DetectLabelsInfo',
            'notSupportedLanguageAction' => 'string',
            'source' => 'string',
            'sourceId' => 'string',
            'description' => 'string',
            'customAnswersId' => 'string',
            'customAnswersName' => 'string',
            'abuseConfig' => '\HuaweiCloud\SDK\Waf\V1\Model\AbuseConfig',
            'topicConfig' => '\HuaweiCloud\SDK\Waf\V1\Model\TopicConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规则ID
    * name  规则名称
    * detectType  检测类别。text: 文本检测, image: 图片检测，为null时代表文字
    * detectTarget  检测目标，detect_type=image时有效。ocr代表图片中提取的文本，content代表图片语义
    * policyId  策略ID
    * status  规则状态，可选：enable(启用), disable(禁用)
    * detectOpts  检测选项配置列表
    * action  action
    * detectLabels  detectLabels
    * createTime  创建时间
    * updateTime  更新时间
    * detectLabelsInfo  detectLabelsInfo
    * notSupportedLanguageAction  不支持语言的检测防护动作。pass: 放行, block: 拦截
    * source  规则来源，system代表系统，custom代表用户创建
    * sourceId  当source=system时，source_id为默认模板规则的Id
    * description  规则描述，最大长度1024
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    * abuseConfig  abuseConfig
    * topicConfig  topicConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'detectType' => null,
        'detectTarget' => null,
        'policyId' => null,
        'status' => null,
        'detectOpts' => null,
        'action' => null,
        'detectLabels' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'detectLabelsInfo' => null,
        'notSupportedLanguageAction' => null,
        'source' => null,
        'sourceId' => null,
        'description' => null,
        'customAnswersId' => null,
        'customAnswersName' => null,
        'abuseConfig' => null,
        'topicConfig' => null
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
    * id  规则ID
    * name  规则名称
    * detectType  检测类别。text: 文本检测, image: 图片检测，为null时代表文字
    * detectTarget  检测目标，detect_type=image时有效。ocr代表图片中提取的文本，content代表图片语义
    * policyId  策略ID
    * status  规则状态，可选：enable(启用), disable(禁用)
    * detectOpts  检测选项配置列表
    * action  action
    * detectLabels  detectLabels
    * createTime  创建时间
    * updateTime  更新时间
    * detectLabelsInfo  detectLabelsInfo
    * notSupportedLanguageAction  不支持语言的检测防护动作。pass: 放行, block: 拦截
    * source  规则来源，system代表系统，custom代表用户创建
    * sourceId  当source=system时，source_id为默认模板规则的Id
    * description  规则描述，最大长度1024
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    * abuseConfig  abuseConfig
    * topicConfig  topicConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'detectType' => 'detect_type',
            'detectTarget' => 'detect_target',
            'policyId' => 'policy_id',
            'status' => 'status',
            'detectOpts' => 'detect_opts',
            'action' => 'action',
            'detectLabels' => 'detect_labels',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'detectLabelsInfo' => 'detect_labels_info',
            'notSupportedLanguageAction' => 'not_supported_language_action',
            'source' => 'source',
            'sourceId' => 'source_id',
            'description' => 'description',
            'customAnswersId' => 'custom_answers_id',
            'customAnswersName' => 'custom_answers_name',
            'abuseConfig' => 'abuse_config',
            'topicConfig' => 'topic_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规则ID
    * name  规则名称
    * detectType  检测类别。text: 文本检测, image: 图片检测，为null时代表文字
    * detectTarget  检测目标，detect_type=image时有效。ocr代表图片中提取的文本，content代表图片语义
    * policyId  策略ID
    * status  规则状态，可选：enable(启用), disable(禁用)
    * detectOpts  检测选项配置列表
    * action  action
    * detectLabels  detectLabels
    * createTime  创建时间
    * updateTime  更新时间
    * detectLabelsInfo  detectLabelsInfo
    * notSupportedLanguageAction  不支持语言的检测防护动作。pass: 放行, block: 拦截
    * source  规则来源，system代表系统，custom代表用户创建
    * sourceId  当source=system时，source_id为默认模板规则的Id
    * description  规则描述，最大长度1024
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    * abuseConfig  abuseConfig
    * topicConfig  topicConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'detectType' => 'setDetectType',
            'detectTarget' => 'setDetectTarget',
            'policyId' => 'setPolicyId',
            'status' => 'setStatus',
            'detectOpts' => 'setDetectOpts',
            'action' => 'setAction',
            'detectLabels' => 'setDetectLabels',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'detectLabelsInfo' => 'setDetectLabelsInfo',
            'notSupportedLanguageAction' => 'setNotSupportedLanguageAction',
            'source' => 'setSource',
            'sourceId' => 'setSourceId',
            'description' => 'setDescription',
            'customAnswersId' => 'setCustomAnswersId',
            'customAnswersName' => 'setCustomAnswersName',
            'abuseConfig' => 'setAbuseConfig',
            'topicConfig' => 'setTopicConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规则ID
    * name  规则名称
    * detectType  检测类别。text: 文本检测, image: 图片检测，为null时代表文字
    * detectTarget  检测目标，detect_type=image时有效。ocr代表图片中提取的文本，content代表图片语义
    * policyId  策略ID
    * status  规则状态，可选：enable(启用), disable(禁用)
    * detectOpts  检测选项配置列表
    * action  action
    * detectLabels  detectLabels
    * createTime  创建时间
    * updateTime  更新时间
    * detectLabelsInfo  detectLabelsInfo
    * notSupportedLanguageAction  不支持语言的检测防护动作。pass: 放行, block: 拦截
    * source  规则来源，system代表系统，custom代表用户创建
    * sourceId  当source=system时，source_id为默认模板规则的Id
    * description  规则描述，最大长度1024
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    * abuseConfig  abuseConfig
    * topicConfig  topicConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'detectType' => 'getDetectType',
            'detectTarget' => 'getDetectTarget',
            'policyId' => 'getPolicyId',
            'status' => 'getStatus',
            'detectOpts' => 'getDetectOpts',
            'action' => 'getAction',
            'detectLabels' => 'getDetectLabels',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'detectLabelsInfo' => 'getDetectLabelsInfo',
            'notSupportedLanguageAction' => 'getNotSupportedLanguageAction',
            'source' => 'getSource',
            'sourceId' => 'getSourceId',
            'description' => 'getDescription',
            'customAnswersId' => 'getCustomAnswersId',
            'customAnswersName' => 'getCustomAnswersName',
            'abuseConfig' => 'getAbuseConfig',
            'topicConfig' => 'getTopicConfig'
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
    const DETECT_TYPE_TEXT = 'text';
    const DETECT_TYPE_IMAGE = 'image';
    const DETECT_TARGET_OCR = 'ocr';
    const DETECT_TARGET_CONTENT = 'content';
    const STATUS_ENABLE = 'enable';
    const STATUS_DISABLE = 'disable';
    const NOT_SUPPORTED_LANGUAGE_ACTION_PASS = 'pass';
    const NOT_SUPPORTED_LANGUAGE_ACTION_BLOCK = 'block';
    const SOURCE_SYSTEM = 'system';
    const SOURCE_CUSTOM = 'custom';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDetectTypeAllowableValues()
    {
        return [
            self::DETECT_TYPE_TEXT,
            self::DETECT_TYPE_IMAGE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDetectTargetAllowableValues()
    {
        return [
            self::DETECT_TARGET_OCR,
            self::DETECT_TARGET_CONTENT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ENABLE,
            self::STATUS_DISABLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotSupportedLanguageActionAllowableValues()
    {
        return [
            self::NOT_SUPPORTED_LANGUAGE_ACTION_PASS,
            self::NOT_SUPPORTED_LANGUAGE_ACTION_BLOCK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSourceAllowableValues()
    {
        return [
            self::SOURCE_SYSTEM,
            self::SOURCE_CUSTOM,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['detectType'] = isset($data['detectType']) ? $data['detectType'] : null;
        $this->container['detectTarget'] = isset($data['detectTarget']) ? $data['detectTarget'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['detectOpts'] = isset($data['detectOpts']) ? $data['detectOpts'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['detectLabels'] = isset($data['detectLabels']) ? $data['detectLabels'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['detectLabelsInfo'] = isset($data['detectLabelsInfo']) ? $data['detectLabelsInfo'] : null;
        $this->container['notSupportedLanguageAction'] = isset($data['notSupportedLanguageAction']) ? $data['notSupportedLanguageAction'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['customAnswersId'] = isset($data['customAnswersId']) ? $data['customAnswersId'] : null;
        $this->container['customAnswersName'] = isset($data['customAnswersName']) ? $data['customAnswersName'] : null;
        $this->container['abuseConfig'] = isset($data['abuseConfig']) ? $data['abuseConfig'] : null;
        $this->container['topicConfig'] = isset($data['topicConfig']) ? $data['topicConfig'] : null;
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
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getDetectTypeAllowableValues();
                if (!is_null($this->container['detectType']) && !in_array($this->container['detectType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'detectType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDetectTargetAllowableValues();
                if (!is_null($this->container['detectTarget']) && !in_array($this->container['detectTarget'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'detectTarget', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) > 32)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['policyId']) && (mb_strlen($this->container['policyId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getNotSupportedLanguageActionAllowableValues();
                if (!is_null($this->container['notSupportedLanguageAction']) && !in_array($this->container['notSupportedLanguageAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notSupportedLanguageAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSourceAllowableValues();
                if (!is_null($this->container['source']) && !in_array($this->container['source'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'source', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) > 8)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['sourceId']) && (mb_strlen($this->container['sourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'sourceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sourceId']) && !preg_match("/^[0-9]{8}$/", $this->container['sourceId'])) {
                $invalidProperties[] = "invalid value for 'sourceId', must be conform to the pattern /^[0-9]{8}$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  规则ID
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
    * @param string|null $id 规则ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  规则名称
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
    * @param string|null $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets detectType
    *  检测类别。text: 文本检测, image: 图片检测，为null时代表文字
    *
    * @return string|null
    */
    public function getDetectType()
    {
        return $this->container['detectType'];
    }

    /**
    * Sets detectType
    *
    * @param string|null $detectType 检测类别。text: 文本检测, image: 图片检测，为null时代表文字
    *
    * @return $this
    */
    public function setDetectType($detectType)
    {
        $this->container['detectType'] = $detectType;
        return $this;
    }

    /**
    * Gets detectTarget
    *  检测目标，detect_type=image时有效。ocr代表图片中提取的文本，content代表图片语义
    *
    * @return string|null
    */
    public function getDetectTarget()
    {
        return $this->container['detectTarget'];
    }

    /**
    * Sets detectTarget
    *
    * @param string|null $detectTarget 检测目标，detect_type=image时有效。ocr代表图片中提取的文本，content代表图片语义
    *
    * @return $this
    */
    public function setDetectTarget($detectTarget)
    {
        $this->container['detectTarget'] = $detectTarget;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets status
    *  规则状态，可选：enable(启用), disable(禁用)
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 规则状态，可选：enable(启用), disable(禁用)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets detectOpts
    *  检测选项配置列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\DetectOpt[]|null
    */
    public function getDetectOpts()
    {
        return $this->container['detectOpts'];
    }

    /**
    * Sets detectOpts
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\DetectOpt[]|null $detectOpts 检测选项配置列表
    *
    * @return $this
    */
    public function setDetectOpts($detectOpts)
    {
        $this->container['detectOpts'] = $detectOpts;
        return $this;
    }

    /**
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\AiGuardRuleAction|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\AiGuardRuleAction|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets detectLabels
    *  detectLabels
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\DetectLabels|null
    */
    public function getDetectLabels()
    {
        return $this->container['detectLabels'];
    }

    /**
    * Sets detectLabels
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\DetectLabels|null $detectLabels detectLabels
    *
    * @return $this
    */
    public function setDetectLabels($detectLabels)
    {
        $this->container['detectLabels'] = $detectLabels;
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
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets detectLabelsInfo
    *  detectLabelsInfo
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\DetectLabelsInfo|null
    */
    public function getDetectLabelsInfo()
    {
        return $this->container['detectLabelsInfo'];
    }

    /**
    * Sets detectLabelsInfo
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\DetectLabelsInfo|null $detectLabelsInfo detectLabelsInfo
    *
    * @return $this
    */
    public function setDetectLabelsInfo($detectLabelsInfo)
    {
        $this->container['detectLabelsInfo'] = $detectLabelsInfo;
        return $this;
    }

    /**
    * Gets notSupportedLanguageAction
    *  不支持语言的检测防护动作。pass: 放行, block: 拦截
    *
    * @return string|null
    */
    public function getNotSupportedLanguageAction()
    {
        return $this->container['notSupportedLanguageAction'];
    }

    /**
    * Sets notSupportedLanguageAction
    *
    * @param string|null $notSupportedLanguageAction 不支持语言的检测防护动作。pass: 放行, block: 拦截
    *
    * @return $this
    */
    public function setNotSupportedLanguageAction($notSupportedLanguageAction)
    {
        $this->container['notSupportedLanguageAction'] = $notSupportedLanguageAction;
        return $this;
    }

    /**
    * Gets source
    *  规则来源，system代表系统，custom代表用户创建
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 规则来源，system代表系统，custom代表用户创建
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets sourceId
    *  当source=system时，source_id为默认模板规则的Id
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 当source=system时，source_id为默认模板规则的Id
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets description
    *  规则描述，最大长度1024
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
    * @param string|null $description 规则描述，最大长度1024
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets customAnswersId
    *  自定义代答库ID（可选，当action.category=block时有效）
    *
    * @return string|null
    */
    public function getCustomAnswersId()
    {
        return $this->container['customAnswersId'];
    }

    /**
    * Sets customAnswersId
    *
    * @param string|null $customAnswersId 自定义代答库ID（可选，当action.category=block时有效）
    *
    * @return $this
    */
    public function setCustomAnswersId($customAnswersId)
    {
        $this->container['customAnswersId'] = $customAnswersId;
        return $this;
    }

    /**
    * Gets customAnswersName
    *  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    *
    * @return string|null
    */
    public function getCustomAnswersName()
    {
        return $this->container['customAnswersName'];
    }

    /**
    * Sets customAnswersName
    *
    * @param string|null $customAnswersName 自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    *
    * @return $this
    */
    public function setCustomAnswersName($customAnswersName)
    {
        $this->container['customAnswersName'] = $customAnswersName;
        return $this;
    }

    /**
    * Gets abuseConfig
    *  abuseConfig
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\AbuseConfig|null
    */
    public function getAbuseConfig()
    {
        return $this->container['abuseConfig'];
    }

    /**
    * Sets abuseConfig
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\AbuseConfig|null $abuseConfig abuseConfig
    *
    * @return $this
    */
    public function setAbuseConfig($abuseConfig)
    {
        $this->container['abuseConfig'] = $abuseConfig;
        return $this;
    }

    /**
    * Gets topicConfig
    *  topicConfig
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TopicConfig|null
    */
    public function getTopicConfig()
    {
        return $this->container['topicConfig'];
    }

    /**
    * Sets topicConfig
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TopicConfig|null $topicConfig topicConfig
    *
    * @return $this
    */
    public function setTopicConfig($topicConfig)
    {
        $this->container['topicConfig'] = $topicConfig;
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

