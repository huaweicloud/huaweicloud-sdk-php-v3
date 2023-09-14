<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateKeywordsAlarmRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateKeywordsAlarmRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keywordsAlarmRuleId  关键词告警规则id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  告警统计周期
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * keywordsAlarmSendCode  发送主题 0:不变 1:新增 2:修改 3:删除
    * domainId  domainId
    * notificationSaveRule  通知主题
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keywordsAlarmRuleId' => 'string',
            'keywordsAlarmRuleName' => 'string',
            'keywordsAlarmRuleDescription' => 'string',
            'keywordsRequests' => '\HuaweiCloud\SDK\Lts\V2\Model\KeywordsRequest[]',
            'frequency' => 'object',
            'keywordsAlarmLevel' => 'string',
            'keywordsAlarmSend' => 'bool',
            'keywordsAlarmSendCode' => 'int',
            'domainId' => 'string',
            'notificationSaveRule' => 'object',
            'triggerConditionCount' => 'int',
            'triggerConditionFrequency' => 'int',
            'whetherRecoveryPolicy' => 'bool',
            'recoveryPolicy' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keywordsAlarmRuleId  关键词告警规则id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  告警统计周期
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * keywordsAlarmSendCode  发送主题 0:不变 1:新增 2:修改 3:删除
    * domainId  domainId
    * notificationSaveRule  通知主题
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keywordsAlarmRuleId' => null,
        'keywordsAlarmRuleName' => null,
        'keywordsAlarmRuleDescription' => null,
        'keywordsRequests' => null,
        'frequency' => null,
        'keywordsAlarmLevel' => null,
        'keywordsAlarmSend' => null,
        'keywordsAlarmSendCode' => 'int32',
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
    * keywordsAlarmRuleId  关键词告警规则id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  告警统计周期
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * keywordsAlarmSendCode  发送主题 0:不变 1:新增 2:修改 3:删除
    * domainId  domainId
    * notificationSaveRule  通知主题
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keywordsAlarmRuleId' => 'keywords_alarm_rule_id',
            'keywordsAlarmRuleName' => 'keywords_alarm_rule_name',
            'keywordsAlarmRuleDescription' => 'keywords_alarm_rule_description',
            'keywordsRequests' => 'keywords_requests',
            'frequency' => 'frequency',
            'keywordsAlarmLevel' => 'keywords_alarm_level',
            'keywordsAlarmSend' => 'keywords_alarm_send',
            'keywordsAlarmSendCode' => 'keywords_alarm_send_code',
            'domainId' => 'domain_id',
            'notificationSaveRule' => 'notification_save_rule',
            'triggerConditionCount' => 'trigger_condition_count',
            'triggerConditionFrequency' => 'trigger_condition_frequency',
            'whetherRecoveryPolicy' => 'whether_recovery_policy',
            'recoveryPolicy' => 'recovery_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keywordsAlarmRuleId  关键词告警规则id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  告警统计周期
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * keywordsAlarmSendCode  发送主题 0:不变 1:新增 2:修改 3:删除
    * domainId  domainId
    * notificationSaveRule  通知主题
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $setters = [
            'keywordsAlarmRuleId' => 'setKeywordsAlarmRuleId',
            'keywordsAlarmRuleName' => 'setKeywordsAlarmRuleName',
            'keywordsAlarmRuleDescription' => 'setKeywordsAlarmRuleDescription',
            'keywordsRequests' => 'setKeywordsRequests',
            'frequency' => 'setFrequency',
            'keywordsAlarmLevel' => 'setKeywordsAlarmLevel',
            'keywordsAlarmSend' => 'setKeywordsAlarmSend',
            'keywordsAlarmSendCode' => 'setKeywordsAlarmSendCode',
            'domainId' => 'setDomainId',
            'notificationSaveRule' => 'setNotificationSaveRule',
            'triggerConditionCount' => 'setTriggerConditionCount',
            'triggerConditionFrequency' => 'setTriggerConditionFrequency',
            'whetherRecoveryPolicy' => 'setWhetherRecoveryPolicy',
            'recoveryPolicy' => 'setRecoveryPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keywordsAlarmRuleId  关键词告警规则id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  告警统计周期
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * keywordsAlarmSendCode  发送主题 0:不变 1:新增 2:修改 3:删除
    * domainId  domainId
    * notificationSaveRule  通知主题
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $getters = [
            'keywordsAlarmRuleId' => 'getKeywordsAlarmRuleId',
            'keywordsAlarmRuleName' => 'getKeywordsAlarmRuleName',
            'keywordsAlarmRuleDescription' => 'getKeywordsAlarmRuleDescription',
            'keywordsRequests' => 'getKeywordsRequests',
            'frequency' => 'getFrequency',
            'keywordsAlarmLevel' => 'getKeywordsAlarmLevel',
            'keywordsAlarmSend' => 'getKeywordsAlarmSend',
            'keywordsAlarmSendCode' => 'getKeywordsAlarmSendCode',
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
    const KEYWORDS_ALARM_LEVEL_INFO = 'Info';
    const KEYWORDS_ALARM_LEVEL_MINOR = 'Minor';
    const KEYWORDS_ALARM_LEVEL_MAJOR = 'Major';
    const KEYWORDS_ALARM_LEVEL_CRITICAL = 'Critical';
    const KEYWORDS_ALARM_SEND_CODE_0 = 0;
    const KEYWORDS_ALARM_SEND_CODE_1 = 1;
    const KEYWORDS_ALARM_SEND_CODE_2 = 2;
    const KEYWORDS_ALARM_SEND_CODE_3 = 3;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeywordsAlarmLevelAllowableValues()
    {
        return [
            self::KEYWORDS_ALARM_LEVEL_INFO,
            self::KEYWORDS_ALARM_LEVEL_MINOR,
            self::KEYWORDS_ALARM_LEVEL_MAJOR,
            self::KEYWORDS_ALARM_LEVEL_CRITICAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeywordsAlarmSendCodeAllowableValues()
    {
        return [
            self::KEYWORDS_ALARM_SEND_CODE_0,
            self::KEYWORDS_ALARM_SEND_CODE_1,
            self::KEYWORDS_ALARM_SEND_CODE_2,
            self::KEYWORDS_ALARM_SEND_CODE_3,
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
        $this->container['keywordsAlarmRuleId'] = isset($data['keywordsAlarmRuleId']) ? $data['keywordsAlarmRuleId'] : null;
        $this->container['keywordsAlarmRuleName'] = isset($data['keywordsAlarmRuleName']) ? $data['keywordsAlarmRuleName'] : null;
        $this->container['keywordsAlarmRuleDescription'] = isset($data['keywordsAlarmRuleDescription']) ? $data['keywordsAlarmRuleDescription'] : null;
        $this->container['keywordsRequests'] = isset($data['keywordsRequests']) ? $data['keywordsRequests'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['keywordsAlarmLevel'] = isset($data['keywordsAlarmLevel']) ? $data['keywordsAlarmLevel'] : null;
        $this->container['keywordsAlarmSend'] = isset($data['keywordsAlarmSend']) ? $data['keywordsAlarmSend'] : null;
        $this->container['keywordsAlarmSendCode'] = isset($data['keywordsAlarmSendCode']) ? $data['keywordsAlarmSendCode'] : null;
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
        if ($this->container['keywordsAlarmRuleId'] === null) {
            $invalidProperties[] = "'keywordsAlarmRuleId' can't be null";
        }
            if ((mb_strlen($this->container['keywordsAlarmRuleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['keywordsAlarmRuleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['keywordsAlarmRuleName'] === null) {
            $invalidProperties[] = "'keywordsAlarmRuleName' can't be null";
        }
            if ((mb_strlen($this->container['keywordsAlarmRuleName']) > 64)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['keywordsAlarmRuleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['keywordsAlarmRuleDescription']) && (mb_strlen($this->container['keywordsAlarmRuleDescription']) > 64)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleDescription', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['keywordsAlarmRuleDescription']) && (mb_strlen($this->container['keywordsAlarmRuleDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleDescription', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['keywordsRequests'] === null) {
            $invalidProperties[] = "'keywordsRequests' can't be null";
        }
        if ($this->container['frequency'] === null) {
            $invalidProperties[] = "'frequency' can't be null";
        }
        if ($this->container['keywordsAlarmLevel'] === null) {
            $invalidProperties[] = "'keywordsAlarmLevel' can't be null";
        }
            $allowedValues = $this->getKeywordsAlarmLevelAllowableValues();
                if (!is_null($this->container['keywordsAlarmLevel']) && !in_array($this->container['keywordsAlarmLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keywordsAlarmLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['keywordsAlarmSend'] === null) {
            $invalidProperties[] = "'keywordsAlarmSend' can't be null";
        }
        if ($this->container['keywordsAlarmSendCode'] === null) {
            $invalidProperties[] = "'keywordsAlarmSendCode' can't be null";
        }
            $allowedValues = $this->getKeywordsAlarmSendCodeAllowableValues();
                if (!is_null($this->container['keywordsAlarmSendCode']) && !in_array($this->container['keywordsAlarmSendCode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keywordsAlarmSendCode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (($this->container['keywordsAlarmSendCode'] > 3)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmSendCode', must be smaller than or equal to 3.";
            }
            if (($this->container['keywordsAlarmSendCode'] < 0)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmSendCode', must be bigger than or equal to 0.";
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
    * Gets keywordsAlarmRuleId
    *  关键词告警规则id
    *
    * @return string
    */
    public function getKeywordsAlarmRuleId()
    {
        return $this->container['keywordsAlarmRuleId'];
    }

    /**
    * Sets keywordsAlarmRuleId
    *
    * @param string $keywordsAlarmRuleId 关键词告警规则id
    *
    * @return $this
    */
    public function setKeywordsAlarmRuleId($keywordsAlarmRuleId)
    {
        $this->container['keywordsAlarmRuleId'] = $keywordsAlarmRuleId;
        return $this;
    }

    /**
    * Gets keywordsAlarmRuleName
    *  关键词告警名称
    *
    * @return string
    */
    public function getKeywordsAlarmRuleName()
    {
        return $this->container['keywordsAlarmRuleName'];
    }

    /**
    * Sets keywordsAlarmRuleName
    *
    * @param string $keywordsAlarmRuleName 关键词告警名称
    *
    * @return $this
    */
    public function setKeywordsAlarmRuleName($keywordsAlarmRuleName)
    {
        $this->container['keywordsAlarmRuleName'] = $keywordsAlarmRuleName;
        return $this;
    }

    /**
    * Gets keywordsAlarmRuleDescription
    *  关键词告警信息描述
    *
    * @return string|null
    */
    public function getKeywordsAlarmRuleDescription()
    {
        return $this->container['keywordsAlarmRuleDescription'];
    }

    /**
    * Sets keywordsAlarmRuleDescription
    *
    * @param string|null $keywordsAlarmRuleDescription 关键词告警信息描述
    *
    * @return $this
    */
    public function setKeywordsAlarmRuleDescription($keywordsAlarmRuleDescription)
    {
        $this->container['keywordsAlarmRuleDescription'] = $keywordsAlarmRuleDescription;
        return $this;
    }

    /**
    * Gets keywordsRequests
    *  关键词详细信息
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\KeywordsRequest[]
    */
    public function getKeywordsRequests()
    {
        return $this->container['keywordsRequests'];
    }

    /**
    * Sets keywordsRequests
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\KeywordsRequest[] $keywordsRequests 关键词详细信息
    *
    * @return $this
    */
    public function setKeywordsRequests($keywordsRequests)
    {
        $this->container['keywordsRequests'] = $keywordsRequests;
        return $this;
    }

    /**
    * Gets frequency
    *  告警统计周期
    *
    * @return object
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param object $frequency 告警统计周期
    *
    * @return $this
    */
    public function setFrequency($frequency)
    {
        $this->container['frequency'] = $frequency;
        return $this;
    }

    /**
    * Gets keywordsAlarmLevel
    *  告警级别
    *
    * @return string
    */
    public function getKeywordsAlarmLevel()
    {
        return $this->container['keywordsAlarmLevel'];
    }

    /**
    * Sets keywordsAlarmLevel
    *
    * @param string $keywordsAlarmLevel 告警级别
    *
    * @return $this
    */
    public function setKeywordsAlarmLevel($keywordsAlarmLevel)
    {
        $this->container['keywordsAlarmLevel'] = $keywordsAlarmLevel;
        return $this;
    }

    /**
    * Gets keywordsAlarmSend
    *  是否发送
    *
    * @return bool
    */
    public function getKeywordsAlarmSend()
    {
        return $this->container['keywordsAlarmSend'];
    }

    /**
    * Sets keywordsAlarmSend
    *
    * @param bool $keywordsAlarmSend 是否发送
    *
    * @return $this
    */
    public function setKeywordsAlarmSend($keywordsAlarmSend)
    {
        $this->container['keywordsAlarmSend'] = $keywordsAlarmSend;
        return $this;
    }

    /**
    * Gets keywordsAlarmSendCode
    *  发送主题 0:不变 1:新增 2:修改 3:删除
    *
    * @return int
    */
    public function getKeywordsAlarmSendCode()
    {
        return $this->container['keywordsAlarmSendCode'];
    }

    /**
    * Sets keywordsAlarmSendCode
    *
    * @param int $keywordsAlarmSendCode 发送主题 0:不变 1:新增 2:修改 3:删除
    *
    * @return $this
    */
    public function setKeywordsAlarmSendCode($keywordsAlarmSendCode)
    {
        $this->container['keywordsAlarmSendCode'] = $keywordsAlarmSendCode;
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
    *  通知主题
    *
    * @return object|null
    */
    public function getNotificationSaveRule()
    {
        return $this->container['notificationSaveRule'];
    }

    /**
    * Sets notificationSaveRule
    *
    * @param object|null $notificationSaveRule 通知主题
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

