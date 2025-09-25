<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyRuleIdRequestBodyPolicyRuleIds implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyRuleIdRequestBody_policy_rule_ids';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyId  **参数解释：** 策略id，唯一标识一条防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ruleIds  **参数解释：** 规则id数组，包含当前防护策略下的多条规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyId' => 'string',
            'ruleIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyId  **参数解释：** 策略id，唯一标识一条防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ruleIds  **参数解释：** 规则id数组，包含当前防护策略下的多条规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyId' => null,
        'ruleIds' => null
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
    * policyId  **参数解释：** 策略id，唯一标识一条防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ruleIds  **参数解释：** 规则id数组，包含当前防护策略下的多条规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyId' => 'policy_id',
            'ruleIds' => 'rule_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyId  **参数解释：** 策略id，唯一标识一条防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ruleIds  **参数解释：** 规则id数组，包含当前防护策略下的多条规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'policyId' => 'setPolicyId',
            'ruleIds' => 'setRuleIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyId  **参数解释：** 策略id，唯一标识一条防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * ruleIds  **参数解释：** 规则id数组，包含当前防护策略下的多条规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'policyId' => 'getPolicyId',
            'ruleIds' => 'getRuleIds'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['ruleIds'] = isset($data['ruleIds']) ? $data['ruleIds'] : null;
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
    * Gets policyId
    *  **参数解释：** 策略id，唯一标识一条防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $policyId **参数解释：** 策略id，唯一标识一条防护策略 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets ruleIds
    *  **参数解释：** 规则id数组，包含当前防护策略下的多条规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string[]|null
    */
    public function getRuleIds()
    {
        return $this->container['ruleIds'];
    }

    /**
    * Sets ruleIds
    *
    * @param string[]|null $ruleIds **参数解释：** 规则id数组，包含当前防护策略下的多条规则ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRuleIds($ruleIds)
    {
        $this->container['ruleIds'] = $ruleIds;
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

