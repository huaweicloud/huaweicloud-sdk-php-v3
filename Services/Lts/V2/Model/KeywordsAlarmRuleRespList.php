<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class KeywordsAlarmRuleRespList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'KeywordsAlarmRuleRespList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id
    * keywordsAlarmRuleId  关键词告警id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * conditionExpression  条件
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * topics  主题
    * templateName  templateName
    * status  status
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'keywordsAlarmRuleId' => 'string',
            'keywordsAlarmRuleName' => 'string',
            'keywordsAlarmRuleDescription' => 'string',
            'conditionExpression' => 'string',
            'keywordsRequests' => '\HuaweiCloud\SDK\Lts\V2\Model\KeywordsRequest[]',
            'frequency' => '\HuaweiCloud\SDK\Lts\V2\Model\Frequency',
            'keywordsAlarmLevel' => 'string',
            'keywordsAlarmSend' => 'bool',
            'domainId' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'topics' => '\HuaweiCloud\SDK\Lts\V2\Model\Topics[]',
            'templateName' => 'string',
            'status' => 'string',
            'triggerConditionCount' => 'int',
            'triggerConditionFrequency' => 'int',
            'whetherRecoveryPolicy' => 'bool',
            'recoveryPolicy' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id
    * keywordsAlarmRuleId  关键词告警id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * conditionExpression  条件
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * topics  主题
    * templateName  templateName
    * status  status
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'keywordsAlarmRuleId' => null,
        'keywordsAlarmRuleName' => null,
        'keywordsAlarmRuleDescription' => null,
        'conditionExpression' => null,
        'keywordsRequests' => null,
        'frequency' => null,
        'keywordsAlarmLevel' => null,
        'keywordsAlarmSend' => null,
        'domainId' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'topics' => null,
        'templateName' => null,
        'status' => null,
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
    * projectId  项目id
    * keywordsAlarmRuleId  关键词告警id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * conditionExpression  条件
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * topics  主题
    * templateName  templateName
    * status  status
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'projectId',
            'keywordsAlarmRuleId' => 'keywords_alarm_rule_id',
            'keywordsAlarmRuleName' => 'keywords_alarm_rule_name',
            'keywordsAlarmRuleDescription' => 'keywords_alarm_rule_description',
            'conditionExpression' => 'condition_expression',
            'keywordsRequests' => 'keywords_requests',
            'frequency' => 'frequency',
            'keywordsAlarmLevel' => 'keywords_alarm_level',
            'keywordsAlarmSend' => 'keywords_alarm_send',
            'domainId' => 'domain_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'topics' => 'topics',
            'templateName' => 'template_name',
            'status' => 'status',
            'triggerConditionCount' => 'trigger_condition_count',
            'triggerConditionFrequency' => 'trigger_condition_frequency',
            'whetherRecoveryPolicy' => 'whether_recovery_policy',
            'recoveryPolicy' => 'recovery_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id
    * keywordsAlarmRuleId  关键词告警id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * conditionExpression  条件
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * topics  主题
    * templateName  templateName
    * status  status
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'keywordsAlarmRuleId' => 'setKeywordsAlarmRuleId',
            'keywordsAlarmRuleName' => 'setKeywordsAlarmRuleName',
            'keywordsAlarmRuleDescription' => 'setKeywordsAlarmRuleDescription',
            'conditionExpression' => 'setConditionExpression',
            'keywordsRequests' => 'setKeywordsRequests',
            'frequency' => 'setFrequency',
            'keywordsAlarmLevel' => 'setKeywordsAlarmLevel',
            'keywordsAlarmSend' => 'setKeywordsAlarmSend',
            'domainId' => 'setDomainId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'topics' => 'setTopics',
            'templateName' => 'setTemplateName',
            'status' => 'setStatus',
            'triggerConditionCount' => 'setTriggerConditionCount',
            'triggerConditionFrequency' => 'setTriggerConditionFrequency',
            'whetherRecoveryPolicy' => 'setWhetherRecoveryPolicy',
            'recoveryPolicy' => 'setRecoveryPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id
    * keywordsAlarmRuleId  关键词告警id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * conditionExpression  条件
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * topics  主题
    * templateName  templateName
    * status  status
    * triggerConditionCount  触发条件：触发次数;默认为1
    * triggerConditionFrequency  触发条件：触发周期;默认为1
    * whetherRecoveryPolicy  是否打开恢复通知;默认false
    * recoveryPolicy  恢复策略周期;默认为3
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'keywordsAlarmRuleId' => 'getKeywordsAlarmRuleId',
            'keywordsAlarmRuleName' => 'getKeywordsAlarmRuleName',
            'keywordsAlarmRuleDescription' => 'getKeywordsAlarmRuleDescription',
            'conditionExpression' => 'getConditionExpression',
            'keywordsRequests' => 'getKeywordsRequests',
            'frequency' => 'getFrequency',
            'keywordsAlarmLevel' => 'getKeywordsAlarmLevel',
            'keywordsAlarmSend' => 'getKeywordsAlarmSend',
            'domainId' => 'getDomainId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'topics' => 'getTopics',
            'templateName' => 'getTemplateName',
            'status' => 'getStatus',
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
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_STOPPING = 'STOPPING';
    

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
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_RUNNING,
            self::STATUS_STOPPING,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['keywordsAlarmRuleId'] = isset($data['keywordsAlarmRuleId']) ? $data['keywordsAlarmRuleId'] : null;
        $this->container['keywordsAlarmRuleName'] = isset($data['keywordsAlarmRuleName']) ? $data['keywordsAlarmRuleName'] : null;
        $this->container['keywordsAlarmRuleDescription'] = isset($data['keywordsAlarmRuleDescription']) ? $data['keywordsAlarmRuleDescription'] : null;
        $this->container['conditionExpression'] = isset($data['conditionExpression']) ? $data['conditionExpression'] : null;
        $this->container['keywordsRequests'] = isset($data['keywordsRequests']) ? $data['keywordsRequests'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : null;
        $this->container['keywordsAlarmLevel'] = isset($data['keywordsAlarmLevel']) ? $data['keywordsAlarmLevel'] : null;
        $this->container['keywordsAlarmSend'] = isset($data['keywordsAlarmSend']) ? $data['keywordsAlarmSend'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
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
        if ($this->container['keywordsAlarmRuleDescription'] === null) {
            $invalidProperties[] = "'keywordsAlarmRuleDescription' can't be null";
        }
            if ((mb_strlen($this->container['keywordsAlarmRuleDescription']) > 64)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleDescription', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['keywordsAlarmRuleDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleDescription', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['conditionExpression'] === null) {
            $invalidProperties[] = "'conditionExpression' can't be null";
        }
            if ((mb_strlen($this->container['conditionExpression']) > 64)) {
                $invalidProperties[] = "invalid value for 'conditionExpression', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['conditionExpression']) < 0)) {
                $invalidProperties[] = "invalid value for 'conditionExpression', the character length must be bigger than or equal to 0.";
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
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
        if ($this->container['topics'] === null) {
            $invalidProperties[] = "'topics' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets projectId
    *  项目id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets keywordsAlarmRuleId
    *  关键词告警id
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
    * @param string $keywordsAlarmRuleId 关键词告警id
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
    * @return string
    */
    public function getKeywordsAlarmRuleDescription()
    {
        return $this->container['keywordsAlarmRuleDescription'];
    }

    /**
    * Sets keywordsAlarmRuleDescription
    *
    * @param string $keywordsAlarmRuleDescription 关键词告警信息描述
    *
    * @return $this
    */
    public function setKeywordsAlarmRuleDescription($keywordsAlarmRuleDescription)
    {
        $this->container['keywordsAlarmRuleDescription'] = $keywordsAlarmRuleDescription;
        return $this;
    }

    /**
    * Gets conditionExpression
    *  条件
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
    * @param string $conditionExpression 条件
    *
    * @return $this
    */
    public function setConditionExpression($conditionExpression)
    {
        $this->container['conditionExpression'] = $conditionExpression;
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
    * Gets createTime
    *  创建时间(毫秒时间戳)
    *
    * @return int
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int $createTime 创建时间(毫秒时间戳)
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
    *  更新时间(毫秒时间戳)
    *
    * @return int
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int $updateTime 更新时间(毫秒时间戳)
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
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Topics[]
    */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
    * Sets topics
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Topics[] $topics 主题
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
        return $this;
    }

    /**
    * Gets templateName
    *  templateName
    *
    * @return string|null
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string|null $templateName templateName
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

