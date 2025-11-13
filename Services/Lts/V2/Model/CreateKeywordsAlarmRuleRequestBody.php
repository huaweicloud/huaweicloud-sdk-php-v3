<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateKeywordsAlarmRuleRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateKeywordsAlarmRuleRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keywordsAlarmRuleName  关键词告警名称  >不能以点和下划线开头或以点结尾。
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * domainId  domainId
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    * tags  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。 **约束限制：** 不涉及。
    * enterpriseProjectId  **参数解释：** 企业项目id信息。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keywordsAlarmRuleName' => 'string',
            'keywordsAlarmRuleDescription' => 'string',
            'keywordsRequests' => '\HuaweiCloud\SDK\Lts\V2\Model\KeywordsRequest[]',
            'frequency' => '\HuaweiCloud\SDK\Lts\V2\Model\Frequency',
            'keywordsAlarmLevel' => 'string',
            'domainId' => 'string',
            'triggerConditionCount' => 'int',
            'triggerConditionFrequency' => 'int',
            'whetherRecoveryPolicy' => 'bool',
            'recoveryPolicy' => 'int',
            'notificationFrequency' => 'int',
            'alarmActionRuleName' => 'string',
            'tags' => '\HuaweiCloud\SDK\Lts\V2\Model\TagsRequestBody[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keywordsAlarmRuleName  关键词告警名称  >不能以点和下划线开头或以点结尾。
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * domainId  domainId
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    * tags  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。 **约束限制：** 不涉及。
    * enterpriseProjectId  **参数解释：** 企业项目id信息。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keywordsAlarmRuleName' => null,
        'keywordsAlarmRuleDescription' => null,
        'keywordsRequests' => null,
        'frequency' => null,
        'keywordsAlarmLevel' => null,
        'domainId' => null,
        'triggerConditionCount' => 'int32',
        'triggerConditionFrequency' => 'int32',
        'whetherRecoveryPolicy' => null,
        'recoveryPolicy' => 'int32',
        'notificationFrequency' => 'int32',
        'alarmActionRuleName' => null,
        'tags' => null,
        'enterpriseProjectId' => null
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
    * keywordsAlarmRuleName  关键词告警名称  >不能以点和下划线开头或以点结尾。
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * domainId  domainId
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    * tags  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。 **约束限制：** 不涉及。
    * enterpriseProjectId  **参数解释：** 企业项目id信息。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keywordsAlarmRuleName' => 'keywords_alarm_rule_name',
            'keywordsAlarmRuleDescription' => 'keywords_alarm_rule_description',
            'keywordsRequests' => 'keywords_requests',
            'frequency' => 'frequency',
            'keywordsAlarmLevel' => 'keywords_alarm_level',
            'domainId' => 'domain_id',
            'triggerConditionCount' => 'trigger_condition_count',
            'triggerConditionFrequency' => 'trigger_condition_frequency',
            'whetherRecoveryPolicy' => 'whether_recovery_policy',
            'recoveryPolicy' => 'recovery_policy',
            'notificationFrequency' => 'notification_frequency',
            'alarmActionRuleName' => 'alarm_action_rule_name',
            'tags' => 'tags',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keywordsAlarmRuleName  关键词告警名称  >不能以点和下划线开头或以点结尾。
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * domainId  domainId
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    * tags  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。 **约束限制：** 不涉及。
    * enterpriseProjectId  **参数解释：** 企业项目id信息。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'keywordsAlarmRuleName' => 'setKeywordsAlarmRuleName',
            'keywordsAlarmRuleDescription' => 'setKeywordsAlarmRuleDescription',
            'keywordsRequests' => 'setKeywordsRequests',
            'frequency' => 'setFrequency',
            'keywordsAlarmLevel' => 'setKeywordsAlarmLevel',
            'domainId' => 'setDomainId',
            'triggerConditionCount' => 'setTriggerConditionCount',
            'triggerConditionFrequency' => 'setTriggerConditionFrequency',
            'whetherRecoveryPolicy' => 'setWhetherRecoveryPolicy',
            'recoveryPolicy' => 'setRecoveryPolicy',
            'notificationFrequency' => 'setNotificationFrequency',
            'alarmActionRuleName' => 'setAlarmActionRuleName',
            'tags' => 'setTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keywordsAlarmRuleName  关键词告警名称  >不能以点和下划线开头或以点结尾。
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * domainId  domainId
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    * tags  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。 **约束限制：** 不涉及。
    * enterpriseProjectId  **参数解释：** 企业项目id信息。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'keywordsAlarmRuleName' => 'getKeywordsAlarmRuleName',
            'keywordsAlarmRuleDescription' => 'getKeywordsAlarmRuleDescription',
            'keywordsRequests' => 'getKeywordsRequests',
            'frequency' => 'getFrequency',
            'keywordsAlarmLevel' => 'getKeywordsAlarmLevel',
            'domainId' => 'getDomainId',
            'triggerConditionCount' => 'getTriggerConditionCount',
            'triggerConditionFrequency' => 'getTriggerConditionFrequency',
            'whetherRecoveryPolicy' => 'getWhetherRecoveryPolicy',
            'recoveryPolicy' => 'getRecoveryPolicy',
            'notificationFrequency' => 'getNotificationFrequency',
            'alarmActionRuleName' => 'getAlarmActionRuleName',
            'tags' => 'getTags',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['keywordsAlarmRuleName'] = isset($data['keywordsAlarmRuleName']) ? $data['keywordsAlarmRuleName'] : null;
        $this->container['keywordsAlarmRuleDescription'] = isset($data['keywordsAlarmRuleDescription']) ? $data['keywordsAlarmRuleDescription'] : null;
        $this->container['keywordsRequests'] = isset($data['keywordsRequests']) ? $data['keywordsRequests'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['keywordsAlarmLevel'] = isset($data['keywordsAlarmLevel']) ? $data['keywordsAlarmLevel'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['triggerConditionCount'] = isset($data['triggerConditionCount']) ? $data['triggerConditionCount'] : null;
        $this->container['triggerConditionFrequency'] = isset($data['triggerConditionFrequency']) ? $data['triggerConditionFrequency'] : null;
        $this->container['whetherRecoveryPolicy'] = isset($data['whetherRecoveryPolicy']) ? $data['whetherRecoveryPolicy'] : null;
        $this->container['recoveryPolicy'] = isset($data['recoveryPolicy']) ? $data['recoveryPolicy'] : null;
        $this->container['notificationFrequency'] = isset($data['notificationFrequency']) ? $data['notificationFrequency'] : null;
        $this->container['alarmActionRuleName'] = isset($data['alarmActionRuleName']) ? $data['alarmActionRuleName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keywordsAlarmRuleName'] === null) {
            $invalidProperties[] = "'keywordsAlarmRuleName' can't be null";
        }
            if ((mb_strlen($this->container['keywordsAlarmRuleName']) > 64)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['keywordsAlarmRuleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^((?![\\>+<;#\";&?%=']).)*$/", $this->container['keywordsAlarmRuleName'])) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleName', must be conform to the pattern /^((?![\\>+<;#\";&?%=']).)*$/.";
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
    * Gets keywordsAlarmRuleName
    *  关键词告警名称  >不能以点和下划线开头或以点结尾。
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
    * @param string $keywordsAlarmRuleName 关键词告警名称  >不能以点和下划线开头或以点结尾。
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
    * Gets tags
    *  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。 **约束限制：** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\TagsRequestBody[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\TagsRequestBody[]|null $tags **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释：** 企业项目id信息。 **约束限制：** 不涉及。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释：** 企业项目id信息。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

