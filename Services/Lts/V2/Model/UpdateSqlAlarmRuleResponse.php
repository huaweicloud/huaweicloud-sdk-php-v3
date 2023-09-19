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
    * id  测试
    * indexId  测试
    * language  测试
    * projectId  测试
    * sqlAlarmRuleName  SQL告警名称
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * topics  主题
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'indexId' => 'string',
            'language' => 'string',
            'projectId' => 'string',
            'sqlAlarmRuleName' => 'string',
            'sqlAlarmRuleId' => 'string',
            'sqlAlarmRuleDescription' => 'string',
            'sqlRequests' => '\HuaweiCloud\SDK\Lts\V2\Model\SqlRequest[]',
            'frequency' => '\HuaweiCloud\SDK\Lts\V2\Model\Frequency',
            'conditionExpression' => 'string',
            'sqlAlarmLevel' => 'string',
            'sqlAlarmSend' => 'bool',
            'domainId' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'topics' => '\HuaweiCloud\SDK\Lts\V2\Model\Topics[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  测试
    * indexId  测试
    * language  测试
    * projectId  测试
    * sqlAlarmRuleName  SQL告警名称
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * topics  主题
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'indexId' => null,
        'language' => null,
        'projectId' => null,
        'sqlAlarmRuleName' => null,
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
        'topics' => null
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
    * id  测试
    * indexId  测试
    * language  测试
    * projectId  测试
    * sqlAlarmRuleName  SQL告警名称
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * topics  主题
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'indexId' => 'indexId',
            'language' => 'language',
            'projectId' => 'projectId',
            'sqlAlarmRuleName' => 'sql_alarm_rule_name',
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
            'topics' => 'topics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  测试
    * indexId  测试
    * language  测试
    * projectId  测试
    * sqlAlarmRuleName  SQL告警名称
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * topics  主题
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'indexId' => 'setIndexId',
            'language' => 'setLanguage',
            'projectId' => 'setProjectId',
            'sqlAlarmRuleName' => 'setSqlAlarmRuleName',
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
            'topics' => 'setTopics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  测试
    * indexId  测试
    * language  测试
    * projectId  测试
    * sqlAlarmRuleName  SQL告警名称
    * sqlAlarmRuleId  SQL告警规则id
    * sqlAlarmRuleDescription  SQL告警信息描述
    * sqlRequests  SQL详细信息
    * frequency  frequency
    * conditionExpression  条件表达式
    * sqlAlarmLevel  告警级别
    * sqlAlarmSend  是否发送
    * domainId  domainId
    * createTime  创建时间(毫秒时间戳)
    * updateTime  更新时间(毫秒时间戳)
    * topics  主题
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'indexId' => 'getIndexId',
            'language' => 'getLanguage',
            'projectId' => 'getProjectId',
            'sqlAlarmRuleName' => 'getSqlAlarmRuleName',
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
            'topics' => 'getTopics'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['indexId'] = isset($data['indexId']) ? $data['indexId'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['sqlAlarmRuleName'] = isset($data['sqlAlarmRuleName']) ? $data['sqlAlarmRuleName'] : null;
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
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 1024)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['indexId']) && (mb_strlen($this->container['indexId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'indexId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['indexId']) && (mb_strlen($this->container['indexId']) < 1)) {
                $invalidProperties[] = "invalid value for 'indexId', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['sqlAlarmRuleName']) && (mb_strlen($this->container['sqlAlarmRuleName']) > 64)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sqlAlarmRuleName']) && (mb_strlen($this->container['sqlAlarmRuleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'sqlAlarmRuleName', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  测试
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
    * @param string|null $id 测试
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets indexId
    *  测试
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
    * @param string|null $indexId 测试
    *
    * @return $this
    */
    public function setIndexId($indexId)
    {
        $this->container['indexId'] = $indexId;
        return $this;
    }

    /**
    * Gets language
    *  测试
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
    * @param string|null $language 测试
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
    *  测试
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
    * @param string|null $projectId 测试
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
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

