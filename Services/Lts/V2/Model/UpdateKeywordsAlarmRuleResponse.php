<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateKeywordsAlarmRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateKeywordsAlarmRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keywordsAlarmRuleId  关键词告警id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * language  语言
    * projectId  项目id
    * topics  主题信息
    * conditionExpression  暂无
    * indexId  暂无
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keywordsAlarmRuleId' => 'string',
            'keywordsAlarmRuleName' => 'string',
            'keywordsAlarmRuleDescription' => 'string',
            'keywordsRequests' => '\HuaweiCloud\SDK\Lts\V2\Model\KeywordsRequest[]',
            'frequency' => '\HuaweiCloud\SDK\Lts\V2\Model\Frequency',
            'keywordsAlarmLevel' => 'string',
            'keywordsAlarmSend' => 'bool',
            'domainId' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'language' => 'string',
            'projectId' => 'string',
            'topics' => '\HuaweiCloud\SDK\Lts\V2\Model\Topics[]',
            'conditionExpression' => 'string',
            'indexId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keywordsAlarmRuleId  关键词告警id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * language  语言
    * projectId  项目id
    * topics  主题信息
    * conditionExpression  暂无
    * indexId  暂无
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
        'domainId' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'language' => null,
        'projectId' => null,
        'topics' => null,
        'conditionExpression' => null,
        'indexId' => null
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
    * keywordsAlarmRuleId  关键词告警id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * language  语言
    * projectId  项目id
    * topics  主题信息
    * conditionExpression  暂无
    * indexId  暂无
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
            'domainId' => 'domain_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'language' => 'language',
            'projectId' => 'projectId',
            'topics' => 'topics',
            'conditionExpression' => 'condition_expression',
            'indexId' => 'indexId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keywordsAlarmRuleId  关键词告警id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * language  语言
    * projectId  项目id
    * topics  主题信息
    * conditionExpression  暂无
    * indexId  暂无
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
            'domainId' => 'setDomainId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'language' => 'setLanguage',
            'projectId' => 'setProjectId',
            'topics' => 'setTopics',
            'conditionExpression' => 'setConditionExpression',
            'indexId' => 'setIndexId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keywordsAlarmRuleId  关键词告警id
    * keywordsAlarmRuleName  关键词告警名称
    * keywordsAlarmRuleDescription  关键词告警信息描述
    * keywordsRequests  关键词详细信息
    * frequency  frequency
    * keywordsAlarmLevel  告警级别
    * keywordsAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * language  语言
    * projectId  项目id
    * topics  主题信息
    * conditionExpression  暂无
    * indexId  暂无
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
            'domainId' => 'getDomainId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'language' => 'getLanguage',
            'projectId' => 'getProjectId',
            'topics' => 'getTopics',
            'conditionExpression' => 'getConditionExpression',
            'indexId' => 'getIndexId'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['topics'] = isset($data['topics']) ? $data['topics'] : null;
        $this->container['conditionExpression'] = isset($data['conditionExpression']) ? $data['conditionExpression'] : null;
        $this->container['indexId'] = isset($data['indexId']) ? $data['indexId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['keywordsAlarmRuleId']) && (mb_strlen($this->container['keywordsAlarmRuleId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['keywordsAlarmRuleId']) && (mb_strlen($this->container['keywordsAlarmRuleId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['keywordsAlarmRuleName']) && (mb_strlen($this->container['keywordsAlarmRuleName']) > 64)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['keywordsAlarmRuleName']) && (mb_strlen($this->container['keywordsAlarmRuleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['keywordsAlarmRuleDescription']) && (mb_strlen($this->container['keywordsAlarmRuleDescription']) > 64)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleDescription', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['keywordsAlarmRuleDescription']) && (mb_strlen($this->container['keywordsAlarmRuleDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'keywordsAlarmRuleDescription', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getKeywordsAlarmLevelAllowableValues();
                if (!is_null($this->container['keywordsAlarmLevel']) && !in_array($this->container['keywordsAlarmLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'keywordsAlarmLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) > 1024)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['language']) && (mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['conditionExpression']) && (mb_strlen($this->container['conditionExpression']) > 1024)) {
                $invalidProperties[] = "invalid value for 'conditionExpression', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['conditionExpression']) && (mb_strlen($this->container['conditionExpression']) < 1)) {
                $invalidProperties[] = "invalid value for 'conditionExpression', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['indexId']) && (mb_strlen($this->container['indexId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'indexId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['indexId']) && (mb_strlen($this->container['indexId']) < 1)) {
                $invalidProperties[] = "invalid value for 'indexId', the character length must be bigger than or equal to 1.";
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
    *  关键词告警id
    *
    * @return string|null
    */
    public function getKeywordsAlarmRuleId()
    {
        return $this->container['keywordsAlarmRuleId'];
    }

    /**
    * Sets keywordsAlarmRuleId
    *
    * @param string|null $keywordsAlarmRuleId 关键词告警id
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
    * @return string|null
    */
    public function getKeywordsAlarmRuleName()
    {
        return $this->container['keywordsAlarmRuleName'];
    }

    /**
    * Sets keywordsAlarmRuleName
    *
    * @param string|null $keywordsAlarmRuleName 关键词告警名称
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
    * @return \HuaweiCloud\SDK\Lts\V2\Model\KeywordsRequest[]|null
    */
    public function getKeywordsRequests()
    {
        return $this->container['keywordsRequests'];
    }

    /**
    * Sets keywordsRequests
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\KeywordsRequest[]|null $keywordsRequests 关键词详细信息
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
    * @return \HuaweiCloud\SDK\Lts\V2\Model\Frequency|null
    */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
    * Sets frequency
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Frequency|null $frequency frequency
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
    * @return string|null
    */
    public function getKeywordsAlarmLevel()
    {
        return $this->container['keywordsAlarmLevel'];
    }

    /**
    * Sets keywordsAlarmLevel
    *
    * @param string|null $keywordsAlarmLevel 告警级别
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
    * @return bool|null
    */
    public function getKeywordsAlarmSend()
    {
        return $this->container['keywordsAlarmSend'];
    }

    /**
    * Sets keywordsAlarmSend
    *
    * @param bool|null $keywordsAlarmSend 是否发送
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
    *  创建时间(毫秒时间戳)
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
    * @param int|null $createTime 创建时间(毫秒时间戳)
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
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间(毫秒时间戳)
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets language
    *  语言
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
    * @param string|null $language 语言
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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
    * Gets topics
    *  主题信息
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
    * @param \HuaweiCloud\SDK\Lts\V2\Model\Topics[]|null $topics 主题信息
    *
    * @return $this
    */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;
        return $this;
    }

    /**
    * Gets conditionExpression
    *  暂无
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
    * @param string|null $conditionExpression 暂无
    *
    * @return $this
    */
    public function setConditionExpression($conditionExpression)
    {
        $this->container['conditionExpression'] = $conditionExpression;
        return $this;
    }

    /**
    * Gets indexId
    *  暂无
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
    * @param string|null $indexId 暂无
    *
    * @return $this
    */
    public function setIndexId($indexId)
    {
        $this->container['indexId'] = $indexId;
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

