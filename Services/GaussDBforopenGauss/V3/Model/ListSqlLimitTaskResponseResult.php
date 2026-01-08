<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSqlLimitTaskResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSqlLimitTaskResponseResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    * taskScope  **参数解释**: 任务限流范围。 **取值范围**: 不涉及。
    * limitType  **参数解释**: 任务限流类型。 **取值范围**: 不涉及。
    * limitTypeValue  **参数解释**: 任务限流类型值。 **取值范围**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    * databases  **参数解释**: CN节点数据库组。 **取值范围**: 每个数据库字符串以逗号形式隔开。
    * keyWords  **参数解释**: 关键词。 **取值范围**: 不涉及。
    * status  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **取值范围**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 限流任务开始时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  **参数解释**: 限流任务结束时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * cpuUtilization  **参数解释**: CPU利用率。 **取值范围**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskScope' => 'string',
            'limitType' => 'string',
            'limitTypeValue' => 'string',
            'taskName' => 'string',
            'databases' => 'string',
            'keyWords' => 'string',
            'status' => 'string',
            'instanceId' => 'string',
            'ruleName' => 'string',
            'parallelSize' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'cpuUtilization' => 'int',
            'memoryUtilization' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    * taskScope  **参数解释**: 任务限流范围。 **取值范围**: 不涉及。
    * limitType  **参数解释**: 任务限流类型。 **取值范围**: 不涉及。
    * limitTypeValue  **参数解释**: 任务限流类型值。 **取值范围**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    * databases  **参数解释**: CN节点数据库组。 **取值范围**: 每个数据库字符串以逗号形式隔开。
    * keyWords  **参数解释**: 关键词。 **取值范围**: 不涉及。
    * status  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **取值范围**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 限流任务开始时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  **参数解释**: 限流任务结束时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * cpuUtilization  **参数解释**: CPU利用率。 **取值范围**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskScope' => null,
        'limitType' => null,
        'limitTypeValue' => null,
        'taskName' => null,
        'databases' => null,
        'keyWords' => null,
        'status' => null,
        'instanceId' => null,
        'ruleName' => null,
        'parallelSize' => null,
        'startTime' => null,
        'endTime' => null,
        'cpuUtilization' => null,
        'memoryUtilization' => null
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
    * taskId  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    * taskScope  **参数解释**: 任务限流范围。 **取值范围**: 不涉及。
    * limitType  **参数解释**: 任务限流类型。 **取值范围**: 不涉及。
    * limitTypeValue  **参数解释**: 任务限流类型值。 **取值范围**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    * databases  **参数解释**: CN节点数据库组。 **取值范围**: 每个数据库字符串以逗号形式隔开。
    * keyWords  **参数解释**: 关键词。 **取值范围**: 不涉及。
    * status  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **取值范围**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 限流任务开始时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  **参数解释**: 限流任务结束时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * cpuUtilization  **参数解释**: CPU利用率。 **取值范围**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskScope' => 'task_scope',
            'limitType' => 'limit_type',
            'limitTypeValue' => 'limit_type_value',
            'taskName' => 'task_name',
            'databases' => 'databases',
            'keyWords' => 'key_words',
            'status' => 'status',
            'instanceId' => 'instance_id',
            'ruleName' => 'rule_name',
            'parallelSize' => 'parallel_size',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'cpuUtilization' => 'cpu_utilization',
            'memoryUtilization' => 'memory_utilization'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    * taskScope  **参数解释**: 任务限流范围。 **取值范围**: 不涉及。
    * limitType  **参数解释**: 任务限流类型。 **取值范围**: 不涉及。
    * limitTypeValue  **参数解释**: 任务限流类型值。 **取值范围**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    * databases  **参数解释**: CN节点数据库组。 **取值范围**: 每个数据库字符串以逗号形式隔开。
    * keyWords  **参数解释**: 关键词。 **取值范围**: 不涉及。
    * status  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **取值范围**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 限流任务开始时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  **参数解释**: 限流任务结束时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * cpuUtilization  **参数解释**: CPU利用率。 **取值范围**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskScope' => 'setTaskScope',
            'limitType' => 'setLimitType',
            'limitTypeValue' => 'setLimitTypeValue',
            'taskName' => 'setTaskName',
            'databases' => 'setDatabases',
            'keyWords' => 'setKeyWords',
            'status' => 'setStatus',
            'instanceId' => 'setInstanceId',
            'ruleName' => 'setRuleName',
            'parallelSize' => 'setParallelSize',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'cpuUtilization' => 'setCpuUtilization',
            'memoryUtilization' => 'setMemoryUtilization'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    * taskScope  **参数解释**: 任务限流范围。 **取值范围**: 不涉及。
    * limitType  **参数解释**: 任务限流类型。 **取值范围**: 不涉及。
    * limitTypeValue  **参数解释**: 任务限流类型值。 **取值范围**: 不涉及。
    * taskName  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    * databases  **参数解释**: CN节点数据库组。 **取值范围**: 每个数据库字符串以逗号形式隔开。
    * keyWords  **参数解释**: 关键词。 **取值范围**: 不涉及。
    * status  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    * instanceId  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    * ruleName  **参数解释**: 规则名。 **取值范围**: 不涉及。
    * parallelSize  **参数解释**: 并发数。 **取值范围**: 不涉及。
    * startTime  **参数解释**: 限流任务开始时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * endTime  **参数解释**: 限流任务结束时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    * cpuUtilization  **参数解释**: CPU利用率。 **取值范围**: 不涉及。
    * memoryUtilization  **参数解释**: 内存利用率。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskScope' => 'getTaskScope',
            'limitType' => 'getLimitType',
            'limitTypeValue' => 'getLimitTypeValue',
            'taskName' => 'getTaskName',
            'databases' => 'getDatabases',
            'keyWords' => 'getKeyWords',
            'status' => 'getStatus',
            'instanceId' => 'getInstanceId',
            'ruleName' => 'getRuleName',
            'parallelSize' => 'getParallelSize',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'cpuUtilization' => 'getCpuUtilization',
            'memoryUtilization' => 'getMemoryUtilization'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskScope'] = isset($data['taskScope']) ? $data['taskScope'] : null;
        $this->container['limitType'] = isset($data['limitType']) ? $data['limitType'] : null;
        $this->container['limitTypeValue'] = isset($data['limitTypeValue']) ? $data['limitTypeValue'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['keyWords'] = isset($data['keyWords']) ? $data['keyWords'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['parallelSize'] = isset($data['parallelSize']) ? $data['parallelSize'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['cpuUtilization'] = isset($data['cpuUtilization']) ? $data['cpuUtilization'] : null;
        $this->container['memoryUtilization'] = isset($data['memoryUtilization']) ? $data['memoryUtilization'] : null;
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
    * Gets taskId
    *  **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释**: 限流任务ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskScope
    *  **参数解释**: 任务限流范围。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTaskScope()
    {
        return $this->container['taskScope'];
    }

    /**
    * Sets taskScope
    *
    * @param string|null $taskScope **参数解释**: 任务限流范围。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTaskScope($taskScope)
    {
        $this->container['taskScope'] = $taskScope;
        return $this;
    }

    /**
    * Gets limitType
    *  **参数解释**: 任务限流类型。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getLimitType()
    {
        return $this->container['limitType'];
    }

    /**
    * Sets limitType
    *
    * @param string|null $limitType **参数解释**: 任务限流类型。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLimitType($limitType)
    {
        $this->container['limitType'] = $limitType;
        return $this;
    }

    /**
    * Gets limitTypeValue
    *  **参数解释**: 任务限流类型值。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getLimitTypeValue()
    {
        return $this->container['limitTypeValue'];
    }

    /**
    * Sets limitTypeValue
    *
    * @param string|null $limitTypeValue **参数解释**: 任务限流类型值。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setLimitTypeValue($limitTypeValue)
    {
        $this->container['limitTypeValue'] = $limitTypeValue;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName **参数解释**: 限流任务名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets databases
    *  **参数解释**: CN节点数据库组。 **取值范围**: 每个数据库字符串以逗号形式隔开。
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
    * @param string|null $databases **参数解释**: CN节点数据库组。 **取值范围**: 每个数据库字符串以逗号形式隔开。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets keyWords
    *  **参数解释**: 关键词。 **取值范围**: 不涉及。
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
    * @param string|null $keyWords **参数解释**: 关键词。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setKeyWords($keyWords)
    {
        $this->container['keyWords'] = $keyWords;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
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
    * @param string|null $status **参数解释**: 限流任务状态。 **取值范围**: 当前支持：CREATING，UPDATING，DELETING，WAIT_EXECUTE，EXCUTING，TIME_OVER，DELETED，CREATE_FAILED，UPDATE_FAILED，DELETE_FAILED，EXCEPTION，NODE_SHUT_DOWN。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**: 实例ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId **参数解释**: 实例ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets ruleName
    *  **参数解释**: 规则名。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName **参数解释**: 规则名。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets parallelSize
    *  **参数解释**: 并发数。 **取值范围**: 不涉及。
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
    * @param int|null $parallelSize **参数解释**: 并发数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setParallelSize($parallelSize)
    {
        $this->container['parallelSize'] = $parallelSize;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**: 限流任务开始时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    * @param string|null $startTime **参数解释**: 限流任务开始时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    *  **参数解释**: 限流任务结束时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
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
    * @param string|null $endTime **参数解释**: 限流任务结束时间。 **取值范围**: 格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets cpuUtilization
    *  **参数解释**: CPU利用率。 **取值范围**: 不涉及。
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
    * @param int|null $cpuUtilization **参数解释**: CPU利用率。 **取值范围**: 不涉及。
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
    *  **参数解释**: 内存利用率。 **取值范围**: 不涉及。
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
    * @param int|null $memoryUtilization **参数解释**: 内存利用率。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setMemoryUtilization($memoryUtilization)
    {
        $this->container['memoryUtilization'] = $memoryUtilization;
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

