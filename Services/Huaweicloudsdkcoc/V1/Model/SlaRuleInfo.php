<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlaRuleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlaRuleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * statusType  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_RESOLVED ALARM_TICKET_ALARMING CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    * triggeringRuleEnable  触发规则是否生效
    * preWarningRuleEnable  预警规则是否生效
    * escalateRuleEnable  上升规则是否生效
    * triggeringRule  triggeringRule
    * preWarningRule  preWarningRule
    * escalateRules  通知配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'statusType' => 'string',
            'triggeringRuleEnable' => 'bool',
            'preWarningRuleEnable' => 'bool',
            'escalateRuleEnable' => 'bool',
            'triggeringRule' => '\HuaweiCloud\SDK\Coc\V1\Model\SlaTriggeringRuleInfo',
            'preWarningRule' => '\HuaweiCloud\SDK\Coc\V1\Model\SlaPreWarningRuleInfo',
            'escalateRules' => '\HuaweiCloud\SDK\Coc\V1\Model\SlaEscalationRuleInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * statusType  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_RESOLVED ALARM_TICKET_ALARMING CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    * triggeringRuleEnable  触发规则是否生效
    * preWarningRuleEnable  预警规则是否生效
    * escalateRuleEnable  上升规则是否生效
    * triggeringRule  triggeringRule
    * preWarningRule  preWarningRule
    * escalateRules  通知配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'statusType' => null,
        'triggeringRuleEnable' => null,
        'preWarningRuleEnable' => null,
        'escalateRuleEnable' => null,
        'triggeringRule' => null,
        'preWarningRule' => null,
        'escalateRules' => null
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
    * statusType  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_RESOLVED ALARM_TICKET_ALARMING CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    * triggeringRuleEnable  触发规则是否生效
    * preWarningRuleEnable  预警规则是否生效
    * escalateRuleEnable  上升规则是否生效
    * triggeringRule  triggeringRule
    * preWarningRule  preWarningRule
    * escalateRules  通知配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'statusType' => 'status_type',
            'triggeringRuleEnable' => 'triggering_rule_enable',
            'preWarningRuleEnable' => 'pre_warning_rule_enable',
            'escalateRuleEnable' => 'escalate_rule_enable',
            'triggeringRule' => 'triggering_rule',
            'preWarningRule' => 'pre_warning_rule',
            'escalateRules' => 'escalate_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * statusType  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_RESOLVED ALARM_TICKET_ALARMING CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    * triggeringRuleEnable  触发规则是否生效
    * preWarningRuleEnable  预警规则是否生效
    * escalateRuleEnable  上升规则是否生效
    * triggeringRule  triggeringRule
    * preWarningRule  preWarningRule
    * escalateRules  通知配置
    *
    * @var string[]
    */
    protected static $setters = [
            'statusType' => 'setStatusType',
            'triggeringRuleEnable' => 'setTriggeringRuleEnable',
            'preWarningRuleEnable' => 'setPreWarningRuleEnable',
            'escalateRuleEnable' => 'setEscalateRuleEnable',
            'triggeringRule' => 'setTriggeringRule',
            'preWarningRule' => 'setPreWarningRule',
            'escalateRules' => 'setEscalateRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * statusType  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_RESOLVED ALARM_TICKET_ALARMING CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    * triggeringRuleEnable  触发规则是否生效
    * preWarningRuleEnable  预警规则是否生效
    * escalateRuleEnable  上升规则是否生效
    * triggeringRule  triggeringRule
    * preWarningRule  preWarningRule
    * escalateRules  通知配置
    *
    * @var string[]
    */
    protected static $getters = [
            'statusType' => 'getStatusType',
            'triggeringRuleEnable' => 'getTriggeringRuleEnable',
            'preWarningRuleEnable' => 'getPreWarningRuleEnable',
            'escalateRuleEnable' => 'getEscalateRuleEnable',
            'triggeringRule' => 'getTriggeringRule',
            'preWarningRule' => 'getPreWarningRule',
            'escalateRules' => 'getEscalateRules'
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
    const STATUS_TYPE_EVENT_TICKET_NOT_ACCEPTED = 'EVENT_TICKET_NOT_ACCEPTED';
    const STATUS_TYPE_EVENT_TICKET_PROCESSING = 'EVENT_TICKET_PROCESSING';
    const STATUS_TYPE_EVENT_TICKET_RESOLVED = 'EVENT_TICKET_RESOLVED';
    const STATUS_TYPE_ALARM_TICKET_ALARMING = 'ALARM_TICKET_ALARMING';
    const STATUS_TYPE_CHANGE_REVIEW = 'CHANGE_REVIEW';
    const STATUS_TYPE_CHANGE_IMPLEMENTATION = 'CHANGE_IMPLEMENTATION';
    const STATUS_TYPE_CHANGE_VERIFICATION = 'CHANGE_VERIFICATION';
    const STATUS_TYPE_TO_DO_TASKS_TO_BE_HANDLED = 'TO_DO_TASKS_TO_BE_HANDLED';
    const STATUS_TYPE_TO_DO_TASKS_PROCESSING = 'TO_DO_TASKS_PROCESSING';
    const STATUS_TYPE_ISSUE_TICKET_NOT_ACCEPTED = 'ISSUE_TICKET_NOT_ACCEPTED';
    const STATUS_TYPE_ISSUE_TICKET_POSITIONING = 'ISSUE_TICKET_POSITIONING';
    const STATUS_TYPE_ISSUE_TICKET_WAITING_IMPLEMENT = 'ISSUE_TICKET_WAITING_IMPLEMENT';
    const STATUS_TYPE_ISSUE_TICKET_RESOLVED = 'ISSUE_TICKET_RESOLVED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusTypeAllowableValues()
    {
        return [
            self::STATUS_TYPE_EVENT_TICKET_NOT_ACCEPTED,
            self::STATUS_TYPE_EVENT_TICKET_PROCESSING,
            self::STATUS_TYPE_EVENT_TICKET_RESOLVED,
            self::STATUS_TYPE_ALARM_TICKET_ALARMING,
            self::STATUS_TYPE_CHANGE_REVIEW,
            self::STATUS_TYPE_CHANGE_IMPLEMENTATION,
            self::STATUS_TYPE_CHANGE_VERIFICATION,
            self::STATUS_TYPE_TO_DO_TASKS_TO_BE_HANDLED,
            self::STATUS_TYPE_TO_DO_TASKS_PROCESSING,
            self::STATUS_TYPE_ISSUE_TICKET_NOT_ACCEPTED,
            self::STATUS_TYPE_ISSUE_TICKET_POSITIONING,
            self::STATUS_TYPE_ISSUE_TICKET_WAITING_IMPLEMENT,
            self::STATUS_TYPE_ISSUE_TICKET_RESOLVED,
        ];
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
        $this->container['statusType'] = isset($data['statusType']) ? $data['statusType'] : null;
        $this->container['triggeringRuleEnable'] = isset($data['triggeringRuleEnable']) ? $data['triggeringRuleEnable'] : null;
        $this->container['preWarningRuleEnable'] = isset($data['preWarningRuleEnable']) ? $data['preWarningRuleEnable'] : null;
        $this->container['escalateRuleEnable'] = isset($data['escalateRuleEnable']) ? $data['escalateRuleEnable'] : null;
        $this->container['triggeringRule'] = isset($data['triggeringRule']) ? $data['triggeringRule'] : null;
        $this->container['preWarningRule'] = isset($data['preWarningRule']) ? $data['preWarningRule'] : null;
        $this->container['escalateRules'] = isset($data['escalateRules']) ? $data['escalateRules'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['statusType'] === null) {
            $invalidProperties[] = "'statusType' can't be null";
        }
            $allowedValues = $this->getStatusTypeAllowableValues();
                if (!is_null($this->container['statusType']) && !in_array($this->container['statusType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'statusType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['triggeringRuleEnable'] === null) {
            $invalidProperties[] = "'triggeringRuleEnable' can't be null";
        }
        if ($this->container['preWarningRuleEnable'] === null) {
            $invalidProperties[] = "'preWarningRuleEnable' can't be null";
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
    * Gets statusType
    *  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_RESOLVED ALARM_TICKET_ALARMING CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    *
    * @return string
    */
    public function getStatusType()
    {
        return $this->container['statusType'];
    }

    /**
    * Sets statusType
    *
    * @param string $statusType 状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_RESOLVED ALARM_TICKET_ALARMING CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    *
    * @return $this
    */
    public function setStatusType($statusType)
    {
        $this->container['statusType'] = $statusType;
        return $this;
    }

    /**
    * Gets triggeringRuleEnable
    *  触发规则是否生效
    *
    * @return bool
    */
    public function getTriggeringRuleEnable()
    {
        return $this->container['triggeringRuleEnable'];
    }

    /**
    * Sets triggeringRuleEnable
    *
    * @param bool $triggeringRuleEnable 触发规则是否生效
    *
    * @return $this
    */
    public function setTriggeringRuleEnable($triggeringRuleEnable)
    {
        $this->container['triggeringRuleEnable'] = $triggeringRuleEnable;
        return $this;
    }

    /**
    * Gets preWarningRuleEnable
    *  预警规则是否生效
    *
    * @return bool
    */
    public function getPreWarningRuleEnable()
    {
        return $this->container['preWarningRuleEnable'];
    }

    /**
    * Sets preWarningRuleEnable
    *
    * @param bool $preWarningRuleEnable 预警规则是否生效
    *
    * @return $this
    */
    public function setPreWarningRuleEnable($preWarningRuleEnable)
    {
        $this->container['preWarningRuleEnable'] = $preWarningRuleEnable;
        return $this;
    }

    /**
    * Gets escalateRuleEnable
    *  上升规则是否生效
    *
    * @return bool|null
    */
    public function getEscalateRuleEnable()
    {
        return $this->container['escalateRuleEnable'];
    }

    /**
    * Sets escalateRuleEnable
    *
    * @param bool|null $escalateRuleEnable 上升规则是否生效
    *
    * @return $this
    */
    public function setEscalateRuleEnable($escalateRuleEnable)
    {
        $this->container['escalateRuleEnable'] = $escalateRuleEnable;
        return $this;
    }

    /**
    * Gets triggeringRule
    *  triggeringRule
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\SlaTriggeringRuleInfo|null
    */
    public function getTriggeringRule()
    {
        return $this->container['triggeringRule'];
    }

    /**
    * Sets triggeringRule
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\SlaTriggeringRuleInfo|null $triggeringRule triggeringRule
    *
    * @return $this
    */
    public function setTriggeringRule($triggeringRule)
    {
        $this->container['triggeringRule'] = $triggeringRule;
        return $this;
    }

    /**
    * Gets preWarningRule
    *  preWarningRule
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\SlaPreWarningRuleInfo|null
    */
    public function getPreWarningRule()
    {
        return $this->container['preWarningRule'];
    }

    /**
    * Sets preWarningRule
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\SlaPreWarningRuleInfo|null $preWarningRule preWarningRule
    *
    * @return $this
    */
    public function setPreWarningRule($preWarningRule)
    {
        $this->container['preWarningRule'] = $preWarningRule;
        return $this;
    }

    /**
    * Gets escalateRules
    *  通知配置
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\SlaEscalationRuleInfo[]|null
    */
    public function getEscalateRules()
    {
        return $this->container['escalateRules'];
    }

    /**
    * Sets escalateRules
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\SlaEscalationRuleInfo[]|null $escalateRules 通知配置
    *
    * @return $this
    */
    public function setEscalateRules($escalateRules)
    {
        $this->container['escalateRules'] = $escalateRules;
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

