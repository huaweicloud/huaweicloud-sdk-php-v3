<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SlaRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SlaRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * statusType  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_NOT_IN_TIME EVENT_TICKET_RESOLVED ALARM_TICKET_RESOLVED ALARM_TICKET_ALARMING ALARM_TICKET_NOT_IN_TIME CHANGE_NOT_IN_TIME CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_NOT_IN_TIME TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING TO_DO_TASKS_COMPLETED ISSUE_TICKET_NOT_IN_TIME ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    * subTriggerNode  子状态(NORMAL,FORWARDING,RESUBMIT)
    * slaStatus  Sla状态  false 未打破
    * slaOrderId  工单ID
    * duration  持续时间
    * triggeringRuleEnable  SLA 触发规则是否开启
    * triggeringRule  triggeringRule
    * breakTime  打破时间
    * ownerId  对象ID
    * ownerName  对象人名
    * noticeTime  通知时间
    * statusStartTime  状态开始时间
    * preWarningRuleEnable  SLA 预警通知是否开启
    * preWarningRule  preWarningRule
    * escalateRuleEnable  SLA 上升通知是否开启
    * escalateRules  SLA 上升通知配置
    * currentNode  SLA是否在当前状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'statusType' => 'string',
            'subTriggerNode' => 'string',
            'slaStatus' => 'bool',
            'slaOrderId' => 'string',
            'duration' => 'int',
            'triggeringRuleEnable' => 'bool',
            'triggeringRule' => '\HuaweiCloud\SDK\Coc\V1\Model\SlaTriggeringRuleInfo',
            'breakTime' => 'string',
            'ownerId' => 'string',
            'ownerName' => 'string',
            'noticeTime' => 'string',
            'statusStartTime' => 'string',
            'preWarningRuleEnable' => 'bool',
            'preWarningRule' => '\HuaweiCloud\SDK\Coc\V1\Model\SlaPreWarningRuleInfo',
            'escalateRuleEnable' => 'bool',
            'escalateRules' => '\HuaweiCloud\SDK\Coc\V1\Model\SlaEscalationRuleInfo[]',
            'currentNode' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * statusType  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_NOT_IN_TIME EVENT_TICKET_RESOLVED ALARM_TICKET_RESOLVED ALARM_TICKET_ALARMING ALARM_TICKET_NOT_IN_TIME CHANGE_NOT_IN_TIME CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_NOT_IN_TIME TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING TO_DO_TASKS_COMPLETED ISSUE_TICKET_NOT_IN_TIME ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    * subTriggerNode  子状态(NORMAL,FORWARDING,RESUBMIT)
    * slaStatus  Sla状态  false 未打破
    * slaOrderId  工单ID
    * duration  持续时间
    * triggeringRuleEnable  SLA 触发规则是否开启
    * triggeringRule  triggeringRule
    * breakTime  打破时间
    * ownerId  对象ID
    * ownerName  对象人名
    * noticeTime  通知时间
    * statusStartTime  状态开始时间
    * preWarningRuleEnable  SLA 预警通知是否开启
    * preWarningRule  preWarningRule
    * escalateRuleEnable  SLA 上升通知是否开启
    * escalateRules  SLA 上升通知配置
    * currentNode  SLA是否在当前状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'statusType' => null,
        'subTriggerNode' => null,
        'slaStatus' => null,
        'slaOrderId' => null,
        'duration' => 'int64',
        'triggeringRuleEnable' => null,
        'triggeringRule' => null,
        'breakTime' => null,
        'ownerId' => null,
        'ownerName' => null,
        'noticeTime' => null,
        'statusStartTime' => null,
        'preWarningRuleEnable' => null,
        'preWarningRule' => null,
        'escalateRuleEnable' => null,
        'escalateRules' => null,
        'currentNode' => null
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
    * statusType  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_NOT_IN_TIME EVENT_TICKET_RESOLVED ALARM_TICKET_RESOLVED ALARM_TICKET_ALARMING ALARM_TICKET_NOT_IN_TIME CHANGE_NOT_IN_TIME CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_NOT_IN_TIME TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING TO_DO_TASKS_COMPLETED ISSUE_TICKET_NOT_IN_TIME ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    * subTriggerNode  子状态(NORMAL,FORWARDING,RESUBMIT)
    * slaStatus  Sla状态  false 未打破
    * slaOrderId  工单ID
    * duration  持续时间
    * triggeringRuleEnable  SLA 触发规则是否开启
    * triggeringRule  triggeringRule
    * breakTime  打破时间
    * ownerId  对象ID
    * ownerName  对象人名
    * noticeTime  通知时间
    * statusStartTime  状态开始时间
    * preWarningRuleEnable  SLA 预警通知是否开启
    * preWarningRule  preWarningRule
    * escalateRuleEnable  SLA 上升通知是否开启
    * escalateRules  SLA 上升通知配置
    * currentNode  SLA是否在当前状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'statusType' => 'status_type',
            'subTriggerNode' => 'sub_trigger_node',
            'slaStatus' => 'sla_status',
            'slaOrderId' => 'sla_order_id',
            'duration' => 'duration',
            'triggeringRuleEnable' => 'triggering_rule_enable',
            'triggeringRule' => 'triggering_rule',
            'breakTime' => 'break_time',
            'ownerId' => 'owner_id',
            'ownerName' => 'owner_name',
            'noticeTime' => 'notice_time',
            'statusStartTime' => 'status_start_time',
            'preWarningRuleEnable' => 'pre_warning_rule_enable',
            'preWarningRule' => 'pre_warning_rule',
            'escalateRuleEnable' => 'escalate_rule_enable',
            'escalateRules' => 'escalate_rules',
            'currentNode' => 'current_node'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * statusType  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_NOT_IN_TIME EVENT_TICKET_RESOLVED ALARM_TICKET_RESOLVED ALARM_TICKET_ALARMING ALARM_TICKET_NOT_IN_TIME CHANGE_NOT_IN_TIME CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_NOT_IN_TIME TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING TO_DO_TASKS_COMPLETED ISSUE_TICKET_NOT_IN_TIME ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    * subTriggerNode  子状态(NORMAL,FORWARDING,RESUBMIT)
    * slaStatus  Sla状态  false 未打破
    * slaOrderId  工单ID
    * duration  持续时间
    * triggeringRuleEnable  SLA 触发规则是否开启
    * triggeringRule  triggeringRule
    * breakTime  打破时间
    * ownerId  对象ID
    * ownerName  对象人名
    * noticeTime  通知时间
    * statusStartTime  状态开始时间
    * preWarningRuleEnable  SLA 预警通知是否开启
    * preWarningRule  preWarningRule
    * escalateRuleEnable  SLA 上升通知是否开启
    * escalateRules  SLA 上升通知配置
    * currentNode  SLA是否在当前状态
    *
    * @var string[]
    */
    protected static $setters = [
            'statusType' => 'setStatusType',
            'subTriggerNode' => 'setSubTriggerNode',
            'slaStatus' => 'setSlaStatus',
            'slaOrderId' => 'setSlaOrderId',
            'duration' => 'setDuration',
            'triggeringRuleEnable' => 'setTriggeringRuleEnable',
            'triggeringRule' => 'setTriggeringRule',
            'breakTime' => 'setBreakTime',
            'ownerId' => 'setOwnerId',
            'ownerName' => 'setOwnerName',
            'noticeTime' => 'setNoticeTime',
            'statusStartTime' => 'setStatusStartTime',
            'preWarningRuleEnable' => 'setPreWarningRuleEnable',
            'preWarningRule' => 'setPreWarningRule',
            'escalateRuleEnable' => 'setEscalateRuleEnable',
            'escalateRules' => 'setEscalateRules',
            'currentNode' => 'setCurrentNode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * statusType  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_NOT_IN_TIME EVENT_TICKET_RESOLVED ALARM_TICKET_RESOLVED ALARM_TICKET_ALARMING ALARM_TICKET_NOT_IN_TIME CHANGE_NOT_IN_TIME CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_NOT_IN_TIME TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING TO_DO_TASKS_COMPLETED ISSUE_TICKET_NOT_IN_TIME ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    * subTriggerNode  子状态(NORMAL,FORWARDING,RESUBMIT)
    * slaStatus  Sla状态  false 未打破
    * slaOrderId  工单ID
    * duration  持续时间
    * triggeringRuleEnable  SLA 触发规则是否开启
    * triggeringRule  triggeringRule
    * breakTime  打破时间
    * ownerId  对象ID
    * ownerName  对象人名
    * noticeTime  通知时间
    * statusStartTime  状态开始时间
    * preWarningRuleEnable  SLA 预警通知是否开启
    * preWarningRule  preWarningRule
    * escalateRuleEnable  SLA 上升通知是否开启
    * escalateRules  SLA 上升通知配置
    * currentNode  SLA是否在当前状态
    *
    * @var string[]
    */
    protected static $getters = [
            'statusType' => 'getStatusType',
            'subTriggerNode' => 'getSubTriggerNode',
            'slaStatus' => 'getSlaStatus',
            'slaOrderId' => 'getSlaOrderId',
            'duration' => 'getDuration',
            'triggeringRuleEnable' => 'getTriggeringRuleEnable',
            'triggeringRule' => 'getTriggeringRule',
            'breakTime' => 'getBreakTime',
            'ownerId' => 'getOwnerId',
            'ownerName' => 'getOwnerName',
            'noticeTime' => 'getNoticeTime',
            'statusStartTime' => 'getStatusStartTime',
            'preWarningRuleEnable' => 'getPreWarningRuleEnable',
            'preWarningRule' => 'getPreWarningRule',
            'escalateRuleEnable' => 'getEscalateRuleEnable',
            'escalateRules' => 'getEscalateRules',
            'currentNode' => 'getCurrentNode'
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
    const STATUS_TYPE_EVENT_TICKET_NOT_IN_TIME = 'EVENT_TICKET_NOT_IN_TIME';
    const STATUS_TYPE_EVENT_TICKET_RESOLVED = 'EVENT_TICKET_RESOLVED';
    const STATUS_TYPE_ALARM_TICKET_RESOLVED = 'ALARM_TICKET_RESOLVED';
    const STATUS_TYPE_ALARM_TICKET_ALARMING = 'ALARM_TICKET_ALARMING';
    const STATUS_TYPE_ALARM_TICKET_NOT_IN_TIME = 'ALARM_TICKET_NOT_IN_TIME';
    const STATUS_TYPE_CHANGE_NOT_IN_TIME = 'CHANGE_NOT_IN_TIME';
    const STATUS_TYPE_CHANGE_REVIEW = 'CHANGE_REVIEW';
    const STATUS_TYPE_CHANGE_IMPLEMENTATION = 'CHANGE_IMPLEMENTATION';
    const STATUS_TYPE_CHANGE_VERIFICATION = 'CHANGE_VERIFICATION';
    const STATUS_TYPE_TO_DO_TASKS_NOT_IN_TIME = 'TO_DO_TASKS_NOT_IN_TIME';
    const STATUS_TYPE_TO_DO_TASKS_TO_BE_HANDLED = 'TO_DO_TASKS_TO_BE_HANDLED';
    const STATUS_TYPE_TO_DO_TASKS_PROCESSING = 'TO_DO_TASKS_PROCESSING';
    const STATUS_TYPE_TO_DO_TASKS_COMPLETED = 'TO_DO_TASKS_COMPLETED';
    const STATUS_TYPE_ISSUE_TICKET_NOT_IN_TIME = 'ISSUE_TICKET_NOT_IN_TIME';
    const STATUS_TYPE_ISSUE_TICKET_NOT_ACCEPTED = 'ISSUE_TICKET_NOT_ACCEPTED';
    const STATUS_TYPE_ISSUE_TICKET_POSITIONING = 'ISSUE_TICKET_POSITIONING';
    const STATUS_TYPE_ISSUE_TICKET_WAITING_IMPLEMENT = 'ISSUE_TICKET_WAITING_IMPLEMENT';
    const STATUS_TYPE_ISSUE_TICKET_RESOLVED = 'ISSUE_TICKET_RESOLVED';
    const SUB_TRIGGER_NODE_NORMAL = 'NORMAL';
    const SUB_TRIGGER_NODE_FORWARDING = 'FORWARDING';
    const SUB_TRIGGER_NODE_RESUBMIT = 'RESUBMIT';
    

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
            self::STATUS_TYPE_EVENT_TICKET_NOT_IN_TIME,
            self::STATUS_TYPE_EVENT_TICKET_RESOLVED,
            self::STATUS_TYPE_ALARM_TICKET_RESOLVED,
            self::STATUS_TYPE_ALARM_TICKET_ALARMING,
            self::STATUS_TYPE_ALARM_TICKET_NOT_IN_TIME,
            self::STATUS_TYPE_CHANGE_NOT_IN_TIME,
            self::STATUS_TYPE_CHANGE_REVIEW,
            self::STATUS_TYPE_CHANGE_IMPLEMENTATION,
            self::STATUS_TYPE_CHANGE_VERIFICATION,
            self::STATUS_TYPE_TO_DO_TASKS_NOT_IN_TIME,
            self::STATUS_TYPE_TO_DO_TASKS_TO_BE_HANDLED,
            self::STATUS_TYPE_TO_DO_TASKS_PROCESSING,
            self::STATUS_TYPE_TO_DO_TASKS_COMPLETED,
            self::STATUS_TYPE_ISSUE_TICKET_NOT_IN_TIME,
            self::STATUS_TYPE_ISSUE_TICKET_NOT_ACCEPTED,
            self::STATUS_TYPE_ISSUE_TICKET_POSITIONING,
            self::STATUS_TYPE_ISSUE_TICKET_WAITING_IMPLEMENT,
            self::STATUS_TYPE_ISSUE_TICKET_RESOLVED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSubTriggerNodeAllowableValues()
    {
        return [
            self::SUB_TRIGGER_NODE_NORMAL,
            self::SUB_TRIGGER_NODE_FORWARDING,
            self::SUB_TRIGGER_NODE_RESUBMIT,
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
        $this->container['subTriggerNode'] = isset($data['subTriggerNode']) ? $data['subTriggerNode'] : null;
        $this->container['slaStatus'] = isset($data['slaStatus']) ? $data['slaStatus'] : null;
        $this->container['slaOrderId'] = isset($data['slaOrderId']) ? $data['slaOrderId'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['triggeringRuleEnable'] = isset($data['triggeringRuleEnable']) ? $data['triggeringRuleEnable'] : null;
        $this->container['triggeringRule'] = isset($data['triggeringRule']) ? $data['triggeringRule'] : null;
        $this->container['breakTime'] = isset($data['breakTime']) ? $data['breakTime'] : null;
        $this->container['ownerId'] = isset($data['ownerId']) ? $data['ownerId'] : null;
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['noticeTime'] = isset($data['noticeTime']) ? $data['noticeTime'] : null;
        $this->container['statusStartTime'] = isset($data['statusStartTime']) ? $data['statusStartTime'] : null;
        $this->container['preWarningRuleEnable'] = isset($data['preWarningRuleEnable']) ? $data['preWarningRuleEnable'] : null;
        $this->container['preWarningRule'] = isset($data['preWarningRule']) ? $data['preWarningRule'] : null;
        $this->container['escalateRuleEnable'] = isset($data['escalateRuleEnable']) ? $data['escalateRuleEnable'] : null;
        $this->container['escalateRules'] = isset($data['escalateRules']) ? $data['escalateRules'] : null;
        $this->container['currentNode'] = isset($data['currentNode']) ? $data['currentNode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusTypeAllowableValues();
                if (!is_null($this->container['statusType']) && !in_array($this->container['statusType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'statusType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSubTriggerNodeAllowableValues();
                if (!is_null($this->container['subTriggerNode']) && !in_array($this->container['subTriggerNode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'subTriggerNode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['slaOrderId']) && (mb_strlen($this->container['slaOrderId']) > 128)) {
                $invalidProperties[] = "invalid value for 'slaOrderId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['slaOrderId']) && (mb_strlen($this->container['slaOrderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'slaOrderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 9000000000000000)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 9000000000000000.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 0)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ownerId']) && (mb_strlen($this->container['ownerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'ownerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['ownerId']) && (mb_strlen($this->container['ownerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'ownerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ownerName']) && (mb_strlen($this->container['ownerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'ownerName', the character length must be bigger than or equal to 0.";
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
    *  状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_NOT_IN_TIME EVENT_TICKET_RESOLVED ALARM_TICKET_RESOLVED ALARM_TICKET_ALARMING ALARM_TICKET_NOT_IN_TIME CHANGE_NOT_IN_TIME CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_NOT_IN_TIME TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING TO_DO_TASKS_COMPLETED ISSUE_TICKET_NOT_IN_TIME ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    *
    * @return string|null
    */
    public function getStatusType()
    {
        return $this->container['statusType'];
    }

    /**
    * Sets statusType
    *
    * @param string|null $statusType 状态类型: EVENT_TICKET_NOT_ACCEPTED EVENT_TICKET_PROCESSING EVENT_TICKET_NOT_IN_TIME EVENT_TICKET_RESOLVED ALARM_TICKET_RESOLVED ALARM_TICKET_ALARMING ALARM_TICKET_NOT_IN_TIME CHANGE_NOT_IN_TIME CHANGE_REVIEW CHANGE_IMPLEMENTATION CHANGE_VERIFICATION TO_DO_TASKS_NOT_IN_TIME TO_DO_TASKS_TO_BE_HANDLED TO_DO_TASKS_PROCESSING TO_DO_TASKS_COMPLETED ISSUE_TICKET_NOT_IN_TIME ISSUE_TICKET_NOT_ACCEPTED ISSUE_TICKET_POSITIONING ISSUE_TICKET_WAITING_IMPLEMENT ISSUE_TICKET_RESOLVED
    *
    * @return $this
    */
    public function setStatusType($statusType)
    {
        $this->container['statusType'] = $statusType;
        return $this;
    }

    /**
    * Gets subTriggerNode
    *  子状态(NORMAL,FORWARDING,RESUBMIT)
    *
    * @return string|null
    */
    public function getSubTriggerNode()
    {
        return $this->container['subTriggerNode'];
    }

    /**
    * Sets subTriggerNode
    *
    * @param string|null $subTriggerNode 子状态(NORMAL,FORWARDING,RESUBMIT)
    *
    * @return $this
    */
    public function setSubTriggerNode($subTriggerNode)
    {
        $this->container['subTriggerNode'] = $subTriggerNode;
        return $this;
    }

    /**
    * Gets slaStatus
    *  Sla状态  false 未打破
    *
    * @return bool|null
    */
    public function getSlaStatus()
    {
        return $this->container['slaStatus'];
    }

    /**
    * Sets slaStatus
    *
    * @param bool|null $slaStatus Sla状态  false 未打破
    *
    * @return $this
    */
    public function setSlaStatus($slaStatus)
    {
        $this->container['slaStatus'] = $slaStatus;
        return $this;
    }

    /**
    * Gets slaOrderId
    *  工单ID
    *
    * @return string|null
    */
    public function getSlaOrderId()
    {
        return $this->container['slaOrderId'];
    }

    /**
    * Sets slaOrderId
    *
    * @param string|null $slaOrderId 工单ID
    *
    * @return $this
    */
    public function setSlaOrderId($slaOrderId)
    {
        $this->container['slaOrderId'] = $slaOrderId;
        return $this;
    }

    /**
    * Gets duration
    *  持续时间
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 持续时间
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets triggeringRuleEnable
    *  SLA 触发规则是否开启
    *
    * @return bool|null
    */
    public function getTriggeringRuleEnable()
    {
        return $this->container['triggeringRuleEnable'];
    }

    /**
    * Sets triggeringRuleEnable
    *
    * @param bool|null $triggeringRuleEnable SLA 触发规则是否开启
    *
    * @return $this
    */
    public function setTriggeringRuleEnable($triggeringRuleEnable)
    {
        $this->container['triggeringRuleEnable'] = $triggeringRuleEnable;
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
    * Gets breakTime
    *  打破时间
    *
    * @return string|null
    */
    public function getBreakTime()
    {
        return $this->container['breakTime'];
    }

    /**
    * Sets breakTime
    *
    * @param string|null $breakTime 打破时间
    *
    * @return $this
    */
    public function setBreakTime($breakTime)
    {
        $this->container['breakTime'] = $breakTime;
        return $this;
    }

    /**
    * Gets ownerId
    *  对象ID
    *
    * @return string|null
    */
    public function getOwnerId()
    {
        return $this->container['ownerId'];
    }

    /**
    * Sets ownerId
    *
    * @param string|null $ownerId 对象ID
    *
    * @return $this
    */
    public function setOwnerId($ownerId)
    {
        $this->container['ownerId'] = $ownerId;
        return $this;
    }

    /**
    * Gets ownerName
    *  对象人名
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 对象人名
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets noticeTime
    *  通知时间
    *
    * @return string|null
    */
    public function getNoticeTime()
    {
        return $this->container['noticeTime'];
    }

    /**
    * Sets noticeTime
    *
    * @param string|null $noticeTime 通知时间
    *
    * @return $this
    */
    public function setNoticeTime($noticeTime)
    {
        $this->container['noticeTime'] = $noticeTime;
        return $this;
    }

    /**
    * Gets statusStartTime
    *  状态开始时间
    *
    * @return string|null
    */
    public function getStatusStartTime()
    {
        return $this->container['statusStartTime'];
    }

    /**
    * Sets statusStartTime
    *
    * @param string|null $statusStartTime 状态开始时间
    *
    * @return $this
    */
    public function setStatusStartTime($statusStartTime)
    {
        $this->container['statusStartTime'] = $statusStartTime;
        return $this;
    }

    /**
    * Gets preWarningRuleEnable
    *  SLA 预警通知是否开启
    *
    * @return bool|null
    */
    public function getPreWarningRuleEnable()
    {
        return $this->container['preWarningRuleEnable'];
    }

    /**
    * Sets preWarningRuleEnable
    *
    * @param bool|null $preWarningRuleEnable SLA 预警通知是否开启
    *
    * @return $this
    */
    public function setPreWarningRuleEnable($preWarningRuleEnable)
    {
        $this->container['preWarningRuleEnable'] = $preWarningRuleEnable;
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
    * Gets escalateRuleEnable
    *  SLA 上升通知是否开启
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
    * @param bool|null $escalateRuleEnable SLA 上升通知是否开启
    *
    * @return $this
    */
    public function setEscalateRuleEnable($escalateRuleEnable)
    {
        $this->container['escalateRuleEnable'] = $escalateRuleEnable;
        return $this;
    }

    /**
    * Gets escalateRules
    *  SLA 上升通知配置
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
    * @param \HuaweiCloud\SDK\Coc\V1\Model\SlaEscalationRuleInfo[]|null $escalateRules SLA 上升通知配置
    *
    * @return $this
    */
    public function setEscalateRules($escalateRules)
    {
        $this->container['escalateRules'] = $escalateRules;
        return $this;
    }

    /**
    * Gets currentNode
    *  SLA是否在当前状态
    *
    * @return bool|null
    */
    public function getCurrentNode()
    {
        return $this->container['currentNode'];
    }

    /**
    * Sets currentNode
    *
    * @param bool|null $currentNode SLA是否在当前状态
    *
    * @return $this
    */
    public function setCurrentNode($currentNode)
    {
        $this->container['currentNode'] = $currentNode;
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

