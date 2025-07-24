<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  规则id
    * ruleLanguage  规则所属语言
    * ruleName  规则名称
    * ruleSeverity  规则问题级别
    * ruleTages  规则标签
    * checked  规则状态0：未启用，1：已启用
    * ruleConfigList  规则配置参数阈值相关信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'ruleLanguage' => 'string',
            'ruleName' => 'string',
            'ruleSeverity' => 'string',
            'ruleTages' => 'string',
            'checked' => 'string',
            'ruleConfigList' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\RuleConfig[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  规则id
    * ruleLanguage  规则所属语言
    * ruleName  规则名称
    * ruleSeverity  规则问题级别
    * ruleTages  规则标签
    * checked  规则状态0：未启用，1：已启用
    * ruleConfigList  规则配置参数阈值相关信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'ruleLanguage' => null,
        'ruleName' => null,
        'ruleSeverity' => null,
        'ruleTages' => null,
        'checked' => null,
        'ruleConfigList' => null
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
    * ruleId  规则id
    * ruleLanguage  规则所属语言
    * ruleName  规则名称
    * ruleSeverity  规则问题级别
    * ruleTages  规则标签
    * checked  规则状态0：未启用，1：已启用
    * ruleConfigList  规则配置参数阈值相关信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'ruleLanguage' => 'rule_language',
            'ruleName' => 'rule_name',
            'ruleSeverity' => 'rule_severity',
            'ruleTages' => 'rule_tages',
            'checked' => 'checked',
            'ruleConfigList' => 'rule_config_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  规则id
    * ruleLanguage  规则所属语言
    * ruleName  规则名称
    * ruleSeverity  规则问题级别
    * ruleTages  规则标签
    * checked  规则状态0：未启用，1：已启用
    * ruleConfigList  规则配置参数阈值相关信息
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'ruleLanguage' => 'setRuleLanguage',
            'ruleName' => 'setRuleName',
            'ruleSeverity' => 'setRuleSeverity',
            'ruleTages' => 'setRuleTages',
            'checked' => 'setChecked',
            'ruleConfigList' => 'setRuleConfigList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  规则id
    * ruleLanguage  规则所属语言
    * ruleName  规则名称
    * ruleSeverity  规则问题级别
    * ruleTages  规则标签
    * checked  规则状态0：未启用，1：已启用
    * ruleConfigList  规则配置参数阈值相关信息
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'ruleLanguage' => 'getRuleLanguage',
            'ruleName' => 'getRuleName',
            'ruleSeverity' => 'getRuleSeverity',
            'ruleTages' => 'getRuleTages',
            'checked' => 'getChecked',
            'ruleConfigList' => 'getRuleConfigList'
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
        $this->container['ruleLanguage'] = isset($data['ruleLanguage']) ? $data['ruleLanguage'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['ruleSeverity'] = isset($data['ruleSeverity']) ? $data['ruleSeverity'] : null;
        $this->container['ruleTages'] = isset($data['ruleTages']) ? $data['ruleTages'] : null;
        $this->container['checked'] = isset($data['checked']) ? $data['checked'] : null;
        $this->container['ruleConfigList'] = isset($data['ruleConfigList']) ? $data['ruleConfigList'] : null;
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
    * Gets checked
    *  规则状态0：未启用，1：已启用
    *
    * @return string|null
    */
    public function getChecked()
    {
        return $this->container['checked'];
    }

    /**
    * Sets checked
    *
    * @param string|null $checked 规则状态0：未启用，1：已启用
    *
    * @return $this
    */
    public function setChecked($checked)
    {
        $this->container['checked'] = $checked;
        return $this;
    }

    /**
    * Gets ruleConfigList
    *  规则配置参数阈值相关信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\RuleConfig[]|null
    */
    public function getRuleConfigList()
    {
        return $this->container['ruleConfigList'];
    }

    /**
    * Sets ruleConfigList
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\RuleConfig[]|null $ruleConfigList 规则配置参数阈值相关信息
    *
    * @return $this
    */
    public function setRuleConfigList($ruleConfigList)
    {
        $this->container['ruleConfigList'] = $ruleConfigList;
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

