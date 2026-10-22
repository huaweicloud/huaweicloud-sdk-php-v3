<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAiGuardRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAiGuardRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  规则名称
    * detectOpts  检测选项配置列表
    * action  action
    * detectLabels  detectLabels
    * notSupportedLanguageAction  不支持语言的防护动作，支持pass和block
    * detectTarget  检测目标，当detect_type=image时生效，ocr代表图片中提取的文本，content代表图片语义
    * description  规则描述，最大长度1024
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    * abuseConfig  abuseConfig
    * topicConfig  topicConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'detectOpts' => '\HuaweiCloud\SDK\Waf\V1\Model\DetectOpt[]',
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\AiGuardRuleAction',
            'detectLabels' => '\HuaweiCloud\SDK\Waf\V1\Model\DetectLabels',
            'notSupportedLanguageAction' => 'string',
            'detectTarget' => 'string',
            'description' => 'string',
            'customAnswersId' => 'string',
            'customAnswersName' => 'string',
            'abuseConfig' => '\HuaweiCloud\SDK\Waf\V1\Model\AbuseConfig',
            'topicConfig' => '\HuaweiCloud\SDK\Waf\V1\Model\TopicConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  规则名称
    * detectOpts  检测选项配置列表
    * action  action
    * detectLabels  detectLabels
    * notSupportedLanguageAction  不支持语言的防护动作，支持pass和block
    * detectTarget  检测目标，当detect_type=image时生效，ocr代表图片中提取的文本，content代表图片语义
    * description  规则描述，最大长度1024
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    * abuseConfig  abuseConfig
    * topicConfig  topicConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'detectOpts' => null,
        'action' => null,
        'detectLabels' => null,
        'notSupportedLanguageAction' => null,
        'detectTarget' => null,
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
    * name  规则名称
    * detectOpts  检测选项配置列表
    * action  action
    * detectLabels  detectLabels
    * notSupportedLanguageAction  不支持语言的防护动作，支持pass和block
    * detectTarget  检测目标，当detect_type=image时生效，ocr代表图片中提取的文本，content代表图片语义
    * description  规则描述，最大长度1024
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    * abuseConfig  abuseConfig
    * topicConfig  topicConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'detectOpts' => 'detect_opts',
            'action' => 'action',
            'detectLabels' => 'detect_labels',
            'notSupportedLanguageAction' => 'not_supported_language_action',
            'detectTarget' => 'detect_target',
            'description' => 'description',
            'customAnswersId' => 'custom_answers_id',
            'customAnswersName' => 'custom_answers_name',
            'abuseConfig' => 'abuse_config',
            'topicConfig' => 'topic_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  规则名称
    * detectOpts  检测选项配置列表
    * action  action
    * detectLabels  detectLabels
    * notSupportedLanguageAction  不支持语言的防护动作，支持pass和block
    * detectTarget  检测目标，当detect_type=image时生效，ocr代表图片中提取的文本，content代表图片语义
    * description  规则描述，最大长度1024
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    * abuseConfig  abuseConfig
    * topicConfig  topicConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'detectOpts' => 'setDetectOpts',
            'action' => 'setAction',
            'detectLabels' => 'setDetectLabels',
            'notSupportedLanguageAction' => 'setNotSupportedLanguageAction',
            'detectTarget' => 'setDetectTarget',
            'description' => 'setDescription',
            'customAnswersId' => 'setCustomAnswersId',
            'customAnswersName' => 'setCustomAnswersName',
            'abuseConfig' => 'setAbuseConfig',
            'topicConfig' => 'setTopicConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  规则名称
    * detectOpts  检测选项配置列表
    * action  action
    * detectLabels  detectLabels
    * notSupportedLanguageAction  不支持语言的防护动作，支持pass和block
    * detectTarget  检测目标，当detect_type=image时生效，ocr代表图片中提取的文本，content代表图片语义
    * description  规则描述，最大长度1024
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    * abuseConfig  abuseConfig
    * topicConfig  topicConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'detectOpts' => 'getDetectOpts',
            'action' => 'getAction',
            'detectLabels' => 'getDetectLabels',
            'notSupportedLanguageAction' => 'getNotSupportedLanguageAction',
            'detectTarget' => 'getDetectTarget',
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
    const NOT_SUPPORTED_LANGUAGE_ACTION_PASS = 'pass';
    const NOT_SUPPORTED_LANGUAGE_ACTION_BLOCK = 'block';
    const DETECT_TARGET_OCR = 'ocr';
    const DETECT_TARGET_CONTENT = 'content';
    

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
    public function getDetectTargetAllowableValues()
    {
        return [
            self::DETECT_TARGET_OCR,
            self::DETECT_TARGET_CONTENT,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['detectOpts'] = isset($data['detectOpts']) ? $data['detectOpts'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['detectLabels'] = isset($data['detectLabels']) ? $data['detectLabels'] : null;
        $this->container['notSupportedLanguageAction'] = isset($data['notSupportedLanguageAction']) ? $data['notSupportedLanguageAction'] : null;
        $this->container['detectTarget'] = isset($data['detectTarget']) ? $data['detectTarget'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['detectOpts'] === null) {
            $invalidProperties[] = "'detectOpts' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if ($this->container['detectLabels'] === null) {
            $invalidProperties[] = "'detectLabels' can't be null";
        }
            $allowedValues = $this->getNotSupportedLanguageActionAllowableValues();
                if (!is_null($this->container['notSupportedLanguageAction']) && !in_array($this->container['notSupportedLanguageAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notSupportedLanguageAction', must be one of '%s'",
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
    * Gets name
    *  规则名称
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
    * @param string $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets detectOpts
    *  检测选项配置列表
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\DetectOpt[]
    */
    public function getDetectOpts()
    {
        return $this->container['detectOpts'];
    }

    /**
    * Sets detectOpts
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\DetectOpt[] $detectOpts 检测选项配置列表
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\AiGuardRuleAction
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\AiGuardRuleAction $action action
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
    * @return \HuaweiCloud\SDK\Waf\V1\Model\DetectLabels
    */
    public function getDetectLabels()
    {
        return $this->container['detectLabels'];
    }

    /**
    * Sets detectLabels
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\DetectLabels $detectLabels detectLabels
    *
    * @return $this
    */
    public function setDetectLabels($detectLabels)
    {
        $this->container['detectLabels'] = $detectLabels;
        return $this;
    }

    /**
    * Gets notSupportedLanguageAction
    *  不支持语言的防护动作，支持pass和block
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
    * @param string|null $notSupportedLanguageAction 不支持语言的防护动作，支持pass和block
    *
    * @return $this
    */
    public function setNotSupportedLanguageAction($notSupportedLanguageAction)
    {
        $this->container['notSupportedLanguageAction'] = $notSupportedLanguageAction;
        return $this;
    }

    /**
    * Gets detectTarget
    *  检测目标，当detect_type=image时生效，ocr代表图片中提取的文本，content代表图片语义
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
    * @param string|null $detectTarget 检测目标，当detect_type=image时生效，ocr代表图片中提取的文本，content代表图片语义
    *
    * @return $this
    */
    public function setDetectTarget($detectTarget)
    {
        $this->container['detectTarget'] = $detectTarget;
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

