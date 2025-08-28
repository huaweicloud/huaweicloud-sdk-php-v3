<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEventAttackTagResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEventAttackTagResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attackSuccessNum  **参数解释**: 攻击成功阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * attackAttemptNum  **参数解释**: 攻击尝试阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * attackBlockedNum  **参数解释**: 攻击被阻断阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * abnormalBehaviorNum  **参数解释**: 异常行为阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * collapsibleHostNum  **参数解释**: 主机失陷阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * systemVulnerabilityNum  **参数解释**: 系统脆弱性阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attackSuccessNum' => 'int',
            'attackAttemptNum' => 'int',
            'attackBlockedNum' => 'int',
            'abnormalBehaviorNum' => 'int',
            'collapsibleHostNum' => 'int',
            'systemVulnerabilityNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attackSuccessNum  **参数解释**: 攻击成功阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * attackAttemptNum  **参数解释**: 攻击尝试阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * attackBlockedNum  **参数解释**: 攻击被阻断阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * abnormalBehaviorNum  **参数解释**: 异常行为阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * collapsibleHostNum  **参数解释**: 主机失陷阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * systemVulnerabilityNum  **参数解释**: 系统脆弱性阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attackSuccessNum' => 'int32',
        'attackAttemptNum' => 'int32',
        'attackBlockedNum' => 'int32',
        'abnormalBehaviorNum' => 'int32',
        'collapsibleHostNum' => 'int32',
        'systemVulnerabilityNum' => 'int32'
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
    * attackSuccessNum  **参数解释**: 攻击成功阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * attackAttemptNum  **参数解释**: 攻击尝试阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * attackBlockedNum  **参数解释**: 攻击被阻断阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * abnormalBehaviorNum  **参数解释**: 异常行为阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * collapsibleHostNum  **参数解释**: 主机失陷阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * systemVulnerabilityNum  **参数解释**: 系统脆弱性阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attackSuccessNum' => 'attack_success_num',
            'attackAttemptNum' => 'attack_attempt_num',
            'attackBlockedNum' => 'attack_blocked_num',
            'abnormalBehaviorNum' => 'abnormal_behavior_num',
            'collapsibleHostNum' => 'collapsible_host_num',
            'systemVulnerabilityNum' => 'system_vulnerability_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attackSuccessNum  **参数解释**: 攻击成功阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * attackAttemptNum  **参数解释**: 攻击尝试阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * attackBlockedNum  **参数解释**: 攻击被阻断阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * abnormalBehaviorNum  **参数解释**: 异常行为阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * collapsibleHostNum  **参数解释**: 主机失陷阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * systemVulnerabilityNum  **参数解释**: 系统脆弱性阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'attackSuccessNum' => 'setAttackSuccessNum',
            'attackAttemptNum' => 'setAttackAttemptNum',
            'attackBlockedNum' => 'setAttackBlockedNum',
            'abnormalBehaviorNum' => 'setAbnormalBehaviorNum',
            'collapsibleHostNum' => 'setCollapsibleHostNum',
            'systemVulnerabilityNum' => 'setSystemVulnerabilityNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attackSuccessNum  **参数解释**: 攻击成功阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * attackAttemptNum  **参数解释**: 攻击尝试阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * attackBlockedNum  **参数解释**: 攻击被阻断阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * abnormalBehaviorNum  **参数解释**: 异常行为阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * collapsibleHostNum  **参数解释**: 主机失陷阶段的数量 **取值范围**: 最小值0，最大值2147483647
    * systemVulnerabilityNum  **参数解释**: 系统脆弱性阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'attackSuccessNum' => 'getAttackSuccessNum',
            'attackAttemptNum' => 'getAttackAttemptNum',
            'attackBlockedNum' => 'getAttackBlockedNum',
            'abnormalBehaviorNum' => 'getAbnormalBehaviorNum',
            'collapsibleHostNum' => 'getCollapsibleHostNum',
            'systemVulnerabilityNum' => 'getSystemVulnerabilityNum'
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
        $this->container['attackSuccessNum'] = isset($data['attackSuccessNum']) ? $data['attackSuccessNum'] : null;
        $this->container['attackAttemptNum'] = isset($data['attackAttemptNum']) ? $data['attackAttemptNum'] : null;
        $this->container['attackBlockedNum'] = isset($data['attackBlockedNum']) ? $data['attackBlockedNum'] : null;
        $this->container['abnormalBehaviorNum'] = isset($data['abnormalBehaviorNum']) ? $data['abnormalBehaviorNum'] : null;
        $this->container['collapsibleHostNum'] = isset($data['collapsibleHostNum']) ? $data['collapsibleHostNum'] : null;
        $this->container['systemVulnerabilityNum'] = isset($data['systemVulnerabilityNum']) ? $data['systemVulnerabilityNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['attackSuccessNum']) && ($this->container['attackSuccessNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'attackSuccessNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['attackSuccessNum']) && ($this->container['attackSuccessNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'attackSuccessNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackAttemptNum']) && ($this->container['attackAttemptNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'attackAttemptNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['attackAttemptNum']) && ($this->container['attackAttemptNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'attackAttemptNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackBlockedNum']) && ($this->container['attackBlockedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'attackBlockedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['attackBlockedNum']) && ($this->container['attackBlockedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'attackBlockedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['abnormalBehaviorNum']) && ($this->container['abnormalBehaviorNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'abnormalBehaviorNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['abnormalBehaviorNum']) && ($this->container['abnormalBehaviorNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'abnormalBehaviorNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['collapsibleHostNum']) && ($this->container['collapsibleHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'collapsibleHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['collapsibleHostNum']) && ($this->container['collapsibleHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'collapsibleHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['systemVulnerabilityNum']) && ($this->container['systemVulnerabilityNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'systemVulnerabilityNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['systemVulnerabilityNum']) && ($this->container['systemVulnerabilityNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'systemVulnerabilityNum', must be bigger than or equal to 0.";
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
    * Gets attackSuccessNum
    *  **参数解释**: 攻击成功阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAttackSuccessNum()
    {
        return $this->container['attackSuccessNum'];
    }

    /**
    * Sets attackSuccessNum
    *
    * @param int|null $attackSuccessNum **参数解释**: 攻击成功阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAttackSuccessNum($attackSuccessNum)
    {
        $this->container['attackSuccessNum'] = $attackSuccessNum;
        return $this;
    }

    /**
    * Gets attackAttemptNum
    *  **参数解释**: 攻击尝试阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAttackAttemptNum()
    {
        return $this->container['attackAttemptNum'];
    }

    /**
    * Sets attackAttemptNum
    *
    * @param int|null $attackAttemptNum **参数解释**: 攻击尝试阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAttackAttemptNum($attackAttemptNum)
    {
        $this->container['attackAttemptNum'] = $attackAttemptNum;
        return $this;
    }

    /**
    * Gets attackBlockedNum
    *  **参数解释**: 攻击被阻断阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAttackBlockedNum()
    {
        return $this->container['attackBlockedNum'];
    }

    /**
    * Sets attackBlockedNum
    *
    * @param int|null $attackBlockedNum **参数解释**: 攻击被阻断阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAttackBlockedNum($attackBlockedNum)
    {
        $this->container['attackBlockedNum'] = $attackBlockedNum;
        return $this;
    }

    /**
    * Gets abnormalBehaviorNum
    *  **参数解释**: 异常行为阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getAbnormalBehaviorNum()
    {
        return $this->container['abnormalBehaviorNum'];
    }

    /**
    * Sets abnormalBehaviorNum
    *
    * @param int|null $abnormalBehaviorNum **参数解释**: 异常行为阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setAbnormalBehaviorNum($abnormalBehaviorNum)
    {
        $this->container['abnormalBehaviorNum'] = $abnormalBehaviorNum;
        return $this;
    }

    /**
    * Gets collapsibleHostNum
    *  **参数解释**: 主机失陷阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getCollapsibleHostNum()
    {
        return $this->container['collapsibleHostNum'];
    }

    /**
    * Sets collapsibleHostNum
    *
    * @param int|null $collapsibleHostNum **参数解释**: 主机失陷阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCollapsibleHostNum($collapsibleHostNum)
    {
        $this->container['collapsibleHostNum'] = $collapsibleHostNum;
        return $this;
    }

    /**
    * Gets systemVulnerabilityNum
    *  **参数解释**: 系统脆弱性阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getSystemVulnerabilityNum()
    {
        return $this->container['systemVulnerabilityNum'];
    }

    /**
    * Sets systemVulnerabilityNum
    *
    * @param int|null $systemVulnerabilityNum **参数解释**: 系统脆弱性阶段的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setSystemVulnerabilityNum($systemVulnerabilityNum)
    {
        $this->container['systemVulnerabilityNum'] = $systemVulnerabilityNum;
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

