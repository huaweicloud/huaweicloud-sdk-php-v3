<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoSqlLimitingRule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoSqlLimitingRule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  **参数解释**：  节点ID。  获取方法请参见[查询实例详情](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  节点角色必须为主节点。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * startTime  **参数解释**：  自治限流规则每天生效开始时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  自治限流规则每天生效结束时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * condition  **参数解释**：  限流策略CPU利用率和活跃会话数的关联关系。  **约束限制**：  不涉及。  **取值范围**：    - and：且。   - or：或。  **默认取值**：  不涉及。
    * cpuUsage  **参数解释**：  限流策略CPU利用率。  **约束限制**：  不涉及。  **取值范围**：  [70~100]。  **默认取值**：  不涉及。
    * activeSessions  **参数解释**：  限流策略活跃会话数。  **约束限制**：  不涉及。  **取值范围**：  [1~5000]。  **默认取值**：  不涉及。
    * clearTime  **参数解释**：  每次最大限流时长（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [1~1440]。  **默认取值**：  不涉及。
    * duration  **参数解释**：  限流策略满足限流条件的事件持续时间（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [2~60]。  **默认取值**：  不涉及。
    * maxConcurrency  **参数解释**：  最大并发数。  **约束限制**：  不涉及。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    * retainSqlRule  **参数解释**：  是否保留已有的SQL限流规则。  **约束限制**：  不涉及。  **取值范围**：    - true：保留已有的SQL限流规则。   - false：清理已有的SQL限流规则。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'condition' => 'string',
            'cpuUsage' => 'int',
            'activeSessions' => 'int',
            'clearTime' => 'int',
            'duration' => 'int',
            'maxConcurrency' => 'int',
            'retainSqlRule' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  **参数解释**：  节点ID。  获取方法请参见[查询实例详情](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  节点角色必须为主节点。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * startTime  **参数解释**：  自治限流规则每天生效开始时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  自治限流规则每天生效结束时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * condition  **参数解释**：  限流策略CPU利用率和活跃会话数的关联关系。  **约束限制**：  不涉及。  **取值范围**：    - and：且。   - or：或。  **默认取值**：  不涉及。
    * cpuUsage  **参数解释**：  限流策略CPU利用率。  **约束限制**：  不涉及。  **取值范围**：  [70~100]。  **默认取值**：  不涉及。
    * activeSessions  **参数解释**：  限流策略活跃会话数。  **约束限制**：  不涉及。  **取值范围**：  [1~5000]。  **默认取值**：  不涉及。
    * clearTime  **参数解释**：  每次最大限流时长（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [1~1440]。  **默认取值**：  不涉及。
    * duration  **参数解释**：  限流策略满足限流条件的事件持续时间（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [2~60]。  **默认取值**：  不涉及。
    * maxConcurrency  **参数解释**：  最大并发数。  **约束限制**：  不涉及。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    * retainSqlRule  **参数解释**：  是否保留已有的SQL限流规则。  **约束限制**：  不涉及。  **取值范围**：    - true：保留已有的SQL限流规则。   - false：清理已有的SQL限流规则。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'startTime' => null,
        'endTime' => null,
        'condition' => null,
        'cpuUsage' => 'int32',
        'activeSessions' => 'int32',
        'clearTime' => 'int32',
        'duration' => 'int32',
        'maxConcurrency' => 'int32',
        'retainSqlRule' => null
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
    * nodeId  **参数解释**：  节点ID。  获取方法请参见[查询实例详情](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  节点角色必须为主节点。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * startTime  **参数解释**：  自治限流规则每天生效开始时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  自治限流规则每天生效结束时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * condition  **参数解释**：  限流策略CPU利用率和活跃会话数的关联关系。  **约束限制**：  不涉及。  **取值范围**：    - and：且。   - or：或。  **默认取值**：  不涉及。
    * cpuUsage  **参数解释**：  限流策略CPU利用率。  **约束限制**：  不涉及。  **取值范围**：  [70~100]。  **默认取值**：  不涉及。
    * activeSessions  **参数解释**：  限流策略活跃会话数。  **约束限制**：  不涉及。  **取值范围**：  [1~5000]。  **默认取值**：  不涉及。
    * clearTime  **参数解释**：  每次最大限流时长（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [1~1440]。  **默认取值**：  不涉及。
    * duration  **参数解释**：  限流策略满足限流条件的事件持续时间（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [2~60]。  **默认取值**：  不涉及。
    * maxConcurrency  **参数解释**：  最大并发数。  **约束限制**：  不涉及。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    * retainSqlRule  **参数解释**：  是否保留已有的SQL限流规则。  **约束限制**：  不涉及。  **取值范围**：    - true：保留已有的SQL限流规则。   - false：清理已有的SQL限流规则。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'condition' => 'condition',
            'cpuUsage' => 'cpu_usage',
            'activeSessions' => 'active_sessions',
            'clearTime' => 'clear_time',
            'duration' => 'duration',
            'maxConcurrency' => 'max_concurrency',
            'retainSqlRule' => 'retain_sql_rule'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  **参数解释**：  节点ID。  获取方法请参见[查询实例详情](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  节点角色必须为主节点。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * startTime  **参数解释**：  自治限流规则每天生效开始时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  自治限流规则每天生效结束时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * condition  **参数解释**：  限流策略CPU利用率和活跃会话数的关联关系。  **约束限制**：  不涉及。  **取值范围**：    - and：且。   - or：或。  **默认取值**：  不涉及。
    * cpuUsage  **参数解释**：  限流策略CPU利用率。  **约束限制**：  不涉及。  **取值范围**：  [70~100]。  **默认取值**：  不涉及。
    * activeSessions  **参数解释**：  限流策略活跃会话数。  **约束限制**：  不涉及。  **取值范围**：  [1~5000]。  **默认取值**：  不涉及。
    * clearTime  **参数解释**：  每次最大限流时长（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [1~1440]。  **默认取值**：  不涉及。
    * duration  **参数解释**：  限流策略满足限流条件的事件持续时间（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [2~60]。  **默认取值**：  不涉及。
    * maxConcurrency  **参数解释**：  最大并发数。  **约束限制**：  不涉及。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    * retainSqlRule  **参数解释**：  是否保留已有的SQL限流规则。  **约束限制**：  不涉及。  **取值范围**：    - true：保留已有的SQL限流规则。   - false：清理已有的SQL限流规则。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'condition' => 'setCondition',
            'cpuUsage' => 'setCpuUsage',
            'activeSessions' => 'setActiveSessions',
            'clearTime' => 'setClearTime',
            'duration' => 'setDuration',
            'maxConcurrency' => 'setMaxConcurrency',
            'retainSqlRule' => 'setRetainSqlRule'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  **参数解释**：  节点ID。  获取方法请参见[查询实例详情](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  节点角色必须为主节点。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    * startTime  **参数解释**：  自治限流规则每天生效开始时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * endTime  **参数解释**：  自治限流规则每天生效结束时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * condition  **参数解释**：  限流策略CPU利用率和活跃会话数的关联关系。  **约束限制**：  不涉及。  **取值范围**：    - and：且。   - or：或。  **默认取值**：  不涉及。
    * cpuUsage  **参数解释**：  限流策略CPU利用率。  **约束限制**：  不涉及。  **取值范围**：  [70~100]。  **默认取值**：  不涉及。
    * activeSessions  **参数解释**：  限流策略活跃会话数。  **约束限制**：  不涉及。  **取值范围**：  [1~5000]。  **默认取值**：  不涉及。
    * clearTime  **参数解释**：  每次最大限流时长（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [1~1440]。  **默认取值**：  不涉及。
    * duration  **参数解释**：  限流策略满足限流条件的事件持续时间（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [2~60]。  **默认取值**：  不涉及。
    * maxConcurrency  **参数解释**：  最大并发数。  **约束限制**：  不涉及。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    * retainSqlRule  **参数解释**：  是否保留已有的SQL限流规则。  **约束限制**：  不涉及。  **取值范围**：    - true：保留已有的SQL限流规则。   - false：清理已有的SQL限流规则。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'condition' => 'getCondition',
            'cpuUsage' => 'getCpuUsage',
            'activeSessions' => 'getActiveSessions',
            'clearTime' => 'getClearTime',
            'duration' => 'getDuration',
            'maxConcurrency' => 'getMaxConcurrency',
            'retainSqlRule' => 'getRetainSqlRule'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['cpuUsage'] = isset($data['cpuUsage']) ? $data['cpuUsage'] : null;
        $this->container['activeSessions'] = isset($data['activeSessions']) ? $data['activeSessions'] : null;
        $this->container['clearTime'] = isset($data['clearTime']) ? $data['clearTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['maxConcurrency'] = isset($data['maxConcurrency']) ? $data['maxConcurrency'] : null;
        $this->container['retainSqlRule'] = isset($data['retainSqlRule']) ? $data['retainSqlRule'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['condition'] === null) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if ($this->container['cpuUsage'] === null) {
            $invalidProperties[] = "'cpuUsage' can't be null";
        }
        if ($this->container['activeSessions'] === null) {
            $invalidProperties[] = "'activeSessions' can't be null";
        }
        if ($this->container['clearTime'] === null) {
            $invalidProperties[] = "'clearTime' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['maxConcurrency'] === null) {
            $invalidProperties[] = "'maxConcurrency' can't be null";
        }
        if ($this->container['retainSqlRule'] === null) {
            $invalidProperties[] = "'retainSqlRule' can't be null";
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
    * Gets nodeId
    *  **参数解释**：  节点ID。  获取方法请参见[查询实例详情](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  节点角色必须为主节点。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId **参数解释**：  节点ID。  获取方法请参见[查询实例详情](https://support.huaweicloud.com/api-taurusdb/ShowGaussMySqlInstanceInfoUnifyStatus.html)。  **约束限制**：  节点角色必须为主节点。  **取值范围**：  只能由英文字母、数字组成，前面为UUID，后缀为no07，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**：  自治限流规则每天生效开始时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime **参数解释**：  自治限流规则每天生效开始时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
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
    *  **参数解释**：  自治限流规则每天生效结束时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime **参数解释**：  自治限流规则每天生效结束时间。  **约束限制**：  格式为 \"hh:mm\"。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets condition
    *  **参数解释**：  限流策略CPU利用率和活跃会话数的关联关系。  **约束限制**：  不涉及。  **取值范围**：    - and：且。   - or：或。  **默认取值**：  不涉及。
    *
    * @return string
    */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
    * Sets condition
    *
    * @param string $condition **参数解释**：  限流策略CPU利用率和活跃会话数的关联关系。  **约束限制**：  不涉及。  **取值范围**：    - and：且。   - or：或。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;
        return $this;
    }

    /**
    * Gets cpuUsage
    *  **参数解释**：  限流策略CPU利用率。  **约束限制**：  不涉及。  **取值范围**：  [70~100]。  **默认取值**：  不涉及。
    *
    * @return int
    */
    public function getCpuUsage()
    {
        return $this->container['cpuUsage'];
    }

    /**
    * Sets cpuUsage
    *
    * @param int $cpuUsage **参数解释**：  限流策略CPU利用率。  **约束限制**：  不涉及。  **取值范围**：  [70~100]。  **默认取值**：  不涉及。
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
    *  **参数解释**：  限流策略活跃会话数。  **约束限制**：  不涉及。  **取值范围**：  [1~5000]。  **默认取值**：  不涉及。
    *
    * @return int
    */
    public function getActiveSessions()
    {
        return $this->container['activeSessions'];
    }

    /**
    * Sets activeSessions
    *
    * @param int $activeSessions **参数解释**：  限流策略活跃会话数。  **约束限制**：  不涉及。  **取值范围**：  [1~5000]。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setActiveSessions($activeSessions)
    {
        $this->container['activeSessions'] = $activeSessions;
        return $this;
    }

    /**
    * Gets clearTime
    *  **参数解释**：  每次最大限流时长（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [1~1440]。  **默认取值**：  不涉及。
    *
    * @return int
    */
    public function getClearTime()
    {
        return $this->container['clearTime'];
    }

    /**
    * Sets clearTime
    *
    * @param int $clearTime **参数解释**：  每次最大限流时长（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [1~1440]。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setClearTime($clearTime)
    {
        $this->container['clearTime'] = $clearTime;
        return $this;
    }

    /**
    * Gets duration
    *  **参数解释**：  限流策略满足限流条件的事件持续时间（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [2~60]。  **默认取值**：  不涉及。
    *
    * @return int
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int $duration **参数解释**：  限流策略满足限流条件的事件持续时间（分钟）。  **约束限制**：  不涉及。  **取值范围**：  [2~60]。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets maxConcurrency
    *  **参数解释**：  最大并发数。  **约束限制**：  不涉及。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
    *
    * @return int
    */
    public function getMaxConcurrency()
    {
        return $this->container['maxConcurrency'];
    }

    /**
    * Sets maxConcurrency
    *
    * @param int $maxConcurrency **参数解释**：  最大并发数。  **约束限制**：  不涉及。  **取值范围**：  [0~1000000000]。  **默认取值**：  不涉及。
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
    *  **参数解释**：  是否保留已有的SQL限流规则。  **约束限制**：  不涉及。  **取值范围**：    - true：保留已有的SQL限流规则。   - false：清理已有的SQL限流规则。  **默认取值**：  不涉及。
    *
    * @return bool
    */
    public function getRetainSqlRule()
    {
        return $this->container['retainSqlRule'];
    }

    /**
    * Sets retainSqlRule
    *
    * @param bool $retainSqlRule **参数解释**：  是否保留已有的SQL限流规则。  **约束限制**：  不涉及。  **取值范围**：    - true：保留已有的SQL限流规则。   - false：清理已有的SQL限流规则。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setRetainSqlRule($retainSqlRule)
    {
        $this->container['retainSqlRule'] = $retainSqlRule;
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

