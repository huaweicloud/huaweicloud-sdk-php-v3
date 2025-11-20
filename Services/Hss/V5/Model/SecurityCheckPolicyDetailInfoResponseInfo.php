<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityCheckPolicyDetailInfoResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityCheckPolicyDetailInfoResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释** 检查项唯一值 **取值范围** 字符长度0-256位
    * checkRuleId  **参数解释** 检查项id **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    * checkRuleType  **参数解释** 检查项类型是否是数值类型 **取值范围** - 1 : 是 - 0 : 不是
    * checkType  **参数解释** 配置检查（基线）的类型，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    * severity  **参数解释** 检查项的风险程度 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    * level  **参数解释** 配置检查（基线）检查项的版本信息 **取值范围** 字符长度0-32位
    * checked  **参数解释** 检查项是否被选中 **取值范围** - true  : 被选中 - false : 未被选中
    * ruleParams  **参数解释** 可自定义配置的参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'checkRuleId' => 'string',
            'checkRuleName' => 'string',
            'checkRuleType' => 'int',
            'checkType' => 'string',
            'severity' => 'string',
            'level' => 'string',
            'checked' => 'bool',
            'ruleParams' => '\HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixParamInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释** 检查项唯一值 **取值范围** 字符长度0-256位
    * checkRuleId  **参数解释** 检查项id **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    * checkRuleType  **参数解释** 检查项类型是否是数值类型 **取值范围** - 1 : 是 - 0 : 不是
    * checkType  **参数解释** 配置检查（基线）的类型，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    * severity  **参数解释** 检查项的风险程度 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    * level  **参数解释** 配置检查（基线）检查项的版本信息 **取值范围** 字符长度0-32位
    * checked  **参数解释** 检查项是否被选中 **取值范围** - true  : 被选中 - false : 未被选中
    * ruleParams  **参数解释** 可自定义配置的参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'checkRuleId' => null,
        'checkRuleName' => null,
        'checkRuleType' => 'int32',
        'checkType' => null,
        'severity' => null,
        'level' => null,
        'checked' => null,
        'ruleParams' => null
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
    * key  **参数解释** 检查项唯一值 **取值范围** 字符长度0-256位
    * checkRuleId  **参数解释** 检查项id **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    * checkRuleType  **参数解释** 检查项类型是否是数值类型 **取值范围** - 1 : 是 - 0 : 不是
    * checkType  **参数解释** 配置检查（基线）的类型，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    * severity  **参数解释** 检查项的风险程度 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    * level  **参数解释** 配置检查（基线）检查项的版本信息 **取值范围** 字符长度0-32位
    * checked  **参数解释** 检查项是否被选中 **取值范围** - true  : 被选中 - false : 未被选中
    * ruleParams  **参数解释** 可自定义配置的参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'checkRuleId' => 'check_rule_id',
            'checkRuleName' => 'check_rule_name',
            'checkRuleType' => 'check_rule_type',
            'checkType' => 'check_type',
            'severity' => 'severity',
            'level' => 'level',
            'checked' => 'checked',
            'ruleParams' => 'rule_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释** 检查项唯一值 **取值范围** 字符长度0-256位
    * checkRuleId  **参数解释** 检查项id **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    * checkRuleType  **参数解释** 检查项类型是否是数值类型 **取值范围** - 1 : 是 - 0 : 不是
    * checkType  **参数解释** 配置检查（基线）的类型，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    * severity  **参数解释** 检查项的风险程度 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    * level  **参数解释** 配置检查（基线）检查项的版本信息 **取值范围** 字符长度0-32位
    * checked  **参数解释** 检查项是否被选中 **取值范围** - true  : 被选中 - false : 未被选中
    * ruleParams  **参数解释** 可自定义配置的参数
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'checkRuleId' => 'setCheckRuleId',
            'checkRuleName' => 'setCheckRuleName',
            'checkRuleType' => 'setCheckRuleType',
            'checkType' => 'setCheckType',
            'severity' => 'setSeverity',
            'level' => 'setLevel',
            'checked' => 'setChecked',
            'ruleParams' => 'setRuleParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释** 检查项唯一值 **取值范围** 字符长度0-256位
    * checkRuleId  **参数解释** 检查项id **取值范围** 字符长度0-256位
    * checkRuleName  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    * checkRuleType  **参数解释** 检查项类型是否是数值类型 **取值范围** - 1 : 是 - 0 : 不是
    * checkType  **参数解释** 配置检查（基线）的类型，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    * severity  **参数解释** 检查项的风险程度 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    * level  **参数解释** 配置检查（基线）检查项的版本信息 **取值范围** 字符长度0-32位
    * checked  **参数解释** 检查项是否被选中 **取值范围** - true  : 被选中 - false : 未被选中
    * ruleParams  **参数解释** 可自定义配置的参数
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'checkRuleId' => 'getCheckRuleId',
            'checkRuleName' => 'getCheckRuleName',
            'checkRuleType' => 'getCheckRuleType',
            'checkType' => 'getCheckType',
            'severity' => 'getSeverity',
            'level' => 'getLevel',
            'checked' => 'getChecked',
            'ruleParams' => 'getRuleParams'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['checkRuleId'] = isset($data['checkRuleId']) ? $data['checkRuleId'] : null;
        $this->container['checkRuleName'] = isset($data['checkRuleName']) ? $data['checkRuleName'] : null;
        $this->container['checkRuleType'] = isset($data['checkRuleType']) ? $data['checkRuleType'] : null;
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['checked'] = isset($data['checked']) ? $data['checked'] : null;
        $this->container['ruleParams'] = isset($data['ruleParams']) ? $data['ruleParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 256)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 0)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) > 65534)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['checkRuleName']) && (mb_strlen($this->container['checkRuleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleType']) && ($this->container['checkRuleType'] > 10)) {
                $invalidProperties[] = "invalid value for 'checkRuleType', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['checkRuleType']) && ($this->container['checkRuleType'] < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkType']) && (mb_strlen($this->container['checkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && !preg_match("/^(High|Medium|Low)$/", $this->container['severity'])) {
                $invalidProperties[] = "invalid value for 'severity', must be conform to the pattern /^(High|Medium|Low)$/.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 32)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && !preg_match("/^.*$/", $this->container['level'])) {
                $invalidProperties[] = "invalid value for 'level', must be conform to the pattern /^.*$/.";
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
    * Gets key
    *  **参数解释** 检查项唯一值 **取值范围** 字符长度0-256位
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key **参数解释** 检查项唯一值 **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets checkRuleId
    *  **参数解释** 检查项id **取值范围** 字符长度0-256位
    *
    * @return string|null
    */
    public function getCheckRuleId()
    {
        return $this->container['checkRuleId'];
    }

    /**
    * Sets checkRuleId
    *
    * @param string|null $checkRuleId **参数解释** 检查项id **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setCheckRuleId($checkRuleId)
    {
        $this->container['checkRuleId'] = $checkRuleId;
        return $this;
    }

    /**
    * Gets checkRuleName
    *  **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    *
    * @return string|null
    */
    public function getCheckRuleName()
    {
        return $this->container['checkRuleName'];
    }

    /**
    * Sets checkRuleName
    *
    * @param string|null $checkRuleName **参数解释** 检查项（检查规则）名称 **取值范围** 字符长度0-65534位
    *
    * @return $this
    */
    public function setCheckRuleName($checkRuleName)
    {
        $this->container['checkRuleName'] = $checkRuleName;
        return $this;
    }

    /**
    * Gets checkRuleType
    *  **参数解释** 检查项类型是否是数值类型 **取值范围** - 1 : 是 - 0 : 不是
    *
    * @return int|null
    */
    public function getCheckRuleType()
    {
        return $this->container['checkRuleType'];
    }

    /**
    * Sets checkRuleType
    *
    * @param int|null $checkRuleType **参数解释** 检查项类型是否是数值类型 **取值范围** - 1 : 是 - 0 : 不是
    *
    * @return $this
    */
    public function setCheckRuleType($checkRuleType)
    {
        $this->container['checkRuleType'] = $checkRuleType;
        return $this;
    }

    /**
    * Gets checkType
    *  **参数解释** 配置检查（基线）的类型，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    *
    * @return string|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string|null $checkType **参数解释** 配置检查（基线）的类型，例如SSH、CentOS 7、Windows **取值范围** 字符长度0-256位
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释** 检查项的风险程度 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释** 检查项的风险程度 **取值范围** - Low    : 低危 - Medium : 中危 - High   : 高危
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释** 配置检查（基线）检查项的版本信息 **取值范围** 字符长度0-32位
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释** 配置检查（基线）检查项的版本信息 **取值范围** 字符长度0-32位
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets checked
    *  **参数解释** 检查项是否被选中 **取值范围** - true  : 被选中 - false : 未被选中
    *
    * @return bool|null
    */
    public function getChecked()
    {
        return $this->container['checked'];
    }

    /**
    * Sets checked
    *
    * @param bool|null $checked **参数解释** 检查项是否被选中 **取值范围** - true  : 被选中 - false : 未被选中
    *
    * @return $this
    */
    public function setChecked($checked)
    {
        $this->container['checked'] = $checked;
        return $this;
    }

    /**
    * Gets ruleParams
    *  **参数解释** 可自定义配置的参数
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixParamInfo[]|null
    */
    public function getRuleParams()
    {
        return $this->container['ruleParams'];
    }

    /**
    * Sets ruleParams
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixParamInfo[]|null $ruleParams **参数解释** 可自定义配置的参数
    *
    * @return $this
    */
    public function setRuleParams($ruleParams)
    {
        $this->container['ruleParams'] = $ruleParams;
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

