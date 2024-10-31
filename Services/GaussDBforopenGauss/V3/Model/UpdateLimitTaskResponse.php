<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateLimitTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateLimitTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  限流任务ID。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔开，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * taskName  限流任务名，与请求参数相同。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * parallelSize  并发数，与请求参数相同。
    * startTime  限流任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
    * endTime  限流任务结束时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * ruleName  规则名。
    * jobId  工作流ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'databases' => 'string',
            'taskName' => 'string',
            'keyWords' => 'string',
            'parallelSize' => 'int',
            'startTime' => 'string',
            'endTime' => 'string',
            'cpuUtilization' => 'int',
            'memoryUtilization' => 'int',
            'ruleName' => 'string',
            'jobId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  限流任务ID。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔开，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * taskName  限流任务名，与请求参数相同。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * parallelSize  并发数，与请求参数相同。
    * startTime  限流任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
    * endTime  限流任务结束时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * ruleName  规则名。
    * jobId  工作流ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'databases' => null,
        'taskName' => null,
        'keyWords' => null,
        'parallelSize' => null,
        'startTime' => null,
        'endTime' => null,
        'cpuUtilization' => null,
        'memoryUtilization' => null,
        'ruleName' => null,
        'jobId' => null
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
    * taskId  限流任务ID。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔开，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * taskName  限流任务名，与请求参数相同。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * parallelSize  并发数，与请求参数相同。
    * startTime  限流任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
    * endTime  限流任务结束时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * ruleName  规则名。
    * jobId  工作流ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'databases' => 'databases',
            'taskName' => 'task_name',
            'keyWords' => 'key_words',
            'parallelSize' => 'parallel_size',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'cpuUtilization' => 'cpu_utilization',
            'memoryUtilization' => 'memory_utilization',
            'ruleName' => 'rule_name',
            'jobId' => 'jobId'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  限流任务ID。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔开，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * taskName  限流任务名，与请求参数相同。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * parallelSize  并发数，与请求参数相同。
    * startTime  限流任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
    * endTime  限流任务结束时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * ruleName  规则名。
    * jobId  工作流ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'databases' => 'setDatabases',
            'taskName' => 'setTaskName',
            'keyWords' => 'setKeyWords',
            'parallelSize' => 'setParallelSize',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'cpuUtilization' => 'setCpuUtilization',
            'memoryUtilization' => 'setMemoryUtilization',
            'ruleName' => 'setRuleName',
            'jobId' => 'setJobId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  限流任务ID。
    * databases  CN节点数据库组,每个数据库字符串以逗号形式隔开，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * taskName  限流任务名，与请求参数相同。
    * keyWords  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    * parallelSize  并发数，与请求参数相同。
    * startTime  限流任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
    * endTime  限流任务结束时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
    * cpuUtilization  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * memoryUtilization  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    * ruleName  规则名。
    * jobId  工作流ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'databases' => 'getDatabases',
            'taskName' => 'getTaskName',
            'keyWords' => 'getKeyWords',
            'parallelSize' => 'getParallelSize',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'cpuUtilization' => 'getCpuUtilization',
            'memoryUtilization' => 'getMemoryUtilization',
            'ruleName' => 'getRuleName',
            'jobId' => 'getJobId'
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
        $this->container['databases'] = isset($data['databases']) ? $data['databases'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['keyWords'] = isset($data['keyWords']) ? $data['keyWords'] : null;
        $this->container['parallelSize'] = isset($data['parallelSize']) ? $data['parallelSize'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['cpuUtilization'] = isset($data['cpuUtilization']) ? $data['cpuUtilization'] : null;
        $this->container['memoryUtilization'] = isset($data['memoryUtilization']) ? $data['memoryUtilization'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
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
    *  限流任务ID。
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
    * @param string|null $taskId 限流任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets databases
    *  CN节点数据库组,每个数据库字符串以逗号形式隔开，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
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
    * @param string|null $databases CN节点数据库组,每个数据库字符串以逗号形式隔开，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
    *
    * @return $this
    */
    public function setDatabases($databases)
    {
        $this->container['databases'] = $databases;
        return $this;
    }

    /**
    * Gets taskName
    *  限流任务名，与请求参数相同。
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
    * @param string|null $taskName 限流任务名，与请求参数相同。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets keyWords
    *  关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
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
    * @param string|null $keyWords 关键词，仅当任务类型为SQL_TYPE时，返回该值且与请求参数相同。
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
    *  并发数，与请求参数相同。
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
    * @param int|null $parallelSize 并发数，与请求参数相同。
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
    *  限流任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
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
    * @param string|null $startTime 限流任务开始时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
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
    *  限流任务结束时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
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
    * @param string|null $endTime 限流任务结束时间，格式为yyyy-mm-ddThh:mm:ssZ，当前时间指UTC时间，SQL范围返回该值。
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
    *  cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
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
    * @param int|null $cpuUtilization cpu利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
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
    *  内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
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
    * @param int|null $memoryUtilization 内存利用率，仅当任务类型为SESSION_ACTIVE_MAX_COUNT时，返回该值且只保留正整数。
    *
    * @return $this
    */
    public function setMemoryUtilization($memoryUtilization)
    {
        $this->container['memoryUtilization'] = $memoryUtilization;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名。
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
    * @param string|null $ruleName 规则名。
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets jobId
    *  工作流ID。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId 工作流ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
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

