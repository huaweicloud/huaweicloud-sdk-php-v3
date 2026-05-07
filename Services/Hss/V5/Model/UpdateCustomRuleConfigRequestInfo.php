<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCustomRuleConfigRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCustomRuleConfigRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleName  **参数解释**： 规则名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * isAllHost  **参数解释**: 是否选择所有主机 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: false
    * customRuleValueInfo  customRuleValueInfo
    * agentIds  **参数解释**: agent列表 **约束限制**: 不涉及 **取值范围**: 1-1000个agentID **默认取值**: 不涉及
    * ruleId  **参数解释**： 规则ID **约束限制**： 必填 **取值范围**： 字符长度1-36位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleName' => 'string',
            'isAllHost' => 'bool',
            'customRuleValueInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\CustomRuleValueInfo',
            'agentIds' => 'string[]',
            'ruleId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleName  **参数解释**： 规则名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * isAllHost  **参数解释**: 是否选择所有主机 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: false
    * customRuleValueInfo  customRuleValueInfo
    * agentIds  **参数解释**: agent列表 **约束限制**: 不涉及 **取值范围**: 1-1000个agentID **默认取值**: 不涉及
    * ruleId  **参数解释**： 规则ID **约束限制**： 必填 **取值范围**： 字符长度1-36位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleName' => null,
        'isAllHost' => null,
        'customRuleValueInfo' => null,
        'agentIds' => null,
        'ruleId' => null
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
    * ruleName  **参数解释**： 规则名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * isAllHost  **参数解释**: 是否选择所有主机 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: false
    * customRuleValueInfo  customRuleValueInfo
    * agentIds  **参数解释**: agent列表 **约束限制**: 不涉及 **取值范围**: 1-1000个agentID **默认取值**: 不涉及
    * ruleId  **参数解释**： 规则ID **约束限制**： 必填 **取值范围**： 字符长度1-36位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleName' => 'rule_name',
            'isAllHost' => 'is_all_host',
            'customRuleValueInfo' => 'custom_rule_value_info',
            'agentIds' => 'agent_ids',
            'ruleId' => 'rule_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleName  **参数解释**： 规则名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * isAllHost  **参数解释**: 是否选择所有主机 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: false
    * customRuleValueInfo  customRuleValueInfo
    * agentIds  **参数解释**: agent列表 **约束限制**: 不涉及 **取值范围**: 1-1000个agentID **默认取值**: 不涉及
    * ruleId  **参数解释**： 规则ID **约束限制**： 必填 **取值范围**： 字符长度1-36位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleName' => 'setRuleName',
            'isAllHost' => 'setIsAllHost',
            'customRuleValueInfo' => 'setCustomRuleValueInfo',
            'agentIds' => 'setAgentIds',
            'ruleId' => 'setRuleId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleName  **参数解释**： 规则名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    * isAllHost  **参数解释**: 是否选择所有主机 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: false
    * customRuleValueInfo  customRuleValueInfo
    * agentIds  **参数解释**: agent列表 **约束限制**: 不涉及 **取值范围**: 1-1000个agentID **默认取值**: 不涉及
    * ruleId  **参数解释**： 规则ID **约束限制**： 必填 **取值范围**： 字符长度1-36位 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleName' => 'getRuleName',
            'isAllHost' => 'getIsAllHost',
            'customRuleValueInfo' => 'getCustomRuleValueInfo',
            'agentIds' => 'getAgentIds',
            'ruleId' => 'getRuleId'
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
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['isAllHost'] = isset($data['isAllHost']) ? $data['isAllHost'] : null;
        $this->container['customRuleValueInfo'] = isset($data['customRuleValueInfo']) ? $data['customRuleValueInfo'] : null;
        $this->container['agentIds'] = isset($data['agentIds']) ? $data['agentIds'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ruleName'] === null) {
            $invalidProperties[] = "'ruleName' can't be null";
        }
            if ((mb_strlen($this->container['ruleName']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['ruleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['customRuleValueInfo'] === null) {
            $invalidProperties[] = "'customRuleValueInfo' can't be null";
        }
        if ($this->container['ruleId'] === null) {
            $invalidProperties[] = "'ruleId' can't be null";
        }
            if ((mb_strlen($this->container['ruleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['ruleId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleId', the character length must be bigger than or equal to 1.";
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
    * Gets ruleName
    *  **参数解释**： 规则名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string $ruleName **参数解释**： 规则名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-64位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets isAllHost
    *  **参数解释**: 是否选择所有主机 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: false
    *
    * @return bool|null
    */
    public function getIsAllHost()
    {
        return $this->container['isAllHost'];
    }

    /**
    * Sets isAllHost
    *
    * @param bool|null $isAllHost **参数解释**: 是否选择所有主机 **约束限制**: 不涉及 **取值范围**: - true：是 - false：否  **默认取值**: false
    *
    * @return $this
    */
    public function setIsAllHost($isAllHost)
    {
        $this->container['isAllHost'] = $isAllHost;
        return $this;
    }

    /**
    * Gets customRuleValueInfo
    *  customRuleValueInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CustomRuleValueInfo
    */
    public function getCustomRuleValueInfo()
    {
        return $this->container['customRuleValueInfo'];
    }

    /**
    * Sets customRuleValueInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CustomRuleValueInfo $customRuleValueInfo customRuleValueInfo
    *
    * @return $this
    */
    public function setCustomRuleValueInfo($customRuleValueInfo)
    {
        $this->container['customRuleValueInfo'] = $customRuleValueInfo;
        return $this;
    }

    /**
    * Gets agentIds
    *  **参数解释**: agent列表 **约束限制**: 不涉及 **取值范围**: 1-1000个agentID **默认取值**: 不涉及
    *
    * @return string[]|null
    */
    public function getAgentIds()
    {
        return $this->container['agentIds'];
    }

    /**
    * Sets agentIds
    *
    * @param string[]|null $agentIds **参数解释**: agent列表 **约束限制**: 不涉及 **取值范围**: 1-1000个agentID **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentIds($agentIds)
    {
        $this->container['agentIds'] = $agentIds;
        return $this;
    }

    /**
    * Gets ruleId
    *  **参数解释**： 规则ID **约束限制**： 必填 **取值范围**： 字符长度1-36位 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string $ruleId **参数解释**： 规则ID **约束限制**： 必填 **取值范围**： 字符长度1-36位 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
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

