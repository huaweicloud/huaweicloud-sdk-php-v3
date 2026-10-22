<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReferencedRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReferencedRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  规则ID
    * ruleName  策略名称
    * policyId  引用该代答库的规则所属策略ID
    * policyName  引用该代答库的规则所属策略名称
    * detectOptsType  规则检测选项类型，可选：lexicon(词库检测), compliance(合规检测), inject(注入检测), immunity_lexicon(豁免词库), supported_language(语言检测), pii(PII检测), abuse(算力滥用检测), topic_detect(话题检测)等
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'ruleName' => 'string',
            'policyId' => 'string',
            'policyName' => 'string',
            'detectOptsType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  规则ID
    * ruleName  策略名称
    * policyId  引用该代答库的规则所属策略ID
    * policyName  引用该代答库的规则所属策略名称
    * detectOptsType  规则检测选项类型，可选：lexicon(词库检测), compliance(合规检测), inject(注入检测), immunity_lexicon(豁免词库), supported_language(语言检测), pii(PII检测), abuse(算力滥用检测), topic_detect(话题检测)等
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'ruleName' => null,
        'policyId' => null,
        'policyName' => null,
        'detectOptsType' => null
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
    * ruleId  规则ID
    * ruleName  策略名称
    * policyId  引用该代答库的规则所属策略ID
    * policyName  引用该代答库的规则所属策略名称
    * detectOptsType  规则检测选项类型，可选：lexicon(词库检测), compliance(合规检测), inject(注入检测), immunity_lexicon(豁免词库), supported_language(语言检测), pii(PII检测), abuse(算力滥用检测), topic_detect(话题检测)等
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'ruleName' => 'rule_name',
            'policyId' => 'policy_id',
            'policyName' => 'policy_name',
            'detectOptsType' => 'detect_opts_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  规则ID
    * ruleName  策略名称
    * policyId  引用该代答库的规则所属策略ID
    * policyName  引用该代答库的规则所属策略名称
    * detectOptsType  规则检测选项类型，可选：lexicon(词库检测), compliance(合规检测), inject(注入检测), immunity_lexicon(豁免词库), supported_language(语言检测), pii(PII检测), abuse(算力滥用检测), topic_detect(话题检测)等
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'ruleName' => 'setRuleName',
            'policyId' => 'setPolicyId',
            'policyName' => 'setPolicyName',
            'detectOptsType' => 'setDetectOptsType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  规则ID
    * ruleName  策略名称
    * policyId  引用该代答库的规则所属策略ID
    * policyName  引用该代答库的规则所属策略名称
    * detectOptsType  规则检测选项类型，可选：lexicon(词库检测), compliance(合规检测), inject(注入检测), immunity_lexicon(豁免词库), supported_language(语言检测), pii(PII检测), abuse(算力滥用检测), topic_detect(话题检测)等
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'ruleName' => 'getRuleName',
            'policyId' => 'getPolicyId',
            'policyName' => 'getPolicyName',
            'detectOptsType' => 'getDetectOptsType'
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['detectOptsType'] = isset($data['detectOptsType']) ? $data['detectOptsType'] : null;
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
    * Gets ruleId
    *  规则ID
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 规则ID
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets ruleName
    *  策略名称
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 策略名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets policyId
    *  引用该代答库的规则所属策略ID
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
    * @param string|null $policyId 引用该代答库的规则所属策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets policyName
    *  引用该代答库的规则所属策略名称
    *
    * @return string|null
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string|null $policyName 引用该代答库的规则所属策略名称
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets detectOptsType
    *  规则检测选项类型，可选：lexicon(词库检测), compliance(合规检测), inject(注入检测), immunity_lexicon(豁免词库), supported_language(语言检测), pii(PII检测), abuse(算力滥用检测), topic_detect(话题检测)等
    *
    * @return string|null
    */
    public function getDetectOptsType()
    {
        return $this->container['detectOptsType'];
    }

    /**
    * Sets detectOptsType
    *
    * @param string|null $detectOptsType 规则检测选项类型，可选：lexicon(词库检测), compliance(合规检测), inject(注入检测), immunity_lexicon(豁免词库), supported_language(语言检测), pii(PII检测), abuse(算力滥用检测), topic_detect(话题检测)等
    *
    * @return $this
    */
    public function setDetectOptsType($detectOptsType)
    {
        $this->container['detectOptsType'] = $detectOptsType;
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

