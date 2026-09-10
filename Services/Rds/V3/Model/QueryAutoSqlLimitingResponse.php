<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryAutoSqlLimitingResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryAutoSqlLimitingResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cpuUsage  限流策略CPU利用率。
    * activeSessions  限流策略活跃会话数。
    * condition  限流策略CPU利用率和活跃会话数的关联关系。取值范围：and、or。
    * duration  限流策略满足限流条件的事件持续时间（分钟）。
    * startTime  自治限流规则每天生效开始时间。
    * endTime  自治限流规则每天生效结束时间。
    * sessionAllow  允许的会话数。
    * user  限流规则适用的用户列表。
    * db  限流规则适用的数据库列表。
    * clearTime  每次最大限流时长（分钟）。
    * enable  是否启用自治限流规则。
    * isKeyword  是否为关键字限流。
    * maxConcurrency  最大并发数。
    * retainSqlRule  是否保留SQL限流规则。
    * killSessionSwitch  是否开启kill会话开关。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cpuUsage' => 'int',
            'activeSessions' => 'int',
            'condition' => 'string',
            'duration' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'sessionAllow' => 'int',
            'user' => 'string[]',
            'db' => 'string[]',
            'clearTime' => 'int',
            'enable' => 'bool',
            'isKeyword' => 'bool',
            'maxConcurrency' => 'int',
            'retainSqlRule' => 'bool',
            'killSessionSwitch' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cpuUsage  限流策略CPU利用率。
    * activeSessions  限流策略活跃会话数。
    * condition  限流策略CPU利用率和活跃会话数的关联关系。取值范围：and、or。
    * duration  限流策略满足限流条件的事件持续时间（分钟）。
    * startTime  自治限流规则每天生效开始时间。
    * endTime  自治限流规则每天生效结束时间。
    * sessionAllow  允许的会话数。
    * user  限流规则适用的用户列表。
    * db  限流规则适用的数据库列表。
    * clearTime  每次最大限流时长（分钟）。
    * enable  是否启用自治限流规则。
    * isKeyword  是否为关键字限流。
    * maxConcurrency  最大并发数。
    * retainSqlRule  是否保留SQL限流规则。
    * killSessionSwitch  是否开启kill会话开关。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cpuUsage' => 'int32',
        'activeSessions' => 'int32',
        'condition' => null,
        'duration' => 'int32',
        'startTime' => null,
        'endTime' => null,
        'sessionAllow' => 'int32',
        'user' => null,
        'db' => null,
        'clearTime' => 'int32',
        'enable' => null,
        'isKeyword' => null,
        'maxConcurrency' => 'int32',
        'retainSqlRule' => null,
        'killSessionSwitch' => null
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
    * cpuUsage  限流策略CPU利用率。
    * activeSessions  限流策略活跃会话数。
    * condition  限流策略CPU利用率和活跃会话数的关联关系。取值范围：and、or。
    * duration  限流策略满足限流条件的事件持续时间（分钟）。
    * startTime  自治限流规则每天生效开始时间。
    * endTime  自治限流规则每天生效结束时间。
    * sessionAllow  允许的会话数。
    * user  限流规则适用的用户列表。
    * db  限流规则适用的数据库列表。
    * clearTime  每次最大限流时长（分钟）。
    * enable  是否启用自治限流规则。
    * isKeyword  是否为关键字限流。
    * maxConcurrency  最大并发数。
    * retainSqlRule  是否保留SQL限流规则。
    * killSessionSwitch  是否开启kill会话开关。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cpuUsage' => 'cpu_usage',
            'activeSessions' => 'active_sessions',
            'condition' => 'condition',
            'duration' => 'duration',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'sessionAllow' => 'session_allow',
            'user' => 'user',
            'db' => 'db',
            'clearTime' => 'clear_time',
            'enable' => 'enable',
            'isKeyword' => 'is_keyword',
            'maxConcurrency' => 'max_concurrency',
            'retainSqlRule' => 'retain_sql_rule',
            'killSessionSwitch' => 'kill_session_switch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cpuUsage  限流策略CPU利用率。
    * activeSessions  限流策略活跃会话数。
    * condition  限流策略CPU利用率和活跃会话数的关联关系。取值范围：and、or。
    * duration  限流策略满足限流条件的事件持续时间（分钟）。
    * startTime  自治限流规则每天生效开始时间。
    * endTime  自治限流规则每天生效结束时间。
    * sessionAllow  允许的会话数。
    * user  限流规则适用的用户列表。
    * db  限流规则适用的数据库列表。
    * clearTime  每次最大限流时长（分钟）。
    * enable  是否启用自治限流规则。
    * isKeyword  是否为关键字限流。
    * maxConcurrency  最大并发数。
    * retainSqlRule  是否保留SQL限流规则。
    * killSessionSwitch  是否开启kill会话开关。
    *
    * @var string[]
    */
    protected static $setters = [
            'cpuUsage' => 'setCpuUsage',
            'activeSessions' => 'setActiveSessions',
            'condition' => 'setCondition',
            'duration' => 'setDuration',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'sessionAllow' => 'setSessionAllow',
            'user' => 'setUser',
            'db' => 'setDb',
            'clearTime' => 'setClearTime',
            'enable' => 'setEnable',
            'isKeyword' => 'setIsKeyword',
            'maxConcurrency' => 'setMaxConcurrency',
            'retainSqlRule' => 'setRetainSqlRule',
            'killSessionSwitch' => 'setKillSessionSwitch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cpuUsage  限流策略CPU利用率。
    * activeSessions  限流策略活跃会话数。
    * condition  限流策略CPU利用率和活跃会话数的关联关系。取值范围：and、or。
    * duration  限流策略满足限流条件的事件持续时间（分钟）。
    * startTime  自治限流规则每天生效开始时间。
    * endTime  自治限流规则每天生效结束时间。
    * sessionAllow  允许的会话数。
    * user  限流规则适用的用户列表。
    * db  限流规则适用的数据库列表。
    * clearTime  每次最大限流时长（分钟）。
    * enable  是否启用自治限流规则。
    * isKeyword  是否为关键字限流。
    * maxConcurrency  最大并发数。
    * retainSqlRule  是否保留SQL限流规则。
    * killSessionSwitch  是否开启kill会话开关。
    *
    * @var string[]
    */
    protected static $getters = [
            'cpuUsage' => 'getCpuUsage',
            'activeSessions' => 'getActiveSessions',
            'condition' => 'getCondition',
            'duration' => 'getDuration',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'sessionAllow' => 'getSessionAllow',
            'user' => 'getUser',
            'db' => 'getDb',
            'clearTime' => 'getClearTime',
            'enable' => 'getEnable',
            'isKeyword' => 'getIsKeyword',
            'maxConcurrency' => 'getMaxConcurrency',
            'retainSqlRule' => 'getRetainSqlRule',
            'killSessionSwitch' => 'getKillSessionSwitch'
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
        $this->container['cpuUsage'] = isset($data['cpuUsage']) ? $data['cpuUsage'] : null;
        $this->container['activeSessions'] = isset($data['activeSessions']) ? $data['activeSessions'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['sessionAllow'] = isset($data['sessionAllow']) ? $data['sessionAllow'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['db'] = isset($data['db']) ? $data['db'] : null;
        $this->container['clearTime'] = isset($data['clearTime']) ? $data['clearTime'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['isKeyword'] = isset($data['isKeyword']) ? $data['isKeyword'] : null;
        $this->container['maxConcurrency'] = isset($data['maxConcurrency']) ? $data['maxConcurrency'] : null;
        $this->container['retainSqlRule'] = isset($data['retainSqlRule']) ? $data['retainSqlRule'] : null;
        $this->container['killSessionSwitch'] = isset($data['killSessionSwitch']) ? $data['killSessionSwitch'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets cpuUsage
    *  限流策略CPU利用率。
    *
    * @return int|null
    */
    public function getCpuUsage()
    {
        return $this->container['cpuUsage'];
    }

    /**
    * Sets cpuUsage
    *
    * @param int|null $cpuUsage 限流策略CPU利用率。
    *
    * @return $this
    */
    public function setCpuUsage($cpuUsage)
    {
        $this->container['cpuUsage'] = $cpuUsage;
        return $this;
    }

    /**
    * Gets activeSessions
    *  限流策略活跃会话数。
    *
    * @return int|null
    */
    public function getActiveSessions()
    {
        return $this->container['activeSessions'];
    }

    /**
    * Sets activeSessions
    *
    * @param int|null $activeSessions 限流策略活跃会话数。
    *
    * @return $this
    */
    public function setActiveSessions($activeSessions)
    {
        $this->container['activeSessions'] = $activeSessions;
        return $this;
    }

    /**
    * Gets condition
    *  限流策略CPU利用率和活跃会话数的关联关系。取值范围：and、or。
    *
    * @return string|null
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string|null $condition 限流策略CPU利用率和活跃会话数的关联关系。取值范围：and、or。
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets duration
    *  限流策略满足限流条件的事件持续时间（分钟）。
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
    * @param int|null $duration 限流策略满足限流条件的事件持续时间（分钟）。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets startTime
    *  自治限流规则每天生效开始时间。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 自治限流规则每天生效开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  自治限流规则每天生效结束时间。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 自治限流规则每天生效结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets sessionAllow
    *  允许的会话数。
    *
    * @return int|null
    */
    public function getSessionAllow()
    {
        return $this->container['sessionAllow'];
    }

    /**
    * Sets sessionAllow
    *
    * @param int|null $sessionAllow 允许的会话数。
    *
    * @return $this
    */
    public function setSessionAllow($sessionAllow)
    {
        $this->container['sessionAllow'] = $sessionAllow;
        return $this;
    }

    /**
    * Gets user
    *  限流规则适用的用户列表。
    *
    * @return string[]|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string[]|null $user 限流规则适用的用户列表。
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets db
    *  限流规则适用的数据库列表。
    *
    * @return string[]|null
    */
    public function getDb()
    {
        return $this->container['db'];
    }

    /**
    * Sets db
    *
    * @param string[]|null $db 限流规则适用的数据库列表。
    *
    * @return $this
    */
    public function setDb($db)
    {
        $this->container['db'] = $db;
        return $this;
    }

    /**
    * Gets clearTime
    *  每次最大限流时长（分钟）。
    *
    * @return int|null
    */
    public function getClearTime()
    {
        return $this->container['clearTime'];
    }

    /**
    * Sets clearTime
    *
    * @param int|null $clearTime 每次最大限流时长（分钟）。
    *
    * @return $this
    */
    public function setClearTime($clearTime)
    {
        $this->container['clearTime'] = $clearTime;
        return $this;
    }

    /**
    * Gets enable
    *  是否启用自治限流规则。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 是否启用自治限流规则。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets isKeyword
    *  是否为关键字限流。
    *
    * @return bool|null
    */
    public function getIsKeyword()
    {
        return $this->container['isKeyword'];
    }

    /**
    * Sets isKeyword
    *
    * @param bool|null $isKeyword 是否为关键字限流。
    *
    * @return $this
    */
    public function setIsKeyword($isKeyword)
    {
        $this->container['isKeyword'] = $isKeyword;
        return $this;
    }

    /**
    * Gets maxConcurrency
    *  最大并发数。
    *
    * @return int|null
    */
    public function getMaxConcurrency()
    {
        return $this->container['maxConcurrency'];
    }

    /**
    * Sets maxConcurrency
    *
    * @param int|null $maxConcurrency 最大并发数。
    *
    * @return $this
    */
    public function setMaxConcurrency($maxConcurrency)
    {
        $this->container['maxConcurrency'] = $maxConcurrency;
        return $this;
    }

    /**
    * Gets retainSqlRule
    *  是否保留SQL限流规则。
    *
    * @return bool|null
    */
    public function getRetainSqlRule()
    {
        return $this->container['retainSqlRule'];
    }

    /**
    * Sets retainSqlRule
    *
    * @param bool|null $retainSqlRule 是否保留SQL限流规则。
    *
    * @return $this
    */
    public function setRetainSqlRule($retainSqlRule)
    {
        $this->container['retainSqlRule'] = $retainSqlRule;
        return $this;
    }

    /**
    * Gets killSessionSwitch
    *  是否开启kill会话开关。
    *
    * @return bool|null
    */
    public function getKillSessionSwitch()
    {
        return $this->container['killSessionSwitch'];
    }

    /**
    * Sets killSessionSwitch
    *
    * @param bool|null $killSessionSwitch 是否开启kill会话开关。
    *
    * @return $this
    */
    public function setKillSessionSwitch($killSessionSwitch)
    {
        $this->container['killSessionSwitch'] = $killSessionSwitch;
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

