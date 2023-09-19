<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSqlAlarmRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSqlAlarmRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlAlarmRuleId  SQL告警id
    * sqlAlarmRuleName  SQL告警名称
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * sqlAlarmSendCode  发送主题 0:不变 1:新增 2:修改 3:删除
    * domainId  domainId
    * notificationSaveRule  notificationSaveRule
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlAlarmRuleId' => 'string',
            'sqlAlarmRuleName' => 'string',
            'sqlAlarmRuleDescription' => 'string',
            'sqlRequests' => '\HuaweiCloud\SDK\Lts\V2\Model\SqlRequest[]',
            'frequency' => '\HuaweiCloud\SDK\Lts\V2\Model\Frequency',
            'conditionExpression' => 'string',
            'sqlAlarmLevel' => 'string',
            'sqlAlarmSend' => 'bool',
            'sqlAlarmSendCode' => 'int',
            'domainId' => 'string',
            'notificationSaveRule' => '\HuaweiCloud\SDK\Lts\V2\Model\SqlNotificationSaveRule',
            'triggerConditionCount' => 'int',
            'triggerConditionFrequency' => 'int',
            'whetherRecoveryPolicy' => 'bool',
            'recoveryPolicy' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlAlarmRuleId  SQL告警id
    * sqlAlarmRuleName  SQL告警名称
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * sqlAlarmSendCode  发送主题 0:不变 1:新增 2:修改 3:删除
    * domainId  domainId
    * notificationSaveRule  notificationSaveRule
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlAlarmRuleId' => null,
        'sqlAlarmRuleName' => null,
        'sqlAlarmRuleDescription' => null,
        'sqlRequests' => null,
        'frequency' => null,
        'conditionExpression' => null,
        'sqlAlarmLevel' => null,
        'sqlAlarmSend' => null,
        'sqlAlarmSendCode' => 'int32',
        'domainId' => null,
        'notificationSaveRule' => null,
        'triggerConditionCount' => 'int32',
        'triggerConditionFrequency' => 'int32',
        'whetherRecoveryPolicy' => null,
        'recoveryPolicy' => 'int32'
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
    * sqlAlarmRuleId  SQL告警id
    * sqlAlarmRuleName  SQL告警名称
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * sqlAlarmSendCode  发送主题 0:不变 1:新增 2:修改 3:删除
    * domainId  domainId
    * notificationSaveRule  notificationSaveRule
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlAlarmRuleId' => 'sql_alarm_rule_id',
            'sqlAlarmRuleName' => 'sql_alarm_rule_name',
            'sqlAlarmRuleDescription' => 'sql_alarm_rule_description',
            'sqlRequests' => 'sql_requests',
            'frequency' => 'frequency',
            'conditionExpression' => 'condition_expression',
            'sqlAlarmLevel' => 'sql_alarm_level',
            'sqlAlarmSend' => 'sql_alarm_send',
            'sqlAlarmSendCode' => 'sql_alarm_send_code',
            'domainId' => 'domain_id',
            'notificationSaveRule' => 'notification_save_rule',
            'triggerConditionCount' => 'trigger_condition_count',
            'triggerConditionFrequency' => 'trigger_condition_frequency',
            'whetherRecoveryPolicy' => 'whether_recovery_policy',
            'recoveryPolicy' => 'recovery_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlAlarmRuleId  SQL告警id
    * sqlAlarmRuleName  SQL告警名称
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * sqlAlarmSendCode  发送主题 0:不变 1:新增 2:修改 3:删除
    * domainId  domainId
    * notificationSaveRule  notificationSaveRule
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlAlarmRuleId' => 'setSqlAlarmRuleId',
            'sqlAlarmRuleName' => 'setSqlAlarmRuleName',
            'sqlAlarmRuleDescription' => 'setSqlAlarmRuleDescription',
            'sqlRequests' => 'setSqlRequests',
            'frequency' => 'setFrequency',
            'conditionExpression' => 'setConditionExpression',
            'sqlAlarmLevel' => 'setSqlAlarmLevel',
            'sqlAlarmSend' => 'setSqlAlarmSend',
            'sqlAlarmSendCode' => 'setSqlAlarmSendCode',
            'domainId' => 'setDomainId',
            'notificationSaveRule' => 'setNotificationSaveRule',
            'triggerConditionCount' => 'setTriggerConditionCount',
            'triggerConditionFrequency' => 'setTriggerConditionFrequency',
            'whetherRecoveryPolicy' => 'setWhetherRecoveryPolicy',
            'recoveryPolicy' => 'setRecoveryPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlAlarmRuleId  SQL告警id
    * sqlAlarmRuleName  SQL告警名称
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * sqlAlarmSendCode  发送主题 0:不变 1:新增 2:修改 3:删除
    * domainId  domainId
    * notificationSaveRule  notificationSaveRule
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlAlarmRuleId' => 'getSqlAlarmRuleId',
            'sqlAlarmRuleName' => 'getSqlAlarmRuleName',
            'sqlAlarmRuleDescription' => 'getSqlAlarmRuleDescription',
            'sqlRequests' => 'getSqlRequests',
            'frequency' => 'getFrequency',
            'conditionExpression' => 'getConditionExpression',
            'sqlAlarmLevel' => 'getSqlAlarmLevel',
            'sqlAlarmSend' => 'getSqlAlarmSend',
            'sqlAlarmSendCode' => 'getSqlAlarmSendCode',
            'domainId' => 'getDomainId',
            'notificationSaveRule' => 'getNotificationSaveRule',
            'triggerConditionCount' => 'getTriggerConditionCount',
            'triggerConditionFrequency' => 'getTriggerConditionFrequency',
            'whetherRecoveryPolicy' => 'getWhetherRecoveryPolicy',
            'recoveryPolicy' => 'getRecoveryPolicy'
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
    const SQL_ALARM_SEND_CODE_0 = 0;
    const SQL_ALARM_SEND_CODE_1 = 1;
    const SQL_ALARM_SEND_CODE_2 = 2;
    const SQL_ALARM_SEND_CODE_3 = 3;
    

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
    public function getSqlAlarmSendCodeAllowableValues()
    {
        return [
            self::SQL_ALARM_SEND_CODE_0,
            self::SQL_ALARM_SEND_CODE_1,
            self::SQL_ALARM_SEND_CODE_2,
            self::SQL_ALARM_SEND_CODE_3,
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
        $this->container['sqlAlarmRuleId'] = isset($data['sqlAlarmRuleId']) ? $data['sqlAlarmRuleId'] : null;
        $this->container['sqlAlarmRuleName'] = isset($data['sqlAlarmRuleName']) ? $data['sqlAlarmRuleName'] : null;
        $this->container['sqlAlarmRuleDescription'] = isset($data['sqlAlarmRuleDescription']) ? $data['sqlAlarmRuleDescription'] : null;
        $this->container['sqlRequests'] = isset($data['sqlRequests']) ? $data['sqlRequests'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['conditionExpression'] = isset($data['conditionExpression']) ? $data['conditionExpression'] : null;
        $this->container['sqlAlarmLevel'] = isset($data['sqlAlarmLevel']) ? $data['sqlAlarmLevel'] : null;
        $this->container['sqlAlarmSend'] = isset($data['sqlAlarmSend']) ? $data['sqlAlarmSend'] : null;
        $this->container['sqlAlarmSendCode'] = isset($data['sqlAlarmSendCode']) ? $data['sqlAlarmSendCode'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['notificationSaveRule'] = isset($data['notificationSaveRule']) ? $data['notificationSaveRule'] : null;
        $this->container['triggerConditionCount'] = isset($data['triggerConditionCount']) ? $data['triggerConditionCount'] : null;
        $this->container['triggerConditionFrequency'] = isset($data['triggerConditionFrequency']) ? $data['triggerConditionFrequency'] : null;
        $this->container['whetherRecoveryPolicy'] = isset($data['whetherRecoveryPolicy']) ? $data['whetherRecoveryPolicy'] : null;
        $this->container['recoveryPolicy'] = isset($data['recoveryPolicy']) ? $data['recoveryPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sqlAlarmRuleId'] === null) {
            $invalidProperties[] = "'sqlAlarmRuleId' can't be null";
        }
            if ((mb_strlen($this->container['sqlAlarmRuleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['sqlAlarmRuleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleId', the character length must be bigger than or equal to 36.";
            }
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
            if ((mb_strlen($this->container['conditionExpression']) > 2048)) {
                $invalidProperties[] = "invalid value for 'conditionExpression', the character length must be smaller than or equal to 2048.";
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
        if ($this->container['sqlAlarmSendCode'] === null) {
            $invalidProperties[] = "'sqlAlarmSendCode' can't be null";
        }
            $allowedValues = $this->getSqlAlarmSendCodeAllowableValues();
                if (!is_null($this->container['sqlAlarmSendCode']) && !in_array($this->container['sqlAlarmSendCode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sqlAlarmSendCode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (($this->container['sqlAlarmSendCode'] > 3)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmSendCode', must be smaller than or equal to 3.";
            }
            if (($this->container['sqlAlarmSendCode'] < 0)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmSendCode', must be bigger than or equal to 0.";
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
    * Gets sqlAlarmRuleId
    *  SQL告警id
    *
    * @return string
    */
    public function getSqlAlarmRuleId()
    {
        return $this->container['sqlAlarmRuleId'];
    }

    /**
    * Sets sqlAlarmRuleId
    *
    * @param string $sqlAlarmRuleId SQL告警id
    *
    * @return $this
    */
    public function setSqlAlarmRuleId($sqlAlarmRuleId)
    {
        $this->container['sqlAlarmRuleId'] = $sqlAlarmRuleId;
        return $this;
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
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Frequency
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Frequency $frequency frequency
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
    * Gets sqlAlarmSendCode
    *  发送主题 0:不变 1:新增 2:修改 3:删除
    *
    * @return int
    */
    public function getSqlAlarmSendCode()
    {
        return $this->container['sqlAlarmSendCode'];
    }

    /**
    * Sets sqlAlarmSendCode
    *
    * @param int $sqlAlarmSendCode 发送主题 0:不变 1:新增 2:修改 3:删除
    *
    * @return $this
    */
    public function setSqlAlarmSendCode($sqlAlarmSendCode)
    {
        $this->container['sqlAlarmSendCode'] = $sqlAlarmSendCode;
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

