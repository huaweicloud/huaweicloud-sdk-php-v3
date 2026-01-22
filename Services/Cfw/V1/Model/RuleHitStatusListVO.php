<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleHitStatusListVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleHitStatusListVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  **参数解释**： 规则ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ruleHitCount  **参数解释**： 规则命中次数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ruleLastHitTime  **参数解释**： 命中时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'ruleHitCount' => 'int',
            'ruleLastHitTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  **参数解释**： 规则ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ruleHitCount  **参数解释**： 规则命中次数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ruleLastHitTime  **参数解释**： 命中时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'ruleHitCount' => 'int64',
        'ruleLastHitTime' => 'int64'
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
    * ruleId  **参数解释**： 规则ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ruleHitCount  **参数解释**： 规则命中次数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ruleLastHitTime  **参数解释**： 命中时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'ruleHitCount' => 'rule_hit_count',
            'ruleLastHitTime' => 'rule_last_hit_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  **参数解释**： 规则ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ruleHitCount  **参数解释**： 规则命中次数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ruleLastHitTime  **参数解释**： 命中时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'ruleHitCount' => 'setRuleHitCount',
            'ruleLastHitTime' => 'setRuleLastHitTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  **参数解释**： 规则ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ruleHitCount  **参数解释**： 规则命中次数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * ruleLastHitTime  **参数解释**： 命中时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'ruleHitCount' => 'getRuleHitCount',
            'ruleLastHitTime' => 'getRuleLastHitTime'
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
        $this->container['ruleHitCount'] = isset($data['ruleHitCount']) ? $data['ruleHitCount'] : null;
        $this->container['ruleLastHitTime'] = isset($data['ruleLastHitTime']) ? $data['ruleLastHitTime'] : null;
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
    *  **参数解释**： 规则ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
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
    * @param string|null $ruleId **参数解释**： 规则ID **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets ruleHitCount
    *  **参数解释**： 规则命中次数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getRuleHitCount()
    {
        return $this->container['ruleHitCount'];
    }

    /**
    * Sets ruleHitCount
    *
    * @param int|null $ruleHitCount **参数解释**： 规则命中次数 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRuleHitCount($ruleHitCount)
    {
        $this->container['ruleHitCount'] = $ruleHitCount;
        return $this;
    }

    /**
    * Gets ruleLastHitTime
    *  **参数解释**： 命中时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getRuleLastHitTime()
    {
        return $this->container['ruleLastHitTime'];
    }

    /**
    * Sets ruleLastHitTime
    *
    * @param int|null $ruleLastHitTime **参数解释**： 命中时间 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRuleLastHitTime($ruleLastHitTime)
    {
        $this->container['ruleLastHitTime'] = $ruleLastHitTime;
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

