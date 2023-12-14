<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSqlAlarmRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSqlAlarmRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlAlarmRuleName  SQL告警名称
    * isCssSql  是否管道符sql查询
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * notificationSaveRule  notificationSaveRule
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlAlarmRuleName' => 'string',
            'isCssSql' => 'bool',
            'sqlAlarmRuleDescription' => 'string',
            'sqlRequests' => '\HuaweiCloud\SDK\Lts\V2\Model\SqlRequest[]',
            'frequency' => '\HuaweiCloud\SDK\Lts\V2\Model\CreateSqlAlarmRuleFrequency',
            'conditionExpression' => 'string',
            'sqlAlarmLevel' => 'string',
            'sqlAlarmSend' => 'bool',
            'domainId' => 'string',
            'notificationSaveRule' => '\HuaweiCloud\SDK\Lts\V2\Model\SqlNotificationSaveRule',
            'triggerConditionCount' => 'int',
            'triggerConditionFrequency' => 'int',
            'whetherRecoveryPolicy' => 'bool',
            'recoveryPolicy' => 'int',
            'notificationFrequency' => 'int',
            'alarmActionRuleName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlAlarmRuleName  SQL告警名称
    * isCssSql  是否管道符sql查询
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * notificationSaveRule  notificationSaveRule
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlAlarmRuleName' => null,
        'isCssSql' => null,
        'sqlAlarmRuleDescription' => null,
        'sqlRequests' => null,
        'frequency' => null,
        'conditionExpression' => null,
        'sqlAlarmLevel' => null,
        'sqlAlarmSend' => null,
        'domainId' => null,
        'notificationSaveRule' => null,
        'triggerConditionCount' => 'int32',
        'triggerConditionFrequency' => 'int32',
        'whetherRecoveryPolicy' => null,
        'recoveryPolicy' => 'int32',
        'notificationFrequency' => 'int32',
        'alarmActionRuleName' => null
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
    * sqlAlarmRuleName  SQL告警名称
    * isCssSql  是否管道符sql查询
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * notificationSaveRule  notificationSaveRule
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlAlarmRuleName' => 'sql_alarm_rule_name',
            'isCssSql' => 'is_css_sql',
            'sqlAlarmRuleDescription' => 'sql_alarm_rule_description',
            'sqlRequests' => 'sql_requests',
            'frequency' => 'frequency',
            'conditionExpression' => 'condition_expression',
            'sqlAlarmLevel' => 'sql_alarm_level',
            'sqlAlarmSend' => 'sql_alarm_send',
            'domainId' => 'domain_id',
            'notificationSaveRule' => 'notification_save_rule',
            'triggerConditionCount' => 'trigger_condition_count',
            'triggerConditionFrequency' => 'trigger_condition_frequency',
            'whetherRecoveryPolicy' => 'whether_recovery_policy',
            'recoveryPolicy' => 'recovery_policy',
            'notificationFrequency' => 'notification_frequency',
            'alarmActionRuleName' => 'alarm_action_rule_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlAlarmRuleName  SQL告警名称
    * isCssSql  是否管道符sql查询
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * notificationSaveRule  notificationSaveRule
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlAlarmRuleName' => 'setSqlAlarmRuleName',
            'isCssSql' => 'setIsCssSql',
            'sqlAlarmRuleDescription' => 'setSqlAlarmRuleDescription',
            'sqlRequests' => 'setSqlRequests',
            'frequency' => 'setFrequency',
            'conditionExpression' => 'setConditionExpression',
            'sqlAlarmLevel' => 'setSqlAlarmLevel',
            'sqlAlarmSend' => 'setSqlAlarmSend',
            'domainId' => 'setDomainId',
            'notificationSaveRule' => 'setNotificationSaveRule',
            'triggerConditionCount' => 'setTriggerConditionCount',
            'triggerConditionFrequency' => 'setTriggerConditionFrequency',
            'whetherRecoveryPolicy' => 'setWhetherRecoveryPolicy',
            'recoveryPolicy' => 'setRecoveryPolicy',
            'notificationFrequency' => 'setNotificationFrequency',
            'alarmActionRuleName' => 'setAlarmActionRuleName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlAlarmRuleName  SQL告警名称
    * isCssSql  是否管道符sql查询
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * notificationSaveRule  notificationSaveRule
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlAlarmRuleName' => 'getSqlAlarmRuleName',
            'isCssSql' => 'getIsCssSql',
            'sqlAlarmRuleDescription' => 'getSqlAlarmRuleDescription',
            'sqlRequests' => 'getSqlRequests',
            'frequency' => 'getFrequency',
            'conditionExpression' => 'getConditionExpression',
            'sqlAlarmLevel' => 'getSqlAlarmLevel',
            'sqlAlarmSend' => 'getSqlAlarmSend',
            'domainId' => 'getDomainId',
            'notificationSaveRule' => 'getNotificationSaveRule',
            'triggerConditionCount' => 'getTriggerConditionCount',
            'triggerConditionFrequency' => 'getTriggerConditionFrequency',
            'whetherRecoveryPolicy' => 'getWhetherRecoveryPolicy',
            'recoveryPolicy' => 'getRecoveryPolicy',
            'notificationFrequency' => 'getNotificationFrequency',
            'alarmActionRuleName' => 'getAlarmActionRuleName'
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
    const SQL_ALARM_LEVEL_INFO = 'Info';
    const SQL_ALARM_LEVEL_MINOR = 'Minor';
    const SQL_ALARM_LEVEL_MAJOR = 'Major';
    const SQL_ALARM_LEVEL_CRITICAL = 'Critical';
    const NOTIFICATION_FREQUENCY_0 = 0;
    const NOTIFICATION_FREQUENCY_5 = 5;
    const NOTIFICATION_FREQUENCY_10 = 10;
    const NOTIFICATION_FREQUENCY_15 = 15;
    const NOTIFICATION_FREQUENCY_30 = 30;
    const NOTIFICATION_FREQUENCY_60 = 60;
    const NOTIFICATION_FREQUENCY_180 = 180;
    const NOTIFICATION_FREQUENCY_360 = 360;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSqlAlarmLevelAllowableValues()
    {
        return [
            self::SQL_ALARM_LEVEL_INFO,
            self::SQL_ALARM_LEVEL_MINOR,
            self::SQL_ALARM_LEVEL_MAJOR,
            self::SQL_ALARM_LEVEL_CRITICAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotificationFrequencyAllowableValues()
    {
        return [
            self::NOTIFICATION_FREQUENCY_0,
            self::NOTIFICATION_FREQUENCY_5,
            self::NOTIFICATION_FREQUENCY_10,
            self::NOTIFICATION_FREQUENCY_15,
            self::NOTIFICATION_FREQUENCY_30,
            self::NOTIFICATION_FREQUENCY_60,
            self::NOTIFICATION_FREQUENCY_180,
            self::NOTIFICATION_FREQUENCY_360,
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
        $this->container['sqlAlarmRuleName'] = isset($data['sqlAlarmRuleName']) ? $data['sqlAlarmRuleName'] : null;
        $this->container['isCssSql'] = isset($data['isCssSql']) ? $data['isCssSql'] : null;
        $this->container['sqlAlarmRuleDescription'] = isset($data['sqlAlarmRuleDescription']) ? $data['sqlAlarmRuleDescription'] : null;
        $this->container['sqlRequests'] = isset($data['sqlRequests']) ? $data['sqlRequests'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['conditionExpression'] = isset($data['conditionExpression']) ? $data['conditionExpression'] : null;
        $this->container['sqlAlarmLevel'] = isset($data['sqlAlarmLevel']) ? $data['sqlAlarmLevel'] : null;
        $this->container['sqlAlarmSend'] = isset($data['sqlAlarmSend']) ? $data['sqlAlarmSend'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['notificationSaveRule'] = isset($data['notificationSaveRule']) ? $data['notificationSaveRule'] : null;
        $this->container['triggerConditionCount'] = isset($data['triggerConditionCount']) ? $data['triggerConditionCount'] : null;
        $this->container['triggerConditionFrequency'] = isset($data['triggerConditionFrequency']) ? $data['triggerConditionFrequency'] : null;
        $this->container['whetherRecoveryPolicy'] = isset($data['whetherRecoveryPolicy']) ? $data['whetherRecoveryPolicy'] : null;
        $this->container['recoveryPolicy'] = isset($data['recoveryPolicy']) ? $data['recoveryPolicy'] : null;
        $this->container['notificationFrequency'] = isset($data['notificationFrequency']) ? $data['notificationFrequency'] : null;
        $this->container['alarmActionRuleName'] = isset($data['alarmActionRuleName']) ? $data['alarmActionRuleName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sqlAlarmRuleName'] === null) {
            $invalidProperties[] = "'sqlAlarmRuleName' can't be null";
        }
            if ((mb_strlen($this->container['sqlAlarmRuleName']) > 64)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['sqlAlarmRuleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sqlAlarmRuleDescription']) && (mb_strlen($this->container['sqlAlarmRuleDescription']) > 64)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleDescription', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sqlAlarmRuleDescription']) && (mb_strlen($this->container['sqlAlarmRuleDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleDescription', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['sqlRequests'] === null) {
            $invalidProperties[] = "'sqlRequests' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if ($this->container['conditionExpression'] === null) {
            $invalidProperties[] = "'conditionExpression' can't be null";
        }
            if ((mb_strlen($this->container['conditionExpression']) > 1024)) {
                $invalidProperties[] = "invalid value for 'conditionExpression', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['conditionExpression']) < 1)) {
                $invalidProperties[] = "invalid value for 'conditionExpression', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sqlAlarmLevel'] === null) {
            $invalidProperties[] = "'sqlAlarmLevel' can't be null";
        }
            $allowedValues = $this->getSqlAlarmLevelAllowableValues();
                if (!is_null($this->container['sqlAlarmLevel']) && !in_array($this->container['sqlAlarmLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sqlAlarmLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['sqlAlarmSend'] === null) {
            $invalidProperties[] = "'sqlAlarmSend' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['notificationFrequency'] === null) {
            $invalidProperties[] = "'notificationFrequency' can't be null";
        }
            $allowedValues = $this->getNotificationFrequencyAllowableValues();
                if (!is_null($this->container['notificationFrequency']) && !in_array($this->container['notificationFrequency'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'notificationFrequency', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets sqlAlarmRuleName
    *  SQL告警名称
    *
    * @return string
    */
    public function getSqlAlarmRuleName()
    {
        return $this->container['sqlAlarmRuleName'];
    }

    /**
    * Sets sqlAlarmRuleName
    *
    * @param string $sqlAlarmRuleName SQL告警名称
    *
    * @return $this
    */
    public function setSqlAlarmRuleName($sqlAlarmRuleName)
    {
        $this->container['sqlAlarmRuleName'] = $sqlAlarmRuleName;
        return $this;
    }

    /**
    * Gets isCssSql
    *  是否管道符sql查询
    *
    * @return bool|null
    */
    public function getIsCssSql()
    {
        return $this->container['isCssSql'];
    }

    /**
    * Sets isCssSql
    *
    * @param bool|null $isCssSql 是否管道符sql查询
    *
    * @return $this
    */
    public function setIsCssSql($isCssSql)
    {
        $this->container['isCssSql'] = $isCssSql;
        return $this;
    }

    /**
    * Gets sqlAlarmRuleDescription
    *  SQL告警信息描述
    *
    * @return string|null
    */
    public function getSqlAlarmRuleDescription()
    {
        return $this->container['sqlAlarmRuleDescription'];
    }

    /**
    * Sets sqlAlarmRuleDescription
    *
    * @param string|null $sqlAlarmRuleDescription SQL告警信息描述
    *
    * @return $this
    */
    public function setSqlAlarmRuleDescription($sqlAlarmRuleDescription)
    {
        $this->container['sqlAlarmRuleDescription'] = $sqlAlarmRuleDescription;
        return $this;
    }

    /**
    * Gets sqlRequests
    *  SQL详细信息
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\SqlRequest[]
    */
    public function getSqlRequests()
    {
        return $this->container['sqlRequests'];
    }

    /**
    * Sets sqlRequests
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\SqlRequest[] $sqlRequests SQL详细信息
    *
    * @return $this
    */
    public function setSqlRequests($sqlRequests)
    {
        $this->container['sqlRequests'] = $sqlRequests;
        return $this;
    }

    /**
    * Gets frequency
    *  frequency
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\CreateSqlAlarmRuleFrequency
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\CreateSqlAlarmRuleFrequency $frequency frequency
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
        return $this;
    }

    /**
    * Gets conditionExpression
    *  条件表达式
    *
    * @return string
    */
    public function getConditionExpression()
    {
        return $this->container['conditionExpression'];
    }

    /**
    * Sets conditionExpression
    *
    * @param string $conditionExpression 条件表达式
    *
    * @return $this
    */
    public function setConditionExpression($conditionExpression)
    {
        $this->container['conditionExpression'] = $conditionExpression;
        return $this;
    }

    /**
    * Gets sqlAlarmLevel
    *  告警级别
    *
    * @return string
    */
    public function getSqlAlarmLevel()
    {
        return $this->container['sqlAlarmLevel'];
    }

    /**
    * Sets sqlAlarmLevel
    *
    * @param string $sqlAlarmLevel 告警级别
    *
    * @return $this
    */
    public function setSqlAlarmLevel($sqlAlarmLevel)
    {
        $this->container['sqlAlarmLevel'] = $sqlAlarmLevel;
        return $this;
    }

    /**
    * Gets sqlAlarmSend
    *  是否发送
    *
    * @return bool
    */
    public function getSqlAlarmSend()
    {
        return $this->container['sqlAlarmSend'];
    }

    /**
    * Sets sqlAlarmSend
    *
    * @param bool $sqlAlarmSend 是否发送
    *
    * @return $this
    */
    public function setSqlAlarmSend($sqlAlarmSend)
    {
        $this->container['sqlAlarmSend'] = $sqlAlarmSend;
        return $this;
    }

    /**
    * Gets domainId
    *  domainId
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId domainId
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets notificationSaveRule
    *  notificationSaveRule
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\SqlNotificationSaveRule|null
    */
    public function getNotificationSaveRule()
    {
        return $this->container['notificationSaveRule'];
    }

    /**
    * Sets notificationSaveRule
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\SqlNotificationSaveRule|null $notificationSaveRule notificationSaveRule
    *
    * @return $this
    */
    public function setNotificationSaveRule($notificationSaveRule)
    {
        $this->container['notificationSaveRule'] = $notificationSaveRule;
        return $this;
    }

    /**
    * Gets triggerConditionCount
    *  触发条件：触发次数;默认为1
    *
    * @return int|null
    */
    public function getTriggerConditionCount()
    {
        return $this->container['triggerConditionCount'];
    }

    /**
    * Sets triggerConditionCount
    *
    * @param int|null $triggerConditionCount 触发条件：触发次数;默认为1
    *
    * @return $this
    */
    public function setTriggerConditionCount($triggerConditionCount)
    {
        $this->container['triggerConditionCount'] = $triggerConditionCount;
        return $this;
    }

    /**
    * Gets triggerConditionFrequency
    *  触发条件：触发周期;默认为1
    *
    * @return int|null
    */
    public function getTriggerConditionFrequency()
    {
        return $this->container['triggerConditionFrequency'];
    }

    /**
    * Sets triggerConditionFrequency
    *
    * @param int|null $triggerConditionFrequency 触发条件：触发周期;默认为1
    *
    * @return $this
    */
    public function setTriggerConditionFrequency($triggerConditionFrequency)
    {
        $this->container['triggerConditionFrequency'] = $triggerConditionFrequency;
        return $this;
    }

    /**
    * Gets whetherRecoveryPolicy
    *  是否打开恢复通知;默认false
    *
    * @return bool|null
    */
    public function getWhetherRecoveryPolicy()
    {
        return $this->container['whetherRecoveryPolicy'];
    }

    /**
    * Sets whetherRecoveryPolicy
    *
    * @param bool|null $whetherRecoveryPolicy 是否打开恢复通知;默认false
    *
    * @return $this
    */
    public function setWhetherRecoveryPolicy($whetherRecoveryPolicy)
    {
        $this->container['whetherRecoveryPolicy'] = $whetherRecoveryPolicy;
        return $this;
    }

    /**
    * Gets recoveryPolicy
    *  恢复策略周期;默认为3
    *
    * @return int|null
    */
    public function getRecoveryPolicy()
    {
        return $this->container['recoveryPolicy'];
    }

    /**
    * Sets recoveryPolicy
    *
    * @param int|null $recoveryPolicy 恢复策略周期;默认为3
    *
    * @return $this
    */
    public function setRecoveryPolicy($recoveryPolicy)
    {
        $this->container['recoveryPolicy'] = $recoveryPolicy;
        return $this;
    }

    /**
    * Gets notificationFrequency
    *  通知频率,单位(分钟)
    *
    * @return int
    */
    public function getNotificationFrequency()
    {
        return $this->container['notificationFrequency'];
    }

    /**
    * Sets notificationFrequency
    *
    * @param int $notificationFrequency 通知频率,单位(分钟)
    *
    * @return $this
    */
    public function setNotificationFrequency($notificationFrequency)
    {
        $this->container['notificationFrequency'] = $notificationFrequency;
        return $this;
    }

    /**
    * Gets alarmActionRuleName
    *  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @return string|null
    */
    public function getAlarmActionRuleName()
    {
        return $this->container['alarmActionRuleName'];
    }

    /**
    * Sets alarmActionRuleName
    *
    * @param string|null $alarmActionRuleName 告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @return $this
    */
    public function setAlarmActionRuleName($alarmActionRuleName)
    {
        $this->container['alarmActionRuleName'] = $alarmActionRuleName;
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

