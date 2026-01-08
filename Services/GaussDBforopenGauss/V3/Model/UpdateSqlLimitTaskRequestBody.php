<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateSqlLimitTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateSqlLimitTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间。 **默认取值**: 不涉及。
    * keyWords  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE，选传。 **取值范围**: 多个关键词以逗号隔开，最大长度为64位，最大关键词数量为100个。 **默认取值**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符。 **默认取值**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与内存利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与CPU利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * databases  **参数解释**: CN节点数据库组。 **约束限制**: 不涉及。 **取值范围**: 每个数据库字符串以逗号形式隔开。 **默认取值**: 不涉及。
    * nodeId  **参数解释**: 限流任务所在的节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'keyWords' => 'string',
            'parallelSize' => 'int',
            'taskName' => 'string',
            'cpuUtilization' => 'int',
            'memoryUtilization' => 'int',
            'databases' => 'string',
            'nodeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间。 **默认取值**: 不涉及。
    * keyWords  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE，选传。 **取值范围**: 多个关键词以逗号隔开，最大长度为64位，最大关键词数量为100个。 **默认取值**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符。 **默认取值**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与内存利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与CPU利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * databases  **参数解释**: CN节点数据库组。 **约束限制**: 不涉及。 **取值范围**: 每个数据库字符串以逗号形式隔开。 **默认取值**: 不涉及。
    * nodeId  **参数解释**: 限流任务所在的节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'keyWords' => null,
        'parallelSize' => null,
        'taskName' => null,
        'cpuUtilization' => null,
        'memoryUtilization' => null,
        'databases' => null,
        'nodeId' => null
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
    * startTime  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间。 **默认取值**: 不涉及。
    * keyWords  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE，选传。 **取值范围**: 多个关键词以逗号隔开，最大长度为64位，最大关键词数量为100个。 **默认取值**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符。 **默认取值**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与内存利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与CPU利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * databases  **参数解释**: CN节点数据库组。 **约束限制**: 不涉及。 **取值范围**: 每个数据库字符串以逗号形式隔开。 **默认取值**: 不涉及。
    * nodeId  **参数解释**: 限流任务所在的节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'keyWords' => 'key_words',
            'parallelSize' => 'parallel_size',
            'taskName' => 'task_name',
            'cpuUtilization' => 'cpu_utilization',
            'memoryUtilization' => 'memory_utilization',
            'databases' => 'databases',
            'nodeId' => 'node_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间。 **默认取值**: 不涉及。
    * keyWords  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE，选传。 **取值范围**: 多个关键词以逗号隔开，最大长度为64位，最大关键词数量为100个。 **默认取值**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符。 **默认取值**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与内存利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与CPU利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * databases  **参数解释**: CN节点数据库组。 **约束限制**: 不涉及。 **取值范围**: 每个数据库字符串以逗号形式隔开。 **默认取值**: 不涉及。
    * nodeId  **参数解释**: 限流任务所在的节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'keyWords' => 'setKeyWords',
            'parallelSize' => 'setParallelSize',
            'taskName' => 'setTaskName',
            'cpuUtilization' => 'setCpuUtilization',
            'memoryUtilization' => 'setMemoryUtilization',
            'databases' => 'setDatabases',
            'nodeId' => 'setNodeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
    * endTime  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间。 **默认取值**: 不涉及。
    * keyWords  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE，选传。 **取值范围**: 多个关键词以逗号隔开，最大长度为64位，最大关键词数量为100个。 **默认取值**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数。 **默认取值**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符。 **默认取值**: 不涉及。
    * cpuUtilization  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与内存利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与CPU利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    * databases  **参数解释**: CN节点数据库组。 **约束限制**: 不涉及。 **取值范围**: 每个数据库字符串以逗号形式隔开。 **默认取值**: 不涉及。
    * nodeId  **参数解释**: 限流任务所在的节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'keyWords' => 'getKeyWords',
            'parallelSize' => 'getParallelSize',
            'taskName' => 'getTaskName',
            'cpuUtilization' => 'getCpuUtilization',
            'memoryUtilization' => 'getMemoryUtilization',
            'databases' => 'getDatabases',
            'nodeId' => 'getNodeId'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['keyWords'] = isset($data['keyWords']) ? $data['keyWords'] : null;
        $this->container['parallelSize'] = isset($data['parallelSize']) ? $data['parallelSize'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['cpuUtilization'] = isset($data['cpuUtilization']) ? $data['cpuUtilization'] : null;
        $this->container['memoryUtilization'] = isset($data['memoryUtilization']) ? $data['memoryUtilization'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskName'] === null) {
            $invalidProperties[] = "'taskName' can't be null";
        }
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
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
    * Gets startTime
    *  **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
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
    * @param string|null $startTime **参数解释**: 任务开始时间，如果该值小于当前时间，会取当前时间的前两分钟。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式必须为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。 **默认取值**: 不涉及。
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
    *  **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间。 **默认取值**: 不涉及。
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
    * @param string|null $endTime **参数解释**: 任务结束时间。 **约束限制**: 当“task_scope”为SQL时必传。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，大于任务开始时间，当前时间指UTC时间。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets keyWords
    *  **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE，选传。 **取值范围**: 多个关键词以逗号隔开，最大长度为64位，最大关键词数量为100个。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getKeyWords()
    {
        return $this->container['keyWords'];
    }

    /**
    * Sets keyWords
    *
    * @param string|null $keyWords **参数解释**: 关键词。 **约束限制**: 当且仅当“limit_type”为SQL_TYPE，选传。 **取值范围**: 多个关键词以逗号隔开，最大长度为64位，最大关键词数量为100个。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setKeyWords($keyWords)
    {
        $this->container['keyWords'] = $keyWords;
        return $this;
    }

    /**
    * Gets parallelSize
    *  **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数。 **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getParallelSize()
    {
        return $this->container['parallelSize'];
    }

    /**
    * Sets parallelSize
    *
    * @param int|null $parallelSize **参数解释**: 并发数。 **约束限制**: 不涉及。 **取值范围**: 大于等于零的整数。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setParallelSize($parallelSize)
    {
        $this->container['parallelSize'] = $parallelSize;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string $taskName **参数解释**: 限流任务名。 **约束限制**: 不涉及。 **取值范围**: 只能为英文字母大小写，下划线，数字和$符。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets cpuUtilization
    *  **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与内存利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getCpuUtilization()
    {
        return $this->container['cpuUtilization'];
    }

    /**
    * Sets cpuUtilization
    *
    * @param int|null $cpuUtilization **参数解释**: CPU利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与内存利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setCpuUtilization($cpuUtilization)
    {
        $this->container['cpuUtilization'] = $cpuUtilization;
        return $this;
    }

    /**
    * Gets memoryUtilization
    *  **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与CPU利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    *
    * @return int|null
    */
    public function getMemoryUtilization()
    {
        return $this->container['memoryUtilization'];
    }

    /**
    * Sets memoryUtilization
    *
    * @param int|null $memoryUtilization **参数解释**: 内存利用率阈值。 **约束限制**: 如果“limit_type”为SESSION_ACTIVE_MAX_COUNT，与CPU利用率两者至少传一个。 **取值范围**: 整数，取值范围[0,100）。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setMemoryUtilization($memoryUtilization)
    {
        $this->container['memoryUtilization'] = $memoryUtilization;
        return $this;
    }

    /**
    * Gets databases
    *  **参数解释**: CN节点数据库组。 **约束限制**: 不涉及。 **取值范围**: 每个数据库字符串以逗号形式隔开。 **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getDatabases()
    {
        return $this->container['databases'];
    }

    /**
    * Sets databases
    *
    * @param string|null $databases **参数解释**: CN节点数据库组。 **约束限制**: 不涉及。 **取值范围**: 每个数据库字符串以逗号形式隔开。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets nodeId
    *  **参数解释**: 限流任务所在的节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param string $nodeId **参数解释**: 限流任务所在的节点ID。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
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

