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
    * isCssSql  是否管道符sql查询
    * indexId  索引id
    * projectId  项目id
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间（毫秒时间戳）
    * updateTime  更新时间（毫秒时间戳）
    * topics  主题
    * language  邮件附加信息语言
    * id  规则ID。
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlAlarmRuleName' => 'string',
            'isCssSql' => 'bool',
            'indexId' => 'string',
            'projectId' => 'string',
            'sqlAlarmRuleId' => 'string',
            'sqlAlarmRuleDescription' => 'string',
            'sqlRequests' => '\HuaweiCloud\SDK\Lts\V2\Model\SqlRequest[]',
            'frequency' => '\HuaweiCloud\SDK\Lts\V2\Model\FrequencyRespBody',
            'conditionExpression' => 'string',
            'sqlAlarmLevel' => 'string',
            'sqlAlarmSend' => 'bool',
            'domainId' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'topics' => '\HuaweiCloud\SDK\Lts\V2\Model\Topics[]',
            'language' => 'string',
            'id' => 'string',
            'notificationFrequency' => 'int',
            'alarmActionRuleName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlAlarmRuleName  SQL告警名称
    * isCssSql  是否管道符sql查询
    * indexId  索引id
    * projectId  项目id
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间（毫秒时间戳）
    * updateTime  更新时间（毫秒时间戳）
    * topics  主题
    * language  邮件附加信息语言
    * id  规则ID。
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlAlarmRuleName' => null,
        'isCssSql' => null,
        'indexId' => null,
        'projectId' => null,
        'sqlAlarmRuleId' => null,
        'sqlAlarmRuleDescription' => null,
        'sqlRequests' => null,
        'frequency' => null,
        'conditionExpression' => null,
        'sqlAlarmLevel' => null,
        'sqlAlarmSend' => null,
        'domainId' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'topics' => null,
        'language' => null,
        'id' => null,
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
    * indexId  索引id
    * projectId  项目id
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间（毫秒时间戳）
    * updateTime  更新时间（毫秒时间戳）
    * topics  主题
    * language  邮件附加信息语言
    * id  规则ID。
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlAlarmRuleName' => 'sql_alarm_rule_name',
            'isCssSql' => 'is_css_sql',
            'indexId' => 'indexId',
            'projectId' => 'projectId',
            'sqlAlarmRuleId' => 'sql_alarm_rule_id',
            'sqlAlarmRuleDescription' => 'sql_alarm_rule_description',
            'sqlRequests' => 'sql_requests',
            'frequency' => 'frequency',
            'conditionExpression' => 'condition_expression',
            'sqlAlarmLevel' => 'sql_alarm_level',
            'sqlAlarmSend' => 'sql_alarm_send',
            'domainId' => 'domain_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'topics' => 'topics',
            'language' => 'language',
            'id' => 'id',
            'notificationFrequency' => 'notification_frequency',
            'alarmActionRuleName' => 'alarm_action_rule_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlAlarmRuleName  SQL告警名称
    * isCssSql  是否管道符sql查询
    * indexId  索引id
    * projectId  项目id
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间（毫秒时间戳）
    * updateTime  更新时间（毫秒时间戳）
    * topics  主题
    * language  邮件附加信息语言
    * id  规则ID。
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlAlarmRuleName' => 'setSqlAlarmRuleName',
            'isCssSql' => 'setIsCssSql',
            'indexId' => 'setIndexId',
            'projectId' => 'setProjectId',
            'sqlAlarmRuleId' => 'setSqlAlarmRuleId',
            'sqlAlarmRuleDescription' => 'setSqlAlarmRuleDescription',
            'sqlRequests' => 'setSqlRequests',
            'frequency' => 'setFrequency',
            'conditionExpression' => 'setConditionExpression',
            'sqlAlarmLevel' => 'setSqlAlarmLevel',
            'sqlAlarmSend' => 'setSqlAlarmSend',
            'domainId' => 'setDomainId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'topics' => 'setTopics',
            'language' => 'setLanguage',
            'id' => 'setId',
            'notificationFrequency' => 'setNotificationFrequency',
            'alarmActionRuleName' => 'setAlarmActionRuleName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlAlarmRuleName  SQL告警名称
    * isCssSql  是否管道符sql查询
    * indexId  索引id
    * projectId  项目id
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间（毫秒时间戳）
    * updateTime  更新时间（毫秒时间戳）
    * topics  主题
    * language  邮件附加信息语言
    * id  规则ID。
    * notificationFrequency  通知频率,单位(分钟)
    * alarmActionRuleName  告警行动规则名称 >alarm_action_rule_name和notification_save_rule可以选填一个，如果都填，优先选择alarm_action_rule_name
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlAlarmRuleName' => 'getSqlAlarmRuleName',
            'isCssSql' => 'getIsCssSql',
            'indexId' => 'getIndexId',
            'projectId' => 'getProjectId',
            'sqlAlarmRuleId' => 'getSqlAlarmRuleId',
            'sqlAlarmRuleDescription' => 'getSqlAlarmRuleDescription',
            'sqlRequests' => 'getSqlRequests',
            'frequency' => 'getFrequency',
            'conditionExpression' => 'getConditionExpression',
            'sqlAlarmLevel' => 'getSqlAlarmLevel',
            'sqlAlarmSend' => 'getSqlAlarmSend',
            'domainId' => 'getDomainId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'topics' => 'getTopics',
            'language' => 'getLanguage',
            'id' => 'getId',
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
    const SQL_ALARM_LEVEL_CRITICAL = 'CRITICAL';
    const LANGUAGE_ZH_CN = 'zh-cn';
    const LANGUAGE_EN_US = 'en-us';
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
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_ZH_CN,
            self::LANGUAGE_EN_US,
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
        $this->container['indexId'] = isset($data['indexId']) ? $data['indexId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['sqlAlarmRuleId'] = isset($data['sqlAlarmRuleId']) ? $data['sqlAlarmRuleId'] : null;
        $this->container['sqlAlarmRuleDescription'] = isset($data['sqlAlarmRuleDescription']) ? $data['sqlAlarmRuleDescription'] : null;
        $this->container['sqlRequests'] = isset($data['sqlRequests']) ? $data['sqlRequests'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['conditionExpression'] = isset($data['conditionExpression']) ? $data['conditionExpression'] : null;
        $this->container['sqlAlarmLevel'] = isset($data['sqlAlarmLevel']) ? $data['sqlAlarmLevel'] : null;
        $this->container['sqlAlarmSend'] = isset($data['sqlAlarmSend']) ? $data['sqlAlarmSend'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 13)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 13.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 13)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 13.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 13)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 13.";
            }
            $allowedValues = $this->getLanguageAllowableValues();
                if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets indexId
    *  索引id
    *
    * @return string|null
    */
    public function getIndexId()
    {
        return $this->container['indexId'];
    }

    /**
    * Sets indexId
    *
    * @param string|null $indexId 索引id
    *
    * @return $this
    */
    public function setIndexId($indexId)
    {
        $this->container['indexId'] = $indexId;
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
    * @return \HuaweiCloud\SDK\Lts\V2\Model\SqlRequest[]|null
    */
    public function getSqlRequests()
    {
        return $this->container['sqlRequests'];
    }

    /**
    * Sets sqlRequests
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\SqlRequest[]|null $sqlRequests SQL详细信息
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
    * Gets createTime
    *  创建时间（毫秒时间戳）
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间（毫秒时间戳）
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间（毫秒时间戳）
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间（毫秒时间戳）
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets topics
    *  主题
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Topics[]|null
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Topics[]|null $topics 主题
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
        return $this;
    }

    /**
    * Gets language
    *  邮件附加信息语言
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language 邮件附加信息语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets id
    *  规则ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 规则ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

