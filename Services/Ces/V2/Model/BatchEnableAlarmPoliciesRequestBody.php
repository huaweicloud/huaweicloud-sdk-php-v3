<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchEnableAlarmPoliciesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchEnableAlarmPoliciesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alarmPolicyIds  **参数解释** 需要批量启停的告警规则策略的ID列表 **约束限制** 包含的告警规则策略ID个数为1到100
    * enabled  **参数解释** 是否启用告警策略 **约束限制** 不涉及 **取值范围** - true:开启 - false:关闭 **默认取值** true
    * retainWhenAllDisabled  **参数解释** 一键告警中的规则全部被停用时是否保留规则信息 **约束限制** 不涉及 **取值范围** - true:保留规则信息 - false:不保留规则信息 **默认取值** false
    * actionType  **参数解释** 当传此参数时，将会批量停用一键告警规则 **约束限制** 不涉及 **取值范围** - disable: 表示将会批量停用一键告警规则 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alarmPolicyIds' => 'string[]',
            'enabled' => 'bool',
            'retainWhenAllDisabled' => 'bool',
            'actionType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alarmPolicyIds  **参数解释** 需要批量启停的告警规则策略的ID列表 **约束限制** 包含的告警规则策略ID个数为1到100
    * enabled  **参数解释** 是否启用告警策略 **约束限制** 不涉及 **取值范围** - true:开启 - false:关闭 **默认取值** true
    * retainWhenAllDisabled  **参数解释** 一键告警中的规则全部被停用时是否保留规则信息 **约束限制** 不涉及 **取值范围** - true:保留规则信息 - false:不保留规则信息 **默认取值** false
    * actionType  **参数解释** 当传此参数时，将会批量停用一键告警规则 **约束限制** 不涉及 **取值范围** - disable: 表示将会批量停用一键告警规则 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alarmPolicyIds' => null,
        'enabled' => null,
        'retainWhenAllDisabled' => null,
        'actionType' => null
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
    * alarmPolicyIds  **参数解释** 需要批量启停的告警规则策略的ID列表 **约束限制** 包含的告警规则策略ID个数为1到100
    * enabled  **参数解释** 是否启用告警策略 **约束限制** 不涉及 **取值范围** - true:开启 - false:关闭 **默认取值** true
    * retainWhenAllDisabled  **参数解释** 一键告警中的规则全部被停用时是否保留规则信息 **约束限制** 不涉及 **取值范围** - true:保留规则信息 - false:不保留规则信息 **默认取值** false
    * actionType  **参数解释** 当传此参数时，将会批量停用一键告警规则 **约束限制** 不涉及 **取值范围** - disable: 表示将会批量停用一键告警规则 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alarmPolicyIds' => 'alarm_policy_ids',
            'enabled' => 'enabled',
            'retainWhenAllDisabled' => 'retain_when_all_disabled',
            'actionType' => 'action_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alarmPolicyIds  **参数解释** 需要批量启停的告警规则策略的ID列表 **约束限制** 包含的告警规则策略ID个数为1到100
    * enabled  **参数解释** 是否启用告警策略 **约束限制** 不涉及 **取值范围** - true:开启 - false:关闭 **默认取值** true
    * retainWhenAllDisabled  **参数解释** 一键告警中的规则全部被停用时是否保留规则信息 **约束限制** 不涉及 **取值范围** - true:保留规则信息 - false:不保留规则信息 **默认取值** false
    * actionType  **参数解释** 当传此参数时，将会批量停用一键告警规则 **约束限制** 不涉及 **取值范围** - disable: 表示将会批量停用一键告警规则 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'alarmPolicyIds' => 'setAlarmPolicyIds',
            'enabled' => 'setEnabled',
            'retainWhenAllDisabled' => 'setRetainWhenAllDisabled',
            'actionType' => 'setActionType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alarmPolicyIds  **参数解释** 需要批量启停的告警规则策略的ID列表 **约束限制** 包含的告警规则策略ID个数为1到100
    * enabled  **参数解释** 是否启用告警策略 **约束限制** 不涉及 **取值范围** - true:开启 - false:关闭 **默认取值** true
    * retainWhenAllDisabled  **参数解释** 一键告警中的规则全部被停用时是否保留规则信息 **约束限制** 不涉及 **取值范围** - true:保留规则信息 - false:不保留规则信息 **默认取值** false
    * actionType  **参数解释** 当传此参数时，将会批量停用一键告警规则 **约束限制** 不涉及 **取值范围** - disable: 表示将会批量停用一键告警规则 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'alarmPolicyIds' => 'getAlarmPolicyIds',
            'enabled' => 'getEnabled',
            'retainWhenAllDisabled' => 'getRetainWhenAllDisabled',
            'actionType' => 'getActionType'
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
        $this->container['alarmPolicyIds'] = isset($data['alarmPolicyIds']) ? $data['alarmPolicyIds'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['retainWhenAllDisabled'] = isset($data['retainWhenAllDisabled']) ? $data['retainWhenAllDisabled'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alarmPolicyIds'] === null) {
            $invalidProperties[] = "'alarmPolicyIds' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
            if (!is_null($this->container['actionType']) && (mb_strlen($this->container['actionType']) > 10)) {
                $invalidProperties[] = "invalid value for 'actionType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['actionType']) && !preg_match("/^(disable)$/", $this->container['actionType'])) {
                $invalidProperties[] = "invalid value for 'actionType', must be conform to the pattern /^(disable)$/.";
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
    * Gets alarmPolicyIds
    *  **参数解释** 需要批量启停的告警规则策略的ID列表 **约束限制** 包含的告警规则策略ID个数为1到100
    *
    * @return string[]
    */
    public function getAlarmPolicyIds()
    {
        return $this->container['alarmPolicyIds'];
    }

    /**
    * Sets alarmPolicyIds
    *
    * @param string[] $alarmPolicyIds **参数解释** 需要批量启停的告警规则策略的ID列表 **约束限制** 包含的告警规则策略ID个数为1到100
    *
    * @return $this
    */
    public function setAlarmPolicyIds($alarmPolicyIds)
    {
        $this->container['alarmPolicyIds'] = $alarmPolicyIds;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释** 是否启用告警策略 **约束限制** 不涉及 **取值范围** - true:开启 - false:关闭 **默认取值** true
    *
    * @return bool
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool $enabled **参数解释** 是否启用告警策略 **约束限制** 不涉及 **取值范围** - true:开启 - false:关闭 **默认取值** true
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets retainWhenAllDisabled
    *  **参数解释** 一键告警中的规则全部被停用时是否保留规则信息 **约束限制** 不涉及 **取值范围** - true:保留规则信息 - false:不保留规则信息 **默认取值** false
    *
    * @return bool|null
    */
    public function getRetainWhenAllDisabled()
    {
        return $this->container['retainWhenAllDisabled'];
    }

    /**
    * Sets retainWhenAllDisabled
    *
    * @param bool|null $retainWhenAllDisabled **参数解释** 一键告警中的规则全部被停用时是否保留规则信息 **约束限制** 不涉及 **取值范围** - true:保留规则信息 - false:不保留规则信息 **默认取值** false
    *
    * @return $this
    */
    public function setRetainWhenAllDisabled($retainWhenAllDisabled)
    {
        $this->container['retainWhenAllDisabled'] = $retainWhenAllDisabled;
        return $this;
    }

    /**
    * Gets actionType
    *  **参数解释** 当传此参数时，将会批量停用一键告警规则 **约束限制** 不涉及 **取值范围** - disable: 表示将会批量停用一键告警规则 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param string|null $actionType **参数解释** 当传此参数时，将会批量停用一键告警规则 **约束限制** 不涉及 **取值范围** - disable: 表示将会批量停用一键告警规则 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
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

