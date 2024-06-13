<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveRoomInteractionRuleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveRoomInteractionRuleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleIndex  规则索引
    * ruleName  规则名称
    * enabled  是否启用
    * eventType  事件类型。 * 1：弹幕事件 * 2：用户入场事件 * 3：用户点赞事件 * 4：用户送礼事件 * 10: 预置话术事件
    * hitCondition  hitCondition
    * trigger  trigger
    * reviewConfig  reviewConfig
    * groupId  互动规则库ID。从互动库导入时携带互动库ID。
    * groupName  互动规则库名称。从互动库导入时携带互动库名称。
    * enabledScenes  规则启用场景。部分场景启用时填写。不填写为全部。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleIndex' => 'string',
            'ruleName' => 'string',
            'enabled' => 'bool',
            'eventType' => 'int',
            'hitCondition' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\HitCondition',
            'trigger' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TriggerProcess',
            'reviewConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig',
            'groupId' => 'string',
            'groupName' => 'string',
            'enabledScenes' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleIndex  规则索引
    * ruleName  规则名称
    * enabled  是否启用
    * eventType  事件类型。 * 1：弹幕事件 * 2：用户入场事件 * 3：用户点赞事件 * 4：用户送礼事件 * 10: 预置话术事件
    * hitCondition  hitCondition
    * trigger  trigger
    * reviewConfig  reviewConfig
    * groupId  互动规则库ID。从互动库导入时携带互动库ID。
    * groupName  互动规则库名称。从互动库导入时携带互动库名称。
    * enabledScenes  规则启用场景。部分场景启用时填写。不填写为全部。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleIndex' => null,
        'ruleName' => null,
        'enabled' => null,
        'eventType' => null,
        'hitCondition' => null,
        'trigger' => null,
        'reviewConfig' => null,
        'groupId' => null,
        'groupName' => null,
        'enabledScenes' => null
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
    * ruleIndex  规则索引
    * ruleName  规则名称
    * enabled  是否启用
    * eventType  事件类型。 * 1：弹幕事件 * 2：用户入场事件 * 3：用户点赞事件 * 4：用户送礼事件 * 10: 预置话术事件
    * hitCondition  hitCondition
    * trigger  trigger
    * reviewConfig  reviewConfig
    * groupId  互动规则库ID。从互动库导入时携带互动库ID。
    * groupName  互动规则库名称。从互动库导入时携带互动库名称。
    * enabledScenes  规则启用场景。部分场景启用时填写。不填写为全部。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleIndex' => 'rule_index',
            'ruleName' => 'rule_name',
            'enabled' => 'enabled',
            'eventType' => 'event_type',
            'hitCondition' => 'hit_condition',
            'trigger' => 'trigger',
            'reviewConfig' => 'review_config',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'enabledScenes' => 'enabled_scenes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleIndex  规则索引
    * ruleName  规则名称
    * enabled  是否启用
    * eventType  事件类型。 * 1：弹幕事件 * 2：用户入场事件 * 3：用户点赞事件 * 4：用户送礼事件 * 10: 预置话术事件
    * hitCondition  hitCondition
    * trigger  trigger
    * reviewConfig  reviewConfig
    * groupId  互动规则库ID。从互动库导入时携带互动库ID。
    * groupName  互动规则库名称。从互动库导入时携带互动库名称。
    * enabledScenes  规则启用场景。部分场景启用时填写。不填写为全部。
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleIndex' => 'setRuleIndex',
            'ruleName' => 'setRuleName',
            'enabled' => 'setEnabled',
            'eventType' => 'setEventType',
            'hitCondition' => 'setHitCondition',
            'trigger' => 'setTrigger',
            'reviewConfig' => 'setReviewConfig',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'enabledScenes' => 'setEnabledScenes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleIndex  规则索引
    * ruleName  规则名称
    * enabled  是否启用
    * eventType  事件类型。 * 1：弹幕事件 * 2：用户入场事件 * 3：用户点赞事件 * 4：用户送礼事件 * 10: 预置话术事件
    * hitCondition  hitCondition
    * trigger  trigger
    * reviewConfig  reviewConfig
    * groupId  互动规则库ID。从互动库导入时携带互动库ID。
    * groupName  互动规则库名称。从互动库导入时携带互动库名称。
    * enabledScenes  规则启用场景。部分场景启用时填写。不填写为全部。
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleIndex' => 'getRuleIndex',
            'ruleName' => 'getRuleName',
            'enabled' => 'getEnabled',
            'eventType' => 'getEventType',
            'hitCondition' => 'getHitCondition',
            'trigger' => 'getTrigger',
            'reviewConfig' => 'getReviewConfig',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'enabledScenes' => 'getEnabledScenes'
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
        $this->container['ruleIndex'] = isset($data['ruleIndex']) ? $data['ruleIndex'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['hitCondition'] = isset($data['hitCondition']) ? $data['hitCondition'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['reviewConfig'] = isset($data['reviewConfig']) ? $data['reviewConfig'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['enabledScenes'] = isset($data['enabledScenes']) ? $data['enabledScenes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ruleIndex']) && (mb_strlen($this->container['ruleIndex']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleIndex', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ruleIndex']) && (mb_strlen($this->container['ruleIndex']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleIndex', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) > 256)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ruleName']) && (mb_strlen($this->container['ruleName']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] > 100)) {
                $invalidProperties[] = "invalid value for 'eventType', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['eventType']) && ($this->container['eventType'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventType', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
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
    * Gets ruleIndex
    *  规则索引
    *
    * @return string|null
    */
    public function getRuleIndex()
    {
        return $this->container['ruleIndex'];
    }

    /**
    * Sets ruleIndex
    *
    * @param string|null $ruleIndex 规则索引
    *
    * @return $this
    */
    public function setRuleIndex($ruleIndex)
    {
        $this->container['ruleIndex'] = $ruleIndex;
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
    * Gets enabled
    *  是否启用
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled 是否启用
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets eventType
    *  事件类型。 * 1：弹幕事件 * 2：用户入场事件 * 3：用户点赞事件 * 4：用户送礼事件 * 10: 预置话术事件
    *
    * @return int|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param int|null $eventType 事件类型。 * 1：弹幕事件 * 2：用户入场事件 * 3：用户点赞事件 * 4：用户送礼事件 * 10: 预置话术事件
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets hitCondition
    *  hitCondition
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\HitCondition|null
    */
    public function getHitCondition()
    {
        return $this->container['hitCondition'];
    }

    /**
    * Sets hitCondition
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\HitCondition|null $hitCondition hitCondition
    *
    * @return $this
    */
    public function setHitCondition($hitCondition)
    {
        $this->container['hitCondition'] = $hitCondition;
        return $this;
    }

    /**
    * Gets trigger
    *  trigger
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TriggerProcess|null
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TriggerProcess|null $trigger trigger
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
        return $this;
    }

    /**
    * Gets reviewConfig
    *  reviewConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig|null
    */
    public function getReviewConfig()
    {
        return $this->container['reviewConfig'];
    }

    /**
    * Sets reviewConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ReviewConfig|null $reviewConfig reviewConfig
    *
    * @return $this
    */
    public function setReviewConfig($reviewConfig)
    {
        $this->container['reviewConfig'] = $reviewConfig;
        return $this;
    }

    /**
    * Gets groupId
    *  互动规则库ID。从互动库导入时携带互动库ID。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 互动规则库ID。从互动库导入时携带互动库ID。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  互动规则库名称。从互动库导入时携带互动库名称。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 互动规则库名称。从互动库导入时携带互动库名称。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets enabledScenes
    *  规则启用场景。部分场景启用时填写。不填写为全部。
    *
    * @return string[]|null
    */
    public function getEnabledScenes()
    {
        return $this->container['enabledScenes'];
    }

    /**
    * Sets enabledScenes
    *
    * @param string[]|null $enabledScenes 规则启用场景。部分场景启用时填写。不填写为全部。
    *
    * @return $this
    */
    public function setEnabledScenes($enabledScenes)
    {
        $this->container['enabledScenes'] = $enabledScenes;
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

