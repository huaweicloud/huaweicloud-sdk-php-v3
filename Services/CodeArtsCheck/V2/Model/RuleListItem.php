<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleListItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleListItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleSet  规则集规范分类
    * ruleId  规则id
    * ruleLanguage  规则所属语言
    * ruleName  规则名称
    * ruleSeverity  规则问题级别
    * ruleTages  规则标签
    * rightExample  正确示例
    * errorExample  错误示例
    * reviseOpinion  修改建议
    * ruleDesc  规则描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleSet' => 'string',
            'ruleId' => 'string',
            'ruleLanguage' => 'string',
            'ruleName' => 'string',
            'ruleSeverity' => 'string',
            'ruleTages' => 'string',
            'rightExample' => 'string',
            'errorExample' => 'string',
            'reviseOpinion' => 'string',
            'ruleDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleSet  规则集规范分类
    * ruleId  规则id
    * ruleLanguage  规则所属语言
    * ruleName  规则名称
    * ruleSeverity  规则问题级别
    * ruleTages  规则标签
    * rightExample  正确示例
    * errorExample  错误示例
    * reviseOpinion  修改建议
    * ruleDesc  规则描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleSet' => null,
        'ruleId' => null,
        'ruleLanguage' => null,
        'ruleName' => null,
        'ruleSeverity' => null,
        'ruleTages' => null,
        'rightExample' => null,
        'errorExample' => null,
        'reviseOpinion' => null,
        'ruleDesc' => null
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
    * ruleSet  规则集规范分类
    * ruleId  规则id
    * ruleLanguage  规则所属语言
    * ruleName  规则名称
    * ruleSeverity  规则问题级别
    * ruleTages  规则标签
    * rightExample  正确示例
    * errorExample  错误示例
    * reviseOpinion  修改建议
    * ruleDesc  规则描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleSet' => 'rule_set',
            'ruleId' => 'rule_id',
            'ruleLanguage' => 'rule_language',
            'ruleName' => 'rule_name',
            'ruleSeverity' => 'rule_severity',
            'ruleTages' => 'rule_tages',
            'rightExample' => 'right_example',
            'errorExample' => 'error_example',
            'reviseOpinion' => 'revise_opinion',
            'ruleDesc' => 'rule_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleSet  规则集规范分类
    * ruleId  规则id
    * ruleLanguage  规则所属语言
    * ruleName  规则名称
    * ruleSeverity  规则问题级别
    * ruleTages  规则标签
    * rightExample  正确示例
    * errorExample  错误示例
    * reviseOpinion  修改建议
    * ruleDesc  规则描述
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleSet' => 'setRuleSet',
            'ruleId' => 'setRuleId',
            'ruleLanguage' => 'setRuleLanguage',
            'ruleName' => 'setRuleName',
            'ruleSeverity' => 'setRuleSeverity',
            'ruleTages' => 'setRuleTages',
            'rightExample' => 'setRightExample',
            'errorExample' => 'setErrorExample',
            'reviseOpinion' => 'setReviseOpinion',
            'ruleDesc' => 'setRuleDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleSet  规则集规范分类
    * ruleId  规则id
    * ruleLanguage  规则所属语言
    * ruleName  规则名称
    * ruleSeverity  规则问题级别
    * ruleTages  规则标签
    * rightExample  正确示例
    * errorExample  错误示例
    * reviseOpinion  修改建议
    * ruleDesc  规则描述
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleSet' => 'getRuleSet',
            'ruleId' => 'getRuleId',
            'ruleLanguage' => 'getRuleLanguage',
            'ruleName' => 'getRuleName',
            'ruleSeverity' => 'getRuleSeverity',
            'ruleTages' => 'getRuleTages',
            'rightExample' => 'getRightExample',
            'errorExample' => 'getErrorExample',
            'reviseOpinion' => 'getReviseOpinion',
            'ruleDesc' => 'getRuleDesc'
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
        $this->container['ruleSet'] = isset($data['ruleSet']) ? $data['ruleSet'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleLanguage'] = isset($data['ruleLanguage']) ? $data['ruleLanguage'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleSeverity'] = isset($data['ruleSeverity']) ? $data['ruleSeverity'] : null;
        $this->container['ruleTages'] = isset($data['ruleTages']) ? $data['ruleTages'] : null;
        $this->container['rightExample'] = isset($data['rightExample']) ? $data['rightExample'] : null;
        $this->container['errorExample'] = isset($data['errorExample']) ? $data['errorExample'] : null;
        $this->container['reviseOpinion'] = isset($data['reviseOpinion']) ? $data['reviseOpinion'] : null;
        $this->container['ruleDesc'] = isset($data['ruleDesc']) ? $data['ruleDesc'] : null;
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
    * Gets ruleSet
    *  规则集规范分类
    *
    * @return string|null
    */
    public function getRuleSet()
    {
        return $this->container['ruleSet'];
    }

    /**
    * Sets ruleSet
    *
    * @param string|null $ruleSet 规则集规范分类
    *
    * @return $this
    */
    public function setRuleSet($ruleSet)
    {
        $this->container['ruleSet'] = $ruleSet;
        return $this;
    }

    /**
    * Gets ruleId
    *  规则id
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
    * @param string|null $ruleId 规则id
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets ruleLanguage
    *  规则所属语言
    *
    * @return string|null
    */
    public function getRuleLanguage()
    {
        return $this->container['ruleLanguage'];
    }

    /**
    * Sets ruleLanguage
    *
    * @param string|null $ruleLanguage 规则所属语言
    *
    * @return $this
    */
    public function setRuleLanguage($ruleLanguage)
    {
        $this->container['ruleLanguage'] = $ruleLanguage;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名称
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
    * @param string|null $ruleName 规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets ruleSeverity
    *  规则问题级别
    *
    * @return string|null
    */
    public function getRuleSeverity()
    {
        return $this->container['ruleSeverity'];
    }

    /**
    * Sets ruleSeverity
    *
    * @param string|null $ruleSeverity 规则问题级别
    *
    * @return $this
    */
    public function setRuleSeverity($ruleSeverity)
    {
        $this->container['ruleSeverity'] = $ruleSeverity;
        return $this;
    }

    /**
    * Gets ruleTages
    *  规则标签
    *
    * @return string|null
    */
    public function getRuleTages()
    {
        return $this->container['ruleTages'];
    }

    /**
    * Sets ruleTages
    *
    * @param string|null $ruleTages 规则标签
    *
    * @return $this
    */
    public function setRuleTages($ruleTages)
    {
        $this->container['ruleTages'] = $ruleTages;
        return $this;
    }

    /**
    * Gets rightExample
    *  正确示例
    *
    * @return string|null
    */
    public function getRightExample()
    {
        return $this->container['rightExample'];
    }

    /**
    * Sets rightExample
    *
    * @param string|null $rightExample 正确示例
    *
    * @return $this
    */
    public function setRightExample($rightExample)
    {
        $this->container['rightExample'] = $rightExample;
        return $this;
    }

    /**
    * Gets errorExample
    *  错误示例
    *
    * @return string|null
    */
    public function getErrorExample()
    {
        return $this->container['errorExample'];
    }

    /**
    * Sets errorExample
    *
    * @param string|null $errorExample 错误示例
    *
    * @return $this
    */
    public function setErrorExample($errorExample)
    {
        $this->container['errorExample'] = $errorExample;
        return $this;
    }

    /**
    * Gets reviseOpinion
    *  修改建议
    *
    * @return string|null
    */
    public function getReviseOpinion()
    {
        return $this->container['reviseOpinion'];
    }

    /**
    * Sets reviseOpinion
    *
    * @param string|null $reviseOpinion 修改建议
    *
    * @return $this
    */
    public function setReviseOpinion($reviseOpinion)
    {
        $this->container['reviseOpinion'] = $reviseOpinion;
        return $this;
    }

    /**
    * Gets ruleDesc
    *  规则描述
    *
    * @return string|null
    */
    public function getRuleDesc()
    {
        return $this->container['ruleDesc'];
    }

    /**
    * Sets ruleDesc
    *
    * @param string|null $ruleDesc 规则描述
    *
    * @return $this
    */
    public function setRuleDesc($ruleDesc)
    {
        $this->container['ruleDesc'] = $ruleDesc;
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

