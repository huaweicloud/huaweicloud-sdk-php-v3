<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAiguardTemplateRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAiguardTemplateRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateId  模板ID（8位字符串）
    * name  规则名称，非必选，通过模板生成
    * action  action
    * status  规则状态，非必选：enable(启用), disable(禁用)
    * supportedLanguageLabels  语言检测标签列表，只有使用语言模板添加时生效
    * notSupportedLanguageAction  其他语言检测动作，只有使用语言模板添加时生效。pass: 放行, block: 拦截
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateId' => 'string',
            'name' => 'string',
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\AiGuardRuleAction',
            'status' => 'string',
            'supportedLanguageLabels' => 'string[]',
            'notSupportedLanguageAction' => 'string',
            'customAnswersId' => 'string',
            'customAnswersName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateId  模板ID（8位字符串）
    * name  规则名称，非必选，通过模板生成
    * action  action
    * status  规则状态，非必选：enable(启用), disable(禁用)
    * supportedLanguageLabels  语言检测标签列表，只有使用语言模板添加时生效
    * notSupportedLanguageAction  其他语言检测动作，只有使用语言模板添加时生效。pass: 放行, block: 拦截
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateId' => null,
        'name' => null,
        'action' => null,
        'status' => null,
        'supportedLanguageLabels' => null,
        'notSupportedLanguageAction' => null,
        'customAnswersId' => null,
        'customAnswersName' => null
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
    * templateId  模板ID（8位字符串）
    * name  规则名称，非必选，通过模板生成
    * action  action
    * status  规则状态，非必选：enable(启用), disable(禁用)
    * supportedLanguageLabels  语言检测标签列表，只有使用语言模板添加时生效
    * notSupportedLanguageAction  其他语言检测动作，只有使用语言模板添加时生效。pass: 放行, block: 拦截
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateId' => 'template_id',
            'name' => 'name',
            'action' => 'action',
            'status' => 'status',
            'supportedLanguageLabels' => 'supported_language_labels',
            'notSupportedLanguageAction' => 'not_supported_language_action',
            'customAnswersId' => 'custom_answers_id',
            'customAnswersName' => 'custom_answers_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateId  模板ID（8位字符串）
    * name  规则名称，非必选，通过模板生成
    * action  action
    * status  规则状态，非必选：enable(启用), disable(禁用)
    * supportedLanguageLabels  语言检测标签列表，只有使用语言模板添加时生效
    * notSupportedLanguageAction  其他语言检测动作，只有使用语言模板添加时生效。pass: 放行, block: 拦截
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    *
    * @var string[]
    */
    protected static $setters = [
            'templateId' => 'setTemplateId',
            'name' => 'setName',
            'action' => 'setAction',
            'status' => 'setStatus',
            'supportedLanguageLabels' => 'setSupportedLanguageLabels',
            'notSupportedLanguageAction' => 'setNotSupportedLanguageAction',
            'customAnswersId' => 'setCustomAnswersId',
            'customAnswersName' => 'setCustomAnswersName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateId  模板ID（8位字符串）
    * name  规则名称，非必选，通过模板生成
    * action  action
    * status  规则状态，非必选：enable(启用), disable(禁用)
    * supportedLanguageLabels  语言检测标签列表，只有使用语言模板添加时生效
    * notSupportedLanguageAction  其他语言检测动作，只有使用语言模板添加时生效。pass: 放行, block: 拦截
    * customAnswersId  自定义代答库ID（可选，当action.category=block时有效）
    * customAnswersName  自定义代答库名称（可选，当action.category=block时有效，与custom_answers_id对应）
    *
    * @var string[]
    */
    protected static $getters = [
            'templateId' => 'getTemplateId',
            'name' => 'getName',
            'action' => 'getAction',
            'status' => 'getStatus',
            'supportedLanguageLabels' => 'getSupportedLanguageLabels',
            'notSupportedLanguageAction' => 'getNotSupportedLanguageAction',
            'customAnswersId' => 'getCustomAnswersId',
            'customAnswersName' => 'getCustomAnswersName'
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
    const STATUS_ENABLE = 'enable';
    const STATUS_DISABLE = 'disable';
    const NOT_SUPPORTED_LANGUAGE_ACTION_PASS = 'pass';
    const NOT_SUPPORTED_LANGUAGE_ACTION_BLOCK = 'block';
    

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
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['supportedLanguageLabels'] = isset($data['supportedLanguageLabels']) ? $data['supportedLanguageLabels'] : null;
        $this->container['notSupportedLanguageAction'] = isset($data['notSupportedLanguageAction']) ? $data['notSupportedLanguageAction'] : null;
        $this->container['customAnswersId'] = isset($data['customAnswersId']) ? $data['customAnswersId'] : null;
        $this->container['customAnswersName'] = isset($data['customAnswersName']) ? $data['customAnswersName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateId'] === null) {
            $invalidProperties[] = "'templateId' can't be null";
        }
            if (!preg_match("/^[0-9]{8}$/", $this->container['templateId'])) {
                $invalidProperties[] = "invalid value for 'templateId', must be conform to the pattern /^[0-9]{8}$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNotSupportedLanguageActionAllowableValues();
                if (!is_null($this->container['notSupportedLanguageAction']) && !in_array($this->container['notSupportedLanguageAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notSupportedLanguageAction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets templateId
    *  模板ID（8位字符串）
    *
    * @return string
    */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
    * Sets templateId
    *
    * @param string $templateId 模板ID（8位字符串）
    *
    * @return $this
    */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;
        return $this;
    }

    /**
    * Gets name
    *  规则名称，非必选，通过模板生成
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
    * @param string|null $name 规则名称，非必选，通过模板生成
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * Gets status
    *  规则状态，非必选：enable(启用), disable(禁用)
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
    * @param string|null $status 规则状态，非必选：enable(启用), disable(禁用)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets supportedLanguageLabels
    *  语言检测标签列表，只有使用语言模板添加时生效
    *
    * @return string[]|null
    */
    public function getSupportedLanguageLabels()
    {
        return $this->container['supportedLanguageLabels'];
    }

    /**
    * Sets supportedLanguageLabels
    *
    * @param string[]|null $supportedLanguageLabels 语言检测标签列表，只有使用语言模板添加时生效
    *
    * @return $this
    */
    public function setSupportedLanguageLabels($supportedLanguageLabels)
    {
        $this->container['supportedLanguageLabels'] = $supportedLanguageLabels;
        return $this;
    }

    /**
    * Gets notSupportedLanguageAction
    *  其他语言检测动作，只有使用语言模板添加时生效。pass: 放行, block: 拦截
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
    * @param string|null $notSupportedLanguageAction 其他语言检测动作，只有使用语言模板添加时生效。pass: 放行, block: 拦截
    *
    * @return $this
    */
    public function setNotSupportedLanguageAction($notSupportedLanguageAction)
    {
        $this->container['notSupportedLanguageAction'] = $notSupportedLanguageAction;
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

