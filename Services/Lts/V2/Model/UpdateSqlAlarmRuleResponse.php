<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSqlAlarmRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSqlAlarmRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlAlarmRuleName  SQL告警名称
    * alarmRuleAlias  规则名称
    * isCssSql  是否管道符sql查询
    * projectId  项目id
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    * triggerConditionCount  **参数解释：** 告警触发条件：满足条件次数。满足条件次数是指设置的SQL语句。 **取值范围：** 不涉及。
    * triggerConditionFrequency  **参数解释：** 触发条件：触发周期。 **取值范围：** 不涉及。
    * whetherRecoveryPolicy  **参数解释：** 是否打开恢复通知。 **取值范围：** - true：配置告警恢复策略。 - false：不配置告警恢复策略。
    * recoveryPolicy  **参数解释：** 恢复策略周期。 **取值范围：** 不涉及。
    * tags  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlAlarmRuleName' => 'string',
            'alarmRuleAlias' => 'string',
            'isCssSql' => 'bool',
            'projectId' => 'string',
            'sqlAlarmRuleId' => 'string',
            'sqlAlarmRuleDescription' => 'string',
            'sqlRequests' => '\HuaweiCloud\SDK\Lts\V2\Model\SqlRequestResponse[]',
            'frequency' => '\HuaweiCloud\SDK\Lts\V2\Model\FrequencyRespBody',
            'conditionExpression' => 'string',
            'sqlAlarmLevel' => 'string',
            'sqlAlarmSend' => 'bool',
            'domainId' => 'string',
            'notificationFrequency' => 'int',
            'alarmActionRuleName' => 'string',
            'triggerConditionCount' => 'int',
            'triggerConditionFrequency' => 'int',
            'whetherRecoveryPolicy' => 'bool',
            'recoveryPolicy' => 'int',
            'tags' => '\HuaweiCloud\SDK\Lts\V2\Model\TagsResBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlAlarmRuleName  SQL告警名称
    * alarmRuleAlias  规则名称
    * isCssSql  是否管道符sql查询
    * projectId  项目id
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    * triggerConditionCount  **参数解释：** 告警触发条件：满足条件次数。满足条件次数是指设置的SQL语句。 **取值范围：** 不涉及。
    * triggerConditionFrequency  **参数解释：** 触发条件：触发周期。 **取值范围：** 不涉及。
    * whetherRecoveryPolicy  **参数解释：** 是否打开恢复通知。 **取值范围：** - true：配置告警恢复策略。 - false：不配置告警恢复策略。
    * recoveryPolicy  **参数解释：** 恢复策略周期。 **取值范围：** 不涉及。
    * tags  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlAlarmRuleName' => null,
        'alarmRuleAlias' => null,
        'isCssSql' => null,
        'projectId' => null,
        'sqlAlarmRuleId' => null,
        'sqlAlarmRuleDescription' => null,
        'sqlRequests' => null,
        'frequency' => null,
        'conditionExpression' => null,
        'sqlAlarmLevel' => null,
        'sqlAlarmSend' => null,
        'domainId' => null,
        'notificationFrequency' => 'int32',
        'alarmActionRuleName' => null,
        'triggerConditionCount' => 'int32',
        'triggerConditionFrequency' => 'int32',
        'whetherRecoveryPolicy' => null,
        'recoveryPolicy' => 'int32',
        'tags' => null
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
    * alarmRuleAlias  规则名称
    * isCssSql  是否管道符sql查询
    * projectId  项目id
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    * triggerConditionCount  **参数解释：** 告警触发条件：满足条件次数。满足条件次数是指设置的SQL语句。 **取值范围：** 不涉及。
    * triggerConditionFrequency  **参数解释：** 触发条件：触发周期。 **取值范围：** 不涉及。
    * whetherRecoveryPolicy  **参数解释：** 是否打开恢复通知。 **取值范围：** - true：配置告警恢复策略。 - false：不配置告警恢复策略。
    * recoveryPolicy  **参数解释：** 恢复策略周期。 **取值范围：** 不涉及。
    * tags  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlAlarmRuleName' => 'sql_alarm_rule_name',
            'alarmRuleAlias' => 'alarm_rule_alias',
            'isCssSql' => 'is_css_sql',
            'projectId' => 'projectId',
            'sqlAlarmRuleId' => 'sql_alarm_rule_id',
            'sqlAlarmRuleDescription' => 'sql_alarm_rule_description',
            'sqlRequests' => 'sql_requests',
            'frequency' => 'frequency',
            'conditionExpression' => 'condition_expression',
            'sqlAlarmLevel' => 'sql_alarm_level',
            'sqlAlarmSend' => 'sql_alarm_send',
            'domainId' => 'domain_id',
            'notificationFrequency' => 'notification_frequency',
            'alarmActionRuleName' => 'alarm_action_rule_name',
            'triggerConditionCount' => 'trigger_condition_count',
            'triggerConditionFrequency' => 'trigger_condition_frequency',
            'whetherRecoveryPolicy' => 'whether_recovery_policy',
            'recoveryPolicy' => 'recovery_policy',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlAlarmRuleName  SQL告警名称
    * alarmRuleAlias  规则名称
    * isCssSql  是否管道符sql查询
    * projectId  项目id
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    * triggerConditionCount  **参数解释：** 告警触发条件：满足条件次数。满足条件次数是指设置的SQL语句。 **取值范围：** 不涉及。
    * triggerConditionFrequency  **参数解释：** 触发条件：触发周期。 **取值范围：** 不涉及。
    * whetherRecoveryPolicy  **参数解释：** 是否打开恢复通知。 **取值范围：** - true：配置告警恢复策略。 - false：不配置告警恢复策略。
    * recoveryPolicy  **参数解释：** 恢复策略周期。 **取值范围：** 不涉及。
    * tags  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlAlarmRuleName' => 'setSqlAlarmRuleName',
            'alarmRuleAlias' => 'setAlarmRuleAlias',
            'isCssSql' => 'setIsCssSql',
            'projectId' => 'setProjectId',
            'sqlAlarmRuleId' => 'setSqlAlarmRuleId',
            'sqlAlarmRuleDescription' => 'setSqlAlarmRuleDescription',
            'sqlRequests' => 'setSqlRequests',
            'frequency' => 'setFrequency',
            'conditionExpression' => 'setConditionExpression',
            'sqlAlarmLevel' => 'setSqlAlarmLevel',
            'sqlAlarmSend' => 'setSqlAlarmSend',
            'domainId' => 'setDomainId',
            'notificationFrequency' => 'setNotificationFrequency',
            'alarmActionRuleName' => 'setAlarmActionRuleName',
            'triggerConditionCount' => 'setTriggerConditionCount',
            'triggerConditionFrequency' => 'setTriggerConditionFrequency',
            'whetherRecoveryPolicy' => 'setWhetherRecoveryPolicy',
            'recoveryPolicy' => 'setRecoveryPolicy',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlAlarmRuleName  SQL告警名称
    * alarmRuleAlias  规则名称
    * isCssSql  是否管道符sql查询
    * projectId  项目id
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    * triggerConditionCount  **参数解释：** 告警触发条件：满足条件次数。满足条件次数是指设置的SQL语句。 **取值范围：** 不涉及。
    * triggerConditionFrequency  **参数解释：** 触发条件：触发周期。 **取值范围：** 不涉及。
    * whetherRecoveryPolicy  **参数解释：** 是否打开恢复通知。 **取值范围：** - true：配置告警恢复策略。 - false：不配置告警恢复策略。
    * recoveryPolicy  **参数解释：** 恢复策略周期。 **取值范围：** 不涉及。
    * tags  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlAlarmRuleName' => 'getSqlAlarmRuleName',
            'alarmRuleAlias' => 'getAlarmRuleAlias',
            'isCssSql' => 'getIsCssSql',
            'projectId' => 'getProjectId',
            'sqlAlarmRuleId' => 'getSqlAlarmRuleId',
            'sqlAlarmRuleDescription' => 'getSqlAlarmRuleDescription',
            'sqlRequests' => 'getSqlRequests',
            'frequency' => 'getFrequency',
            'conditionExpression' => 'getConditionExpression',
            'sqlAlarmLevel' => 'getSqlAlarmLevel',
            'sqlAlarmSend' => 'getSqlAlarmSend',
            'domainId' => 'getDomainId',
            'notificationFrequency' => 'getNotificationFrequency',
            'alarmActionRuleName' => 'getAlarmActionRuleName',
            'triggerConditionCount' => 'getTriggerConditionCount',
            'triggerConditionFrequency' => 'getTriggerConditionFrequency',
            'whetherRecoveryPolicy' => 'getWhetherRecoveryPolicy',
            'recoveryPolicy' => 'getRecoveryPolicy',
            'tags' => 'getTags'
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
    const SQL_ALARM_LEVEL_CRITICAL = 'CRITICAL';
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
        $this->container['alarmRuleAlias'] = isset($data['alarmRuleAlias']) ? $data['alarmRuleAlias'] : null;
        $this->container['isCssSql'] = isset($data['isCssSql']) ? $data['isCssSql'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['sqlAlarmRuleId'] = isset($data['sqlAlarmRuleId']) ? $data['sqlAlarmRuleId'] : null;
        $this->container['sqlAlarmRuleDescription'] = isset($data['sqlAlarmRuleDescription']) ? $data['sqlAlarmRuleDescription'] : null;
        $this->container['sqlRequests'] = isset($data['sqlRequests']) ? $data['sqlRequests'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['conditionExpression'] = isset($data['conditionExpression']) ? $data['conditionExpression'] : null;
        $this->container['sqlAlarmLevel'] = isset($data['sqlAlarmLevel']) ? $data['sqlAlarmLevel'] : null;
        $this->container['sqlAlarmSend'] = isset($data['sqlAlarmSend']) ? $data['sqlAlarmSend'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['notificationFrequency'] = isset($data['notificationFrequency']) ? $data['notificationFrequency'] : null;
        $this->container['alarmActionRuleName'] = isset($data['alarmActionRuleName']) ? $data['alarmActionRuleName'] : null;
        $this->container['triggerConditionCount'] = isset($data['triggerConditionCount']) ? $data['triggerConditionCount'] : null;
        $this->container['triggerConditionFrequency'] = isset($data['triggerConditionFrequency']) ? $data['triggerConditionFrequency'] : null;
        $this->container['whetherRecoveryPolicy'] = isset($data['whetherRecoveryPolicy']) ? $data['whetherRecoveryPolicy'] : null;
        $this->container['recoveryPolicy'] = isset($data['recoveryPolicy']) ? $data['recoveryPolicy'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['alarmRuleAlias']) && (mb_strlen($this->container['alarmRuleAlias']) > 64)) {
                $invalidProperties[] = "invalid value for 'alarmRuleAlias', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['alarmRuleAlias']) && (mb_strlen($this->container['alarmRuleAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'alarmRuleAlias', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sqlAlarmRuleId']) && (mb_strlen($this->container['sqlAlarmRuleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sqlAlarmRuleId']) && (mb_strlen($this->container['sqlAlarmRuleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['sqlAlarmRuleDescription']) && (mb_strlen($this->container['sqlAlarmRuleDescription']) > 64)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleDescription', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sqlAlarmRuleDescription']) && (mb_strlen($this->container['sqlAlarmRuleDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['conditionExpression']) && (mb_strlen($this->container['conditionExpression']) > 1024)) {
                $invalidProperties[] = "invalid value for 'conditionExpression', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['conditionExpression']) && (mb_strlen($this->container['conditionExpression']) < 1)) {
                $invalidProperties[] = "invalid value for 'conditionExpression', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSqlAlarmLevelAllowableValues();
                if (!is_null($this->container['sqlAlarmLevel']) && !in_array($this->container['sqlAlarmLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sqlAlarmLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
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
    * @return string|null
    */
    public function getSqlAlarmRuleName()
    {
        return $this->container['sqlAlarmRuleName'];
    }

    /**
    * Sets sqlAlarmRuleName
    *
    * @param string|null $sqlAlarmRuleName SQL告警名称
    *
    * @return $this
    */
    public function setSqlAlarmRuleName($sqlAlarmRuleName)
    {
        $this->container['sqlAlarmRuleName'] = $sqlAlarmRuleName;
        return $this;
    }

    /**
    * Gets alarmRuleAlias
    *  规则名称
    *
    * @return string|null
    */
    public function getAlarmRuleAlias()
    {
        return $this->container['alarmRuleAlias'];
    }

    /**
    * Sets alarmRuleAlias
    *
    * @param string|null $alarmRuleAlias 规则名称
    *
    * @return $this
    */
    public function setAlarmRuleAlias($alarmRuleAlias)
    {
        $this->container['alarmRuleAlias'] = $alarmRuleAlias;
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
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets sqlAlarmRuleId
    *  SQL告警规则id
    *
    * @return string|null
    */
    public function getSqlAlarmRuleId()
    {
        return $this->container['sqlAlarmRuleId'];
    }

    /**
    * Sets sqlAlarmRuleId
    *
    * @param string|null $sqlAlarmRuleId SQL告警规则id
    *
    * @return $this
    */
    public function setSqlAlarmRuleId($sqlAlarmRuleId)
    {
        $this->container['sqlAlarmRuleId'] = $sqlAlarmRuleId;
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
    * @return \HuaweiCloud\SDK\Lts\V2\Model\SqlRequestResponse[]|null
    */
    public function getSqlRequests()
    {
        return $this->container['sqlRequests'];
    }

    /**
    * Sets sqlRequests
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\SqlRequestResponse[]|null $sqlRequests SQL详细信息
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
    * @return \HuaweiCloud\SDK\Lts\V2\Model\FrequencyRespBody|null
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\FrequencyRespBody|null $frequency frequency
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
    * @return string|null
    */
    public function getConditionExpression()
    {
        return $this->container['conditionExpression'];
    }

    /**
    * Sets conditionExpression
    *
    * @param string|null $conditionExpression 条件表达式
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
    * @return string|null
    */
    public function getSqlAlarmLevel()
    {
        return $this->container['sqlAlarmLevel'];
    }

    /**
    * Sets sqlAlarmLevel
    *
    * @param string|null $sqlAlarmLevel 告警级别
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
    * @return bool|null
    */
    public function getSqlAlarmSend()
    {
        return $this->container['sqlAlarmSend'];
    }

    /**
    * Sets sqlAlarmSend
    *
    * @param bool|null $sqlAlarmSend 是否发送
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
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId domainId
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets notificationFrequency
    *  通知频率,单位(分钟)
    *
    * @return int|null
    */
    public function getNotificationFrequency()
    {
        return $this->container['notificationFrequency'];
    }

    /**
    * Sets notificationFrequency
    *
    * @param int|null $notificationFrequency 通知频率,单位(分钟)
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
    * Gets triggerConditionCount
    *  **参数解释：** 告警触发条件：满足条件次数。满足条件次数是指设置的SQL语句。 **取值范围：** 不涉及。
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
    * @param int|null $triggerConditionCount **参数解释：** 告警触发条件：满足条件次数。满足条件次数是指设置的SQL语句。 **取值范围：** 不涉及。
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
    *  **参数解释：** 触发条件：触发周期。 **取值范围：** 不涉及。
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
    * @param int|null $triggerConditionFrequency **参数解释：** 触发条件：触发周期。 **取值范围：** 不涉及。
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
    *  **参数解释：** 是否打开恢复通知。 **取值范围：** - true：配置告警恢复策略。 - false：不配置告警恢复策略。
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
    * @param bool|null $whetherRecoveryPolicy **参数解释：** 是否打开恢复通知。 **取值范围：** - true：配置告警恢复策略。 - false：不配置告警恢复策略。
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
    *  **参数解释：** 恢复策略周期。 **取值范围：** 不涉及。
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
    * @param int|null $recoveryPolicy **参数解释：** 恢复策略周期。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setRecoveryPolicy($recoveryPolicy)
    {
        $this->container['recoveryPolicy'] = $recoveryPolicy;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\TagsResBody[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\TagsResBody[]|null $tags **参数解释：** 告警标签信息。标签是以键值对（key-value）的形式表示，key和value为一一对应关系。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

